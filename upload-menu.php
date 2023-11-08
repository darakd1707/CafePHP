<?php
include "data.php";
?>


<?php
$filename = $_FILES['file']['name'];
$filetype = $_FILES['file']['type'];
$filetmp_name = $_FILES['file']['tmp_name'];
$filesize = $_FILES['file']['size'];
$ext = explode(".", $_FILES['file']['name']);
$fileExt = strtolower(end($ext));
$err = array();
$extensions = ["png", "jpg", "md", "jpeg"];

if (in_array($fileExt, $extensions) === false) {
    $err[] = "----------Extension is not Allawoed -----";
}

if (empty($err) == true) {
    move_uploaded_file($filetmp_name, "../images/" . $filename);
    echo "----------------File Added ----------";
    var_dump($filetmp_name);
}

if (isset($_POST['save_task'])) {
    $name = $_POST['nama_menu'];
    $desc = $_POST['deskripsi'];
    $price = (int) $_POST['harga'];
    $category = $_POST['category'];
    // $img_path = $_FILES["file"]["tmp_name"];
    $img_path = "/dash/images/$filename";

    $query = "INSERT INTO menu(nama_menu, deskripsi, harga, category, gambar) VALUES ('$name', $desc, $price, $category, '$img_path')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed.");
    }

    // $_SESSION['message'] = 'Product Added Successfully';
    // $_SESSION['message_type'] = 'success';
    header('Location: add-menu.php');

}

?>