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
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class=" content-title"> <span style="font-size: 25px"><?php
                                                                                        if (isset($_SESSION["pengguna"])) { ?>
                                        Selamat Datang <b style="color:#fff212"><?= $_SESSION["pengguna"]['nama'] ?></b> <br></span>
                                <?php } ?>Gajah Mada <span class="petshop">Petshop</span></h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="content-desc">The best <span class="desc-home">petshop</span> & <span class="desc-home">Grooming</span> Boutique</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <p class="content-desc">We are animal lovers who care about your pets.</p>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">
                    <img class="doggo" src="assets/images/home/doggo-wallpaper.png" alt="doggo">
                </div>
            </div>
        </div>
    </section>

    <section id="video-youtube" style="padding:50px;">
        <div class="container">
            <div class="row">
                <h2 class="title-video">Our Beloved <span class="petvideo">Pet Video</span></h2>
            </div>
            <div class="row">
                <?php $ambil = $koneksi->query("SELECT * FROM video"); ?>
                <?php while ($data = $ambil->fetch_assoc()) { ?>
                    <div class="col-md-6 mb-3">
                        <iframe class="iframe-responsive" width="100%" height="315" src="<?= $data['linkvideo'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Services</h3>
                            <ul>
                                <li>
                                    <a href="services.php">Grooming</a>
                                </li>

                                <li>
                                    <a href="services.php">Trainning Camp</a>
                                </li>

                                <li>
                                    <a href="services.php">Clinic</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3>Gajah Mada Petshop Menu</h3>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>

                                <li>
                                    <a href="about.php">About</a>
                                </li>

                                <li>
                                    <a href="product.php">Product</a>
                                </li>

                                <li>
                                    <a href="services.php">Services</a>
                                </li>

                                <li>
                                    <a href="contact.php">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>Gajah Mada Petshop</h3>
                            <p>A Petshop who really care abour your pets. Our services always available, just for your pets. We love pets, and pets love us</p>
                        </div>
                        <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright">Gajah Mada Petshop © 2022</p>
                </div>
            </footer>
    </section>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="assets/js/smooth-scroll.js"></script>
<script src="assets/js/smooth-web.js"></script>

</html>