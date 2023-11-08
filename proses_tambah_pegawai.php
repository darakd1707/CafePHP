<?php
if ($_POST) {
    $nama_pegawai = $_POST['nama_customer'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($nama_pegawai)) {
        echo "<script>alert('Name should be filled');location.href='pegawai.php';</script>";
    } elseif (empty($email)) {
        echo "<script>alert('Username should be filled');location.href='pegawai.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password should be filled');location.href='pegawai.php';</script>";
    } else {
        include "data.php";
        $insert = mysqli_query($conn, "insert into user (nama_customer, role, email, password) value ('" . $nama_pegawai . "', '" . "admin" . "','" . $email . "','" . md5($password) . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Success!');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Can't register. Try again!');location.href='pegawai.php';</script>";
        }
    }
}
?>