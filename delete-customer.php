<?php 
    if($_GET['id_customer']){
        include "data.php";
        $qry_hapus=mysqli_query($conn,"delete from user where id_customer='".$_GET['id_customer']."'");
        if($qry_hapus){
            echo "<script>alert('Success!');location.href='customer.php';</script>";
        } else {
            echo "<script>alert('Can't remove customer');location.href='customer.php';</script>";
        }
    }
?>