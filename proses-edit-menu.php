<?php
if ($_POST) {
    $id_menu = $_GET['id_menu'];
    $nama_menu = $_POST['nama_menu'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    include "data.php";
    if (empty($deskripsi)) {
        $update = mysqli_query($conn, "update menu set nama_menu ='" . $nama_menu . "', harga='" . $harga . "' where id_menu = '" . $id_menu . "' ") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Success!');location.href='menu-admin.php';</script>";
        } else {
            echo "<script>alert('Can't edit menu');location.href='menu-admin.php?id_menu=" . $id_menu . "';</script>";
        }
    } elseif (empty($deskripsi) && empty($nama_menu)) {
        $update = mysqli_query($conn, "update menu set harga='" . $harga . "' where id_menu = '" . $id_menu . "'") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Success!');location.href='menu-admin.php';</script>";
        } else {
            echo "<script>alert('Can't edit menu');location.href='menu-admin.php?id_menu=" . $id_menu . "';</script>";
        }
    } elseif (empty($harga) && empty($deskripsi)) {
        $update = mysqli_query($conn, "update menu set nama_menu='" . $nama_menu . "' where id_menu = '" . $id_menu . "'") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Success!');location.href='menu-admin.php';</script>";
        } else {
            echo "<script>alert('Can't edit menu');location.href='menu-admin.php?id_menu=" . $id_menu . "';</script>";
        }
    }elseif (empty($nama_menu)) {
        $update = mysqli_query($conn, "update menu set harga='" . $harga . "', deskripsi='" . $deskripsi . "' where id_menu = '" . $id_menu . "'") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Success!');location.href='menu-admin.php';</script>";
        } else {
            echo "<script>alert('Can't edit menu');location.href='menu-admin.php?id_menu=" . $id_menu . "';</script>";
        }
    } elseif (empty($nama_menu) && empty($deskripsi)) {
        $update = mysqli_query($conn, "update menu set harga='" . $harga . "' where id_menu = '" . $id_menu . "'") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Success!');location.href='menu-admin.php';</script>";
        } else {
            echo "<script>alert('Can't edit menu');location.href='menu-admin.php?id_menu=" . $id_menu . "';</script>";
        }
    } elseif (empty($harga)) {
        $update = mysqli_query($conn, "update menu set nama_menu='" . $nama_menu . "', deskripsi='" . $deskripsi . "' where id_menu = '" . $id_menu . "'") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Success!');location.href='menu-admin.php';</script>";
        } else {
            echo "<script>alert('Can't edit menu');location.href='menu-admin.php?id_menu=" . $id_menu . "';</script>";
        }
    } elseif (empty($nama_menu) && empty($harga)) {
        $update = mysqli_query($conn, "update menu set deskripsi='" . $deskripsi . "' where id_menu = '" . $id_menu . "'") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Success!');location.href='menu-admin.php';</script>";
        } else {
            echo "<script>alert('Can't edit menu');location.href='menu-admin.php?id_menu=" . $id_menu . "';</script>";
        }
    } elseif (empty($harga) && empty($nama_menu)) {
        $update = mysqli_query($conn, "update menu set deskripsi='" . $deskripsi . "' where id_menu = '" . $id_menu . "'") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Success!');location.href='menu-admin.php';</script>";
        } else {
            echo "<script>alert('Can't edit menu');location.href='menu-admin.php?id_menu=" . $id_menu . "';</script>";
        }
    } elseif (empty($harga) && empty($deskripsi)) {
        $update = mysqli_query($conn, "update menu set nama_menu='" . $nama_menu . "' where id_menu = '" . $id_menu . "'") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Success!');location.href='menu-admin.php';</script>";
        } else {
            echo "<script>alert('Can't edit menu');location.href='menu-admin.php?id_menu=" . $id_menu . "';</script>";
        }
    } elseif (empty($deskripsi) && empty($nama_menu)) {
        $update = mysqli_query($conn, "update menu set harga='" . $harga . "' where id_menu = '" . $id_menu . "'") or die(mysqli_error($conn));
        if ($update) {
            echo "<script>alert('Success!');location.href='menu-admin.php';</script>";
        } else {
            echo "<script>alert('Can't edit menu');location.href='menu-admin.php?id_menu=" . $id_menu . "';</script>";
        }
    }

}
?>