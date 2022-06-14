<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Gajah-Mada" content="Petshop">
    <meta name="keywords" content="Contact">
    <meta name="author" content="UBM">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gajah Mada Petshop - Our Story</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style-contact.css">
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

    <section id="title-contact" class="contact section-bg">
        <div class="container-fluid container">
            <div class="section-title">
                <h2>Our Contact - Gajah Mada Petshop</h2>
                <h3>Get In Touch With
                    <span>Us</span>
                </h3>
                <p>In Pets we loved</p>
            </div>
        </div>
    </section>

    <section id="iframe-map">
        <div class="container-iframe">
            <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7922.3584679525375!2d109.12811913531658!3d-6.869114795669747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb77df37d6427%3A0xedf463a65ba9ade8!2sEzri%20PO!5e0!3m2!1sen!2sid!4v1649307027287!5m2!1sen!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="detail-contact">
        <div class="container container-detail">
            <div class="row">
                <div class="col-md-6">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputFName4" class="form-label">Nama Depan</label>
                            <input type="text" class="form-control" id="inputFName4">
                        </div>

                        <div class="col-md-6">
                            <label for="inputLName4" class="form-label">Nama Belakang</label>
                            <input type="text" class="form-control" id="inputLName4">
                        </div>

                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>

                        <div class="col-md-12">
                            <textarea id="textarea_message" cols="50" rows="6" placeholder="Message for Us..."></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Send a Message</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <p class="description">Our Address</p>
                            <img src="assets/images/contact/maps-image.png" alt="maps" class="information">
                            <p class="desc1">Gajah Mada<br>Central Java, Tegal </p>
                        </div>

                        <div class="col-md-6">
                            <p class="description">Call Us</p>
                            <img src="assets/images/contact/phone-image.png" alt="phone" class="information">
                            <p class="desc1">+62 858 3019 4239<br>+62 832 2536 1236</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <p class="description2">Working Hours</p>
                            <img src="assets/images/contact/clock-image.png" alt="clock" class="information">
                            <p class="desc2">All Day<br>7:30AM to 4:30PM</p>
                        </div>

                        <div class="col-md-6">
                            <p class="description2">Social Media</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="https://www.facebook.com" target="_blank">
                                        <img src="assets/images/contact/facebook-image.png" alt="facebook" class="social-media">
                                    </a>
                                    <p class="text-media">Facebook</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <a href="https://www.web.whatsapp.com" target="_blank">
                                        <img src="assets/images/contact/whatsapp-image.png" alt="whatsapp" class="social-media">
                                    </a>
                                    <p class="text-media">Whatsapp</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <a href="#">Grooming</a>
                                </li>

                                <li>
                                    <a href="#">Trainning Camp</a>
                                </li>

                                <li>
                                    <a href="#">Clinic</a>
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