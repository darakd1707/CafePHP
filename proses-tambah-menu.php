<?php
require 'vendor/autoload.php';
use Aws\S3\S3Client;
use Aws\S3\Exception\S3Exception;

$filename = $_FILES['gambar']['name'];
$filetype = $_FILES['gambar']['type'];
$filetmp_name = $_FILES['gambar']['tmp_name'];
$filesize = $_FILES['gambar']['size'];
$ext = explode(".", $_FILES['gambar']['name']);
$fileExt = strtolower(end($ext));
$err = array();
$extensions = ["png", "jpg", "md", "jpeg"];

if (in_array($fileExt, $extensions) === false) {
    $err[] = "Extension is not Allowed";
}

$region = 'ap-southeast-1';
$version = 'latest';
$access_key_id = 'AKIA4NGK4APLR3B54NWI';
$secret_access_key = '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';
$bucket = 'bebekbakarmadura';


$statusMsg = '';
$status = 'danger';

if ($_POST) {
    $nama_menu = $_POST['nama_menu'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $category = $_POST['category'];
    $gambar = "$filename";
    
    $s3 = new S3Client([
        'version' => $version,
        'region' => $region,
        'credentials' => [
            'key' => $access_key_id,
            'secret' => $secret_access_key,
        ]
    ]);

            // Upload file to S3 bucket 
    $result = $s3->putObject([
        'Bucket' => $bucket,
        'Key' => $filename,
        'ACL' => 'public-read',
        'SourceFile' => $filetmp_name
    ]);
    $result_arr = $result->toArray();

    if (!empty($result_arr['ObjectURL'])) {
        $s3_file_link = $result_arr['ObjectURL'];
    } else {
        $api_error = 'Upload Failed! S3 Object URL not found.';
    }

    if (empty($nama_menu)) {
        echo "<script>alert('Menu name should be filled');location.href='add-menu.php';</script>";
    } elseif (empty($deskripsi)) {
        echo "<script>alert('Description should be filled');location.href='add-menu.php';</script>";
    } elseif (empty($harga)) {
        echo "<script>alert('Price should be filled');location.href='add-menu.php';</script>";
    } elseif (empty($category)) {
        echo "<script>alert('Category should be filled');location.href='add-menu.php';</script>";
    } elseif (empty($gambar)) {
        echo "<script>alert('Image should be filled');location.href='add-menu.php';</script>";
    } else {
        include "data.php";
        $insert = mysqli_query($conn, "insert into menu (nama_menu, deskripsi, harga, category, gambar) value ('" . $nama_menu . "','" . $deskripsi . "','" . $harga . "','" . $category . "' ,'" . $gambar . "')") or die(mysqli_error($conn));

        if ($insert) {
            echo "<script>alert('Success!');location.href='menu-admin.php';</script>";
        } else {
            echo "<script>alert('Can't add menu. Try again!');location.href='add-menu.php';</script>";
        }
    }
}
?>
