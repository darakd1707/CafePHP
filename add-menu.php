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
<header class="header_section" style="background-color: black">
    <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.php">
                <span>
                    Dash
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

<section class="book_section layout_padding">
    <div class="container">
        <div class="heading_container" style="text-align: center">
            <h2 style="text-align: center">
                Add a Menu
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form_container">
                    <form action="proses-tambah-menu.php" method="post" enctype="multipart/form-data">
                        <div>
                            <input type="text" class="form-control" placeholder="Menu Name" name="nama_menu" />
                        </div>
                        <div>
                            <textarea type="text" class="form-control" placeholder="Desciption"
                                name="deskripsi"></textarea>
                        </div>
                        <div>
                            <select class="form-control nice-select wide" name="category">
                                <option value="" disabled selected>
                                    Category
                                </option>
                                <option value="Makanan">
                                    Foods
                                </option>
                                <option value="Minuman">
                                    Beverages
                                </option>
                                <option value="Snack">
                                    Sides
                                </option>
                            </select>
                        </div>
                        <div>
                            <input type="number" class="form-control" placeholder="Price" min="0" name="harga">
                        </div>
                        <div class="input-group">
                            <div class="custom-file">
                                <input accept="image/*" class="form-control" type="file" id="formFile" name="gambar">
                            </div>
                        </div>
                        <div class="btn_box">
                            <button>
                                Add
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>