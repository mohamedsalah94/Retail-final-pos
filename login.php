<?php include 'config/language.php';?>
<?php include 'config/config.php';?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POS SYSTEM</title>

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />

    <!-- <link rel="stylesheet" href="assets/vendor/bootstrap-rtl/css/bootstrap.min.css"> -->

    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/all.min.css" />

    <!-- main css file -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <?php if(isset($_SESSION["dir"]) && $_SESSION["dir"]=='rtl') { ?>
        <link rel="stylesheet" href="assets/css/style.rtl.css" />
    <?php } ?>

    <!-- Light && dark mode -->
    <link rel="stylesheet" href="assets/css/<?php echo $config['theme_mode'] ?>.css" />
</head>

<body>


    <div class="login-side">
        <div class="login-content">
            <h1 class="login-heading">POS.SYS</h1>
            <form action="index.php">
                <div class="form-group form-group-login">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control login-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="entsher@entsher.com" required>

                </div>
                <div class="form-group form-group-login mb-4">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control login-input" id="exampleInputPassword1" placeholder="************************" required>
                </div>

                <button type="submit" class="btn btn-login mb-4">Login</button>
                <div class="form-check check-login">
                    <input type="checkbox" id="exampleCheck1" class="option-input radio check-button mr-0  search-customer-check " name="customer" />
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    <a href="#" class="forget-password-login">Forgot password?</a>
                </div>
                <div class="footer-login">
                    <p>Don't have an account yet? <a href="#">Register</a></p>
                </div>
            </form>
        </div>
    </div>
    <div class="carousel-side">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/img/login/2@2x.png" alt="First slide">
                    <div class="carousel-content">
                        <h2 class="carousel-heading">Lorem ipsum dolor sit amet.</h2>
                        <p class="carousel-paragraph">
                            lorem ipsum dolor sit amet consectetuer adipiscing elit lorem ipsum dolor sit amet .
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/login/3@2x.png" alt="Second slide">
                    <div class="carousel-content">
                        <h2 class="carousel-heading">Lorem ipsum dolor sit amet.</h2>
                        <p class="carousel-paragraph">
                            lorem ipsum dolor sit amet consectetuer adipiscing elit lorem ipsum dolor sit amet .
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/login/2@2x.png" alt="Third slide">
                    <div class="carousel-content">
                        <h2 class="carousel-heading">Lorem ipsum dolor sit amet.</h2>
                        <p class="carousel-paragraph">
                            lorem ipsum dolor sit amet consectetuer adipiscing elit lorem ipsum dolor sit amet .
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/img/login/3@2x.png" alt="Fourth slide">
                    <div class="carousel-content">
                        <h2 class="carousel-heading">Lorem ipsum dolor sit amet.</h2>
                        <p class="carousel-paragraph">
                            lorem ipsum dolor sit amet consectetuer adipiscing elit lorem ipsum dolor sit amet .
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>














    <script src="assets/vendor/jquery/jquery.min.js "></script>
    <script src="assets/vendor/filter/js/ui/1.8.21/jquery-ui.min.js"></script>
    <script src="assets/vendor/font-awesome/all.min.js "></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js "></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js "></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js "></script>
    <script src="assets/vendor/aos/aos.js "></script>
    <script src="assets/js/add-products.js "></script>
    <script src="assets/js/dropdown.js "></script>
    <script src="assets/js/main.js "></script>
</body>

</html>