<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="Gajah-Mada" content="Petshop">
    <meta name="keywords" content="Contact">
    <meta name="author" content="UBM">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gajah Mada Petshop - Product</title>

    <link rel="stylesheet" type="text/css" href="assets/css/style-product.css">
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

    <section id="product-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-product">Our <span>Product</span></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3 align-middle" style="max-width: 540px; background-color: #F58634;">
                        <div class="row g-0">
                            <div class="col-md-4 image-icon  align-middle">
                                <img src="assets/images/product/cutter-icon.png" class="img-fluid rounded-start align-middle" alt="salon" width="150px" height="150px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Grooming Mada</h5>
                                    <p class="card-text">Sell all the equipment used at the mada grooming. Pet soap, shampoo, and skin nutrition in it.</p>
                                    <p class="card-text"><small class="text-muted">Last updated today</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px; background-color: #373435; color: white;">
                        <div class="row g-0">
                            <div class="col-md-4 image-icon align-middle">
                                <img src="assets/images/product/doctor-icon.png" class="img-fluid rounded-start" alt="clinic" width="150px" height="150px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Clinic Mada</h5>
                                    <p class="card-text">Sell all the equipment used at the mada clinic. Pet thermometer, cone collar, and first aid kit in it.</p>
                                    <p class="card-text"><small class="text-muted">Last updated today</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px; background-color: #373435; color: white;">
                        <div class="row g-0">
                            <div class="col-md-4 image-icon align-middle">
                                <img src="assets/images/product/food-icon.png" class="img-fluid rounded-start" alt="food" width="150px" height="150px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Food Mada</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated today</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card mb-3" style="max-width: 540px; background-color: #F58634;">
                        <div class="row g-0">
                            <div class="col-md-4  image-icon align-middle">
                                <img src="assets/images/product/camp-icon.png" class="img-fluid rounded-start" alt="camping" width="150px" height="150px">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Camp Mada</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated today</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row card-promo">
                <div class="col-md-12">
                    <div class="card text-center bg-secondary text-white">
                        <div class="card-header">
                            Our Promo
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special Big Deal</h5>
                            <p class="card-text">King Package : Gymastic Doggo : All equipment for trainning</p>
                            <a href="#" class="btn btn-warning">Only $799</a>
                        </div>
                        <div class="card-footer text-white">
                            Last updated today
                        </div>
                    </div>
                </div>
            </div>

            <div class="row card-promo">
                <div class="col-md-12">
                    <div class="card text-center bg-secondary text-white">
                        <div class="card-header">
                            Our Promo
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Super Combo Meal</h5>
                            <p class="card-text">Queen Package : A6 Meats, Vitamins, and Medic tool</p>
                            <a href="#" class="btn btn-warning">Only $1599</a>
                        </div>
                        <div class="card-footer text-white">
                            Last updated today
                        </div>
                    </div>
                </div>
            </div>

            <div class="row row-product">
                <div class="col-md-3">
                    <div class="card bg-success text-white" style="width: 100%">
                        <div class="display-card">
                            <img src="assets/images/product/Category/Chicken-icon.png" class="card-img-top" alt="Chicken">
                        </div>

                        <div class="card-body text-center">
                            <h5 class="card-title">Roast Chicken Mada</h5>
                            <p class="card-text product-desc">Premium Quality Chicken with sweet flower which only grew on teyvat highland make your pet better from illness</p>
                            <a href="#" class="btn btn-warning">Only $99</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-success text-white" style="width: 100%;">
                        <div class="display-card">
                            <img src="assets/images/product/Category/Meat.png" class="card-img-top" alt="meat">
                        </div>

                        <div class="card-body text-center">
                            <h5 class="card-title">Tianshu Meat A6 Quality</h5>
                            <p class="card-text product-desc">Fresh and Premium Quality. A Great Snowcow King. The meat high protein and Vitamins for your pets</p>
                            <a href="#" class="btn btn-warning">Only $269</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-success text-white" style="width: 100%;">
                        <div class="display-card">
                            <img src="assets/images/product/Category/milk-icon.png" class="card-img-top" alt="milk">
                        </div>

                        <div class="card-body text-center">
                            <h5 class="card-title">Mondstadt Special Milk</h5>
                            <p class="card-text product-desc">Imported from Dawn Winery, rich of flavour and healthy for your pet. It's a big deal, and have 1 year expired date.</p>
                            <a href="#" class="btn btn-warning">Only $130</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card bg-success text-white" style="width: 100%;">
                        <div class="display-card">
                            <img src="assets/images/product/Category/Raw Meat.png" class="card-img-top" alt="raw">
                        </div>

                        <div class="card-body text-center">
                            <h5 class="card-title">Dragonspine Chill Meat</h5>
                            <p class="card-text product-desc">Awesome Meat which can trigger a bone of your pet, grow fastly, and high respond pets. Frozen for 30 days.</p>
                            <a href="#" class="btn btn-warning">Only $399</a>
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