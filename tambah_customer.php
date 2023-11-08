<!DOCTYPE html>
<html>

<head>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style_login.css">
        <link rel="shortcut icon" href="images/favicon.png" type="">
        <title>Dash - Sign In</title>
    </head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Welcome To Dash!</h2>
                </div>
            </div>
            <form action="proses_tambah_customer.php" autocomplete="off" method="post">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="wrap d-md-flex">
                            <div class="img" style="background-image: url(images/about-img.png);">
                            </div>
                            <div class="login-wrap p-4 p-md-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4" style="text-align: centerx`x`">Sign In</h3>
                                    </div>

                                </div>
                                <form action="#" class="signin-form" autocomplete="off">
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Nama</label>
                                        <input type="text" name="nama_customer" value="" class="form-control"
                                            placeholder="Nama" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Alamat</label>
                                        <input type="text" name="alamat" value="" class="form-control"
                                            placeholder="alamat" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Email</label>
                                        <input type="email" name="email" value="" class="form-control"
                                            placeholder="Email" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Password</label>
                                        <input type="password" name="password" value="" class="form-control"
                                            placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="login"
                                            class="form-control btn btn-primary rounded submit px-3" value="Sign In">
                                    </div>
                                    <div class="form-group d-md-flex">
                                    </div>
                                </form>
                                <p class="text-center">Already a member? <a data-toggle="tab" href="login.php">Log
                                        In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>