<?php 
session_start();
    if($_POST){
        include "data.php";
        
        $qry_get_menu = mysqli_query($conn,"select * from menu where id_menu = '".$_GET['id_menu']."'");
        $dt_menu = mysqli_fetch_array($qry_get_menu);
        $_SESSION['cart'][]=array(
            'id_menu'=>$dt_menu['id_menu'],
            'nama_menu'=>$dt_menu['nama_menu'],
            'harga'=>$dt_menu['harga'],
            'quantity'=>$_POST['quantity']
        );
    }
    header('location: cart.php');
?>
