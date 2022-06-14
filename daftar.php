<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Gajah-Mada" content="Petshop">
    <meta name="keywords" content="Contact">
    <meta name="author" content="UBM">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gajah Mada Petshop</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style-index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="assets/images/paw-icon.png">
</head>

<body>
    <section id="navigation-bar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand text-logo" href="index.php">
                    <img class="image-bar" src="assets/images/paw-icon.png" alt="Gajah-Mada-Petshop">Gajah Mada Petshop
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="product.php">Product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>

                        <?php
                        include 'koneksi.php';
                        if (isset($_SESSION["pengguna"])) : ?>

                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>

                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="daftar.php">Daftar</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        <?php endif ?>
                    </ul>

                    <form class="d-flex form-search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>

    <section id="content-home">
        <div class="container">
            <div class="row justify-content-center" style="padding-top:100px">
                <div class="col-md-8 col-lg-8">
                    <div class="card border-0 shadow-lg my-5" style="border-radius: 25px;color:white;background-color:black">
                        <div class="card-body p-0">
                            <div class="p-5">
                                <div class="text-center mb-5">
                                    <h2 style="color: white;">Daftar</h2>
                                </div>
                                <form method="post" enctype="multipart/form-data" id="loginForm" name="registration">
                                    <div class="form-group mb-3">
                                        <label class="mb-1">Nama</label>
                                        <input type="text" class="form-control" name="nama" value="" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="mb-1">Email</label>
                                        <input type="email" value="" class="form-control" name="email" value="" placeholder="Email">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="mb-1">Username</label>
                                        <input type="username" value="" class="form-control" name="username" value="" placeholder="Username">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="mb-1">Kata Sandi</label>
                                        <input type="password" value="" class="form-control" name="password" placeholder="Password" id="password" value="" data-toggle="password">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="mb-1">Konfirmasi Kata Sandi</label>
                                        <input type="password" class="form-control" name="confirmpassword" placeholder="Ulangi Password Anda" id="confirmpassword" value="" data-toggle="password">
                                    </div>
                                    <br>
                                    <center>
                                        <div class="form-group" style="padding-bottom: 20px;">
                                            <button type="submit" name="submit" value="submit" class="btn btn-primary btn-lg pull-right">
                                                <i class="fa fa-sign-in"></i> Registrasi
                                            </button>
                                        </div>
                                        <a href="login.php" class="text-white">Sudah punya akun ? Silahkan login</a>
                                    </center>
                                </form>
                                <?php
                                if (isset($_POST["submit"])) {
                                    $nama = $_POST['nama'];
                                    $username = $_POST['username'];
                                    $email = $_POST['email'];
                                    $password = $_POST['password'];
                                    $confirmpassword = $_POST['confirmpassword'];
                                    $ambil = $koneksi->query("SELECT*FROM pengguna 
							WHERE email='$email'");
                                    $yangcocok = $ambil->num_rows;
                                    if ($_POST['password'] != $_POST['confirmpassword']) {
                                        echo "<script>alert('Password baru dengan Konfirmasi Password tidak sama');</script>";
                                    } else {
                                        if ($yangcocok == 1) {
                                            echo "<script>alert('Pendaftaran Gagal, email sudah ada')</script>";
                                            echo "<script>location='daftar.php';</script>";
                                        } else {
                                            $koneksi->query("INSERT INTO pengguna (nama, email,  username, password, level)
								VALUES('$nama','$email','$username','$password', 'Member')");
                                            echo "<script>alert('Pendaftaran Berhasil')</script>";
                                            echo "<script>location='login.php';</script>";
                                        }
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding-bottom:450px">
            </div>
        </div>
    </section>
</body>