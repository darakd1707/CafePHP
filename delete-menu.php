<?php 
    if($_GET['id_menu']){
        include "data.php";
        $qry_hapus=mysqli_query($conn,"delete from menu where id_menu='".$_GET['id_menu']."'");
        if($qry_hapus){
            echo "<script>alert('Success!');location.href='menu-admin.php';</script>";
        } else {
            echo "<script>alert('Can't remove menu');location.href='menu-admin.php';</script>";
        }
    }
?>