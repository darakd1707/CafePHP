<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <title> Dash </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
        integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
        crossorigin="anonymous" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>

<?php
include "data.php";
$qry_detail_menu = mysqli_query($conn, "select * from menu where id_menu = '" . $_GET['id_menu'] . "'");
$dt_menu = mysqli_fetch_array($qry_detail_menu);
?>

<body>
    <header class="header_section" style="background-color: black">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.php">
                    <span>
                        Dash
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  mx-auto ">
                        <li class="nav-item">
                            <a class="nav-link" href="admin.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu-admin.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="add-menu.php">Add Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="customer.php">Customer</a>
                        </li>
                    </ul>
                    <div class="user_option">
                        <a href="logout.php" class="order_online">
                            Log Out
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="row">
        <div class="col-md-4">
            <img src="images/<?= $dt_menu['gambar'] ?>" class="card-img-top" style="width: 300px; length: 300px">
        </div>
        <div class="col-md-6">
            <form action="proses-edit-menu.php?id_menu=<?= $dt_menu['id_menu'] ?>" method="post">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <td>Menu Name</td>
                            <td><input type="text" name="nama_menu" placeholder="<?= $dt_menu['nama_menu'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Price</td>
                            <td>$<input type="number" min="0" name="harga" placeholder="<?= $dt_menu['harga'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><textarea rows="5" cols="50" type="text" name="deskripsi" placeholder="<?= $dt_menu['deskripsi'] ?>"></textarea></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input class="btn btn-success" type="submit" value="SET"></td>
                        </tr>
                    </thead>
                </table>
            </form>
        </div>
    </div>
</body>