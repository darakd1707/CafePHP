<?php
if ($_POST) {
    $nama_customer = $_POST['nama_customer'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($nama_customer)) {
        echo "<script>alert('Name should be filled');location.href='tambah_customer.php';</script>";
    } elseif (empty($email)) {
        echo "<script>alert('Email should be filled');location.href='tambah_customer.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password should be filled');location.href='tambah_customer.php';</script>";
    } else {
        include "data.php";
        $insert = mysqli_query($conn, "insert into user (nama_customer, alamat, email, password) value ('" . $nama_customer . "','" . $alamat . "','" . $email . "','" . md5($password) . "')") or die(mysqli_error($conn));
        if ($insert) {
            echo "<script>alert('Success!');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Can't register. Try again!');location.href='tambah_customer.php';</script>";
        }
    }
}
?>