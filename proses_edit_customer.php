<?php
if ($_POST) {
    $id_customer = $_POST['id_customer'];
    $nama_customer = $_POST['nama_customer'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (empty($nama_customer)) {
        echo "<script>alert('Nama Customer tidak boleh kosong');location.href='edit_customer.php';</script>";

    } elseif (empty($email)) {
        echo "<script>alert('Email tidak boleh kosong');location.href='edit_customer.php';</script>";
    } else {
        include "data.php";
        if (empty($password)) {
            $update = mysqli_query($conn, "update user set nama_customer='" . $nama_customer . "', alamat='" . $alamat . "', email='" . $email . "' where id_customer = '" . $id_customer . "' ") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update customer');location.href='customer.php';</script>";
            } else {
                echo "<script>alert('Gagal update customer');location.href='customer.php?id_customer=" . $id_customer . "';</script>";
            }
        } else {
            $update = mysqli_query($conn, "update customer set nama_customer='" . $nama_siswa . "', alamat='" . $alamat . "', email='" . $emaili . "', password='" . md5($password) . "' where id_customer = '" . $id_customer . "'") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update customer');location.href='customer.php';</script>";
            } else {
                echo "<script>alert('Gagal update customer');location.href='customer.php?id_customer=" . $id_customer . "';</script>";
            }
        }

    }
}
?>