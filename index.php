<?php include 'config/language.php';?>
<?php include 'config/config.php';?>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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

    <!-- Start NavBar -->

    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">POS.SYS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/img/products/Mask Group 1@2x.png" class="img-fluid rounded-circle mr-2 navbar_img img-thumbnail" alt=""> POS.SYS
                        </a>
                        <div class="dropdown-menu mt-lg-2" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">1</a>
                            <a class="dropdown-item" href="#">2</a>
                            <a class="dropdown-item" href="#">3</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/img/defualt.png" class="img-fluid rounded-circle mr-2 navbar_img img-thumbnail" alt=""> USD
                        </a>
                        <div class="dropdown-menu mt-lg-2" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">1</a>
                            <a class="dropdown-item" href="#">2</a>
                            <a class="dropdown-item" href="#">3</a>
                        </div>
                    </li>
                    <li class="nav-item mr-3">
                       	<?php
						if( $_SESSION['lang'] =='en') echo "<a class='nav-link languages mt-lg-1' href='?lang=ar'><img src='assets/img/lang/ar.png' class='langimg ar'>"."عربى".'</a>'; 
						if( $_SESSION['lang'] =='ar') echo "<a class='nav-link languages mt-lg-1' href='?lang=en'><img src='assets/img/lang/en.png' class='langimg'>"."En".'</a>'; 
						?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End NavBar -->

    <!-- Start Content Page -->

    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <!-- Start Left Side -->
                <div class="col-lg-8 col-md-12">
                    <!-- Start Input -->
                    <div class="col-lg-12 d-flex justify-content-between">
                        <div class="col-lg-7 col-md-6  col-sm-10 col-10 p-0">
                            <div class="input-search search-products my-3">
                                <button class="input-btn-search"><i class="fas fa-search "></i></button>
                                <input type="text" class="input-text" placeholder="Search by Name, Group,..." name="" id="products-search-input" autocomplete="on">
                            </div>
                        </div>
                        <!-- Start Search Single || Multi Select Branch -->
                        <div class="col-lg-5 col-md-4 d-lg-block d-md-block d-sm-none d-none p-0">
                            <div class="select-branch my-3">
                                <div class="dropdown search_input p-0" data-control="checkbox-dropdown">
                                    <label class="dropdown-label">Select</label>

                                    <div class="dropdown-list">

                                        <label class="dropdown-option">
                                            <input type="checkbox" name="dropdown-group" value="1" />
                                            <span>Men</span>
                                        </label>

                                        <label class="dropdown-option">
                                            <input type="checkbox" name="dropdown-group" value="2" />
                                            <span>Men</span>
                                        </label>

                                        <label class="dropdown-option">
                                            <input type="checkbox" name="dropdown-group" value="3" />
                                            <span>Men</span>
                                        </label>
                                        <label class="dropdown-option">
                                            <input type="checkbox" name="dropdown-group" value="4" />
                                            <span>Men</span>
                                        </label>
                                        <label class="dropdown-option">
                                            <input type="checkbox" name="dropdown-group" value="5" />
                                            <span>Men</span>
                                        </label>

                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- End Search Single || Multi Select Branch -->
                        
                        <!-- Start Shopping Button -->
                        <div class="d-lg-none col-md-1 col-sm-2 col-2">
                            <div class="shopping-card  my-3 ">
                                <button class="shopping-card-link" id="open_customer_add_responsive"><i class="fas fa-shopping-cart"></i></button>
                            </div>
                        </div>
                        <!-- End Shopping Button -->
                    </div>
                    <!-- End Input -->
                    <!-- Start Category -->
                    <div class="col 10">
                        <div class="shopping-categories overflow-auto">
                            <ul class="group-list d-flex justify-content-between mt-1 mb-2"  id="mydiv-categories">
                                <li class="list-categories">
                                    <a href="#" class="shopping_button badge actives">
                                        <div class="cat-img">
                                            <img src="assets/img/brands/Vector-2.png" class="mb-2" alt="" srcset="">
                                        </div>
                                        <div class="shopping-title">Men</div>
                                    </a>
                                </li>
                                <li class="list-categories">
                                    <a href="#" class="shopping_button badge ">
                                        <div class="cat-img">
                                            <img src="assets/img/brands/Vector-1.png" class="mb-2" alt="" srcset="">
                                        </div>
                                        <div class="shopping-title">Women</div>
                                    </a>
                                </li>
                                <li class="list-categories">
                                    <a href="#" class="shopping_button badge ">
                                        <div class="cat-img">
                                            <img src="assets/img/brands/Vector.png" class="mb-2" alt="" srcset="">
                                        </div>
                                        <div class="shopping-title">Kids</div>
                                    </a>
                                </li>
                                <li class="list-categories">
                                    <a href="#" class="shopping_button badge ">
                                        <div class="cat-img">
                                            <img src="assets/img/brands/baby-boy (2) 1.png" class="mb-2" alt="" srcset="">
                                        </div>
                                        <div class="shopping-title">Baby</div>
                                    </a>
                                </li>
                                <li class="list-categories">
                                    <a href="#" class="shopping_button badge">
                                        <div class="cat-img">
                                            <img src="assets/img/brands/watch 1.png" class="mb-2" alt="" srcset="">
                                        </div>
                                        <div class="shopping-title">Watches</div>
                                    </a>
                                </li>
                                <li class="list-categories">
                                    <a href="#" class="shopping_button badge">
                                        <div class="cat-img">
                                            <img src="assets/img/brands/sneakers 1.png" class="mb-2" alt="" srcset="">
                                        </div>
                                        <div class="shopping-title">Footwear</div>
                                    </a>
                                </li>
                                <li class="list-categories">
                                    <a href="#" class="shopping_button badge ">
                                        <div class="cat-img">
                                            <img src="assets/img/brands/bag 1.png" class="mb-2" alt="" srcset="">
                                        </div>
                                        <div class="shopping-title">Bags</div>
                                    </a>
                                </li>
                                <li class="list-categories">
                                    <a href="#" class="shopping_button badge ">
                                        <div class="cat-img">
                                            <img src="assets/img/brands/Vector.png" class="mb-2" alt="" srcset="">
                                        </div>
                                        <div class="shopping-title">ALL</div>
                                    </a>
                                </li>

                            </ul>
                            <ul class="all-buttons d-flex justify-content-between mb-2" id="cat-active">
                                <li class="sub-cat-menu">
                                    <button class="sub-cat-menu-btn active-btn">all</button>
                                </li>
                                <li class="sub-cat-menu">
                                    <button class="sub-cat-menu-btn ">all</button>
                                </li>
                                <li class="sub-cat-menu">
                                    <button class="sub-cat-menu-btn ">all</button>
                                </li>
                                <li class="sub-cat-menu">
                                    <button class="sub-cat-menu-btn ">all</button>
                                </li>
                                <li class="sub-cat-menu">
                                    <button class="sub-cat-menu-btn ">all</button>
                                </li>
                                <li class="sub-cat-menu">
                                    <button class="sub-cat-menu-btn ">all</button>
                                </li>
                                <li class="sub-cat-menu">
                                    <button class="sub-cat-menu-btn ">all</button>
                                </li>
                               
                            </ul>
                        </div>
                    </div>
                    <!-- End Category -->
                    <!-- Start Products -->
                    <div class="col 10">
                        <div class="product-card d-flex flex-wrap justify-content-between my-1">

                        <div class="product_card pt-2 pb-3 pr-3 pl-1 ">
                            <div class="inner JScallHover" data-toggle="modal" data-target="#myModalRight">
                                <div class="product_img">
                                    <img src="assets/img/products/Mask Group 1@2x.png" class="" alt="">
                                </div>
                                <div class="product_content float-left px-3 py-2 clearfix">
                                    <h3 class="heading">
                                        Andora Full Sleeve Pullover
                                    </h3>
                                    <div class="sizes-large">
                                        <span>S,M,L,XL,XXL</span>
                                    </div>

                                    <div class="color-size">
                                        <div class="card-color d-flex  align-items-center">
                                            <div id="blue-color" class="blue-color product-color mr-2">
                                            </div>
                                            <div id="red-color" class="red-color product-color mr-2">
                                            </div>
                                            <div id="sky-color" class="sky-color product-color mr-2">
                                            </div>
                                       </div>
                                       <div class="price-products ">23$</div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="product_card pt-2 pb-3 pr-3 pl-1 ">
                            <div class="inner JScallHover" data-toggle="modal" data-target="#myModalRight">
                                <div class="product_img">
                                    <img src="assets/img/products/Mask Group 1@2x.png" class="" alt="">
                                </div>
                                <div class="product_content float-left px-3 py-2 clearfix">
                                    <h3 class="heading">
                                        Andora Full Sleeve Pullover
                                    </h3>
                                    <div class="sizes-large">
                                        <span>S,M,L,XL,XXL</span>
                                    </div>

                                    <div class="color-size">
                                        <div class="card-color d-flex  align-items-center">
                                            <div id="blue-color" class="blue-color product-color mr-2">
                                            </div>
                                            <div id="red-color" class="red-color product-color mr-2">
                                            </div>
                                            <div id="sky-color" class="sky-color product-color mr-2">
                                            </div>
                                       </div>
                                       <div class="price-products ">23$</div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="product_card pt-2 pb-3 pr-3 pl-1  position-relative ">
                            <div class="inner JScallHover" data-toggle="modal" data-target="#myModalRight">
                                <div class="abroad_product"></div>
                                <div class="product_img">
                                    <img src="assets/img/products/Mask Group 1@2x.png" class="" alt="">
                                </div>
                                <div class="product_content float-left px-3 py-2 clearfix">
                                    <h3 class="heading">
                                        Andora Full Sleeve Pullover
                                    </h3>
                                    <div class="sizes-large">
                                        <span>S,M,L,XL,XXL</span>
                                    </div>

                                    <div class="color-size">
                                        <div class="card-color d-flex  align-items-center">
                                            <div id="blue-color" class="blue-color product-color mr-2">
                                            </div>
                                            <div id="red-color" class="red-color product-color mr-2">
                                            </div>
                                            <div id="sky-color" class="sky-color product-color mr-2">
                                            </div>
                                       </div>
                                       <div class="price-products ">23$</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="product_card pt-2 pb-3 pr-3 pl-1  ">
                            <div class="inner JScallHover" data-toggle="modal" data-target="#myModalRight">
                                <div class="product_img">
                                    <img src="assets/img/products/Mask Group 1@2x.png" class="" alt="">
                                </div>
                                <div class="product_content float-left px-3 py-2 clearfix">
                                    <h3 class="heading">
                                        Andora Full Sleeve Pullover
                                    </h3>
                                    <div class="sizes-large">
                                        <span>S,M,L,XL,XXL</span>
                                    </div>

                                    <div class="color-size">
                                        <div class="card-color d-flex  align-items-center">
                                            <div id="blue-color" class="blue-color product-color mr-2">
                                            </div>
                                            <div id="red-color" class="red-color product-color mr-2">
                                            </div>
                                            <div id="sky-color" class="sky-color product-color mr-2">
                                            </div>
                                       </div>
                                       <div class="price-products ">23$</div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="product_card pt-2 pb-3 pr-3 pl-1  ">
                            <div class="inner JScallHover" data-toggle="modal" data-target="#myModalRight">
                                <div class="product_img">
                                    <img src="assets/img/products/Mask Group 1@2x.png" class="" alt="">
                                </div>
                                <div class="product_content float-left px-3 py-2 clearfix">
                                    <h3 class="heading">
                                        Andora Full Sleeve Pullover
                                    </h3>
                                    <div class="sizes-large">
                                        <span>S,M,L,XL,XXL</span>
                                    </div>

                                    <div class="color-size">
                                        <div class="card-color d-flex  align-items-center">
                                            <div id="blue-color" class="blue-color product-color mr-2">
                                            </div>
                                            <div id="red-color" class="red-color product-color mr-2">
                                            </div>
                                            <div id="sky-color" class="sky-color product-color mr-2">
                                            </div>
                                       </div>
                                       <div class="price-products ">23$</div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="product_card pt-2 pb-3 pr-3 pl-1 position-relative ">
                            <div class="inner JScallHover" data-toggle="modal" data-target="#myModalRight">
                                <div class="abroad_product"></div>
                                <div class="product_img">
                                    <img src="assets/img/products/Mask Group 1@2x.png" class="" alt="">
                                </div>
                                <div class="product_content float-left px-3 py-2 clearfix">
                                    <h3 class="heading">
                                        Andora Full Sleeve Pullover
                                    </h3>
                                    <div class="sizes-large">
                                        <span>S,M,L,XL,XXL</span>
                                    </div>

                                    <div class="color-size">
                                        <div class="card-color d-flex  align-items-center">
                                            <div id="blue-color" class="blue-color product-color mr-2">
                                            </div>
                                            <div id="red-color" class="red-color product-color mr-2">
                                            </div>
                                            <div id="sky-color" class="sky-color product-color mr-2">
                                            </div>
                                       </div>
                                       <div class="price-products ">23$</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="product_card pt-2 pb-3 pr-3 pl-1 ">
                            <div class="inner JScallHover" data-toggle="modal" data-target="#myModalRight">
                                <div class="product_img">
                                    <img src="assets/img/products/Mask Group 1@2x.png" class="" alt="">
                                </div>
                                <div class="product_content float-left px-3 py-2 clearfix">
                                    <h3 class="heading">
                                        Andora Full Sleeve Pullover
                                    </h3>
                                    <div class="sizes-large">
                                        <span>S,M,L,XL,XXL</span>
                                    </div>

                                    <div class="color-size">
                                        <div class="card-color d-flex  align-items-center">
                                            <div id="blue-color" class="blue-color product-color mr-2">
                                            </div>
                                            <div id="red-color" class="red-color product-color mr-2">
                                            </div>
                                            <div id="sky-color" class="sky-color product-color mr-2">
                                            </div>
                                       </div>
                                       <div class="price-products ">23$</div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="product_card pt-2 pb-3 pr-3 pl-1  ">
                            <div class="inner JScallHover" data-toggle="modal" data-target="#myModalRight">
                                <div class="product_img">
                                    <img src="assets/img/products/Mask Group 1@2x.png" class="" alt="">
                                </div>
                                <div class="product_content float-left px-3 py-2 clearfix">
                                    <h3 class="heading">
                                        Andora Full Sleeve Pullover
                                    </h3>
                                    <div class="sizes-large">
                                        <span>S,M,L,XL,XXL</span>
                                    </div>

                                    <div class="color-size">
                                        <div class="card-color d-flex  align-items-center">
                                            <div id="blue-color" class="blue-color product-color mr-2">
                                            </div>
                                            <div id="red-color" class="red-color product-color mr-2">
                                            </div>
                                            <div id="sky-color" class="sky-color product-color mr-2">
                                            </div>
                                       </div>
                                       <div class="price-products ">23$</div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="product_card pt-2 pb-3 pr-3 pl-1  position-relative ">
                            <div class="inner JScallHover" data-toggle="modal" data-target="#myModalRight">
                                <div class="abroad_product"></div>
                                <div class="product_img">
                                    <img src="assets/img/products/Mask Group 1@2x.png" class="" alt="">
                                </div>
                                <div class="product_content float-left px-3 py-2 clearfix">
                                    <h3 class="heading">
                                        Andora Full Sleeve Pullover
                                    </h3>
                                    <div class="sizes-large">
                                        <span>S,M,L,XL,XXL</span>
                                    </div>

                                    <div class="color-size">
                                        <div class="card-color d-flex  align-items-center">
                                            <div id="blue-color" class="blue-color product-color mr-2">
                                            </div>
                                            <div id="red-color" class="red-color product-color mr-2">
                                            </div>
                                            <div id="sky-color" class="sky-color product-color mr-2">
                                            </div>
                                       </div>
                                       <div class="price-products ">23$</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="product_card pt-2 pb-3 pr-3 pl-1px-3  ">
                            <div class="inner JScallHover" data-toggle="modal" data-target="#myModalRight">
                                <div class="product_img">
                                    <img src="assets/img/products/Mask Group 1@2x.png" class="" alt="">
                                </div>
                                <div class="product_content float-left px-3 py-2 clearfix">
                                    <h3 class="heading">
                                        Andora Full Sleeve Pullover
                                    </h3>
                                    <div class="sizes-large">
                                        <span>S,M,L,XL,XXL</span>
                                    </div>

                                    <div class="color-size">
                                        <div class="card-color d-flex  align-items-center">
                                            <div id="blue-color" class="blue-color product-color mr-2">
                                            </div>
                                            <div id="red-color" class="red-color product-color mr-2">
                                            </div>
                                            <div id="sky-color" class="sky-color product-color mr-2">
                                            </div>
                                       </div>
                                       <div class="price-products ">23$</div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="product_card pt-2 pb-3 pr-3 pl-1 ">
                            <div class="inner JScallHover" data-toggle="modal" data-target="#myModalRight">
                                <div class="product_img">
                                    <img src="assets/img/products/Mask Group 1@2x.png" class="" alt="">
                                </div>
                                <div class="product_content float-left px-3 py-2 clearfix">
                                    <h3 class="heading">
                                        Andora Full Sleeve Pullover
                                    </h3>
                                    <div class="sizes-large">
                                        <span>S,M,L,XL,XXL</span>
                                    </div>

                                    <div class="color-size">
                                        <div class="card-color d-flex  align-items-center">
                                            <div id="blue-color" class="blue-color product-color mr-2">
                                            </div>
                                            <div id="red-color" class="red-color product-color mr-2">
                                            </div>
                                            <div id="sky-color" class="sky-color product-color mr-2">
                                            </div>
                                       </div>
                                       <div class="price-products ">23$</div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="product_card pt-2 pb-3 pr-3 pl-1 position-relative ">
                            <div class="inner JScallHover" data-toggle="modal" data-target="#myModalRight">
                                <div class="abroad_product"></div>
                                <div class="product_img">
                                    <img src="assets/img/products/Mask Group 1@2x.png" class="" alt="">
                                </div>
                                <div class="product_content float-left px-3 py-2 clearfix">
                                    <h3 class="heading">
                                        Andora Full Sleeve Pullover
                                    </h3>
                                    <div class="sizes-large">
                                        <span>S,M,L,XL,XXL</span>
                                    </div>

                                    <div class="color-size">
                                        <div class="card-color d-flex  align-items-center">
                                            <div id="blue-color" class="blue-color product-color mr-2">
                                            </div>
                                            <div id="red-color" class="red-color product-color mr-2">
                                            </div>
                                            <div id="sky-color" class="sky-color product-color mr-2">
                                            </div>
                                       </div>
                                       <div class="price-products ">23$</div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        </div>
                    </div>
                    <!-- End Products -->
                </div>
                <!-- End Left Side -->
                <!-- Start Sidebar -->

                <div class="col lg-4  p-0 overlay">
                    <div class="product-sidebar py-3 position-relative ">
                        <div class="add-customer">
                            <div class="input-search search-products d-flex mx-5">
                                <input type="checkbox" class="option-input radio check-button mr-0  search-customer-check " name="customer" />
                                <input type="text" class="input-text" placeholder="Search by Name, Group,..." name="" id="customer-search-input" autocomplete="on">
                                <button class="input-btn-search"><i class="fas fa-plus"></i></button>

                                <!-- Close Responsive Cart -->
                                <button type="submit" class="position-absolute close-customer-add-responsive d-lg-none" id="close_customer_add_responsive"><i class="fas fa-times"></i></button>
                            </div>
                            <h6 class="order-number my-2 px-5">Order Num : #2566877</h6>
                        </div>
                        <div id="sidebar" class="product-sales p-0">
                            <div class="empty">
                                <img src="assets/img/noitem/product-not-found.png" alt="">
                            </div>
                        </div>
                        <div class="total py-1">
                            <div class="totals-item">
                                <label class="total-heading">Subtotal</label>
                                <div class="totals-value" id="sub-total-value">4.58$</div>
                                <h4 class="d-none" id="sub-total-value">4.58</h4>

                            </div>
                            <div class="totals-item">
                                <label class="total-heading">Tax</label>
                                <div class="totals-value">0.50$</div>
                                <h4 class="d-none" id="cart-tax-value">0.50</h4>
                            </div>
                        </div>
                        <div class="promo py-2 ">
                            <label class=" mb-0 d-flex justify-content-between align-items-center">
                            <input type="checkbox" class="option-input promo-input radio check-button" name="promp" >
                            <label for=" " class="promo-head ">Promo</label>
                            <input type="number" class="promo-txt ml-2 mb-1" placeholder="Code " name="promo-value " />
                            </label>
                            <label class="float-right mb-0 d-flex justify-content-between align-items-center">
                            <input type="checkbox" class="option-input promo-input radio check-button " name="discount"  >
                            <label for=" " class="promo-head pr-1 ">Discount</label>
                            <input type="number" class="promo-txt ml-2 mb-1" placeholder="$0.00 " name="discount-value" />
                            </label>
                        </div>
                        <div class="discount ">
                                <span>Discount was giving because..</span>
                            </div>
                        <div class="chekout d-flex justify-content-between">
                            <div class="all-checkout-total">
                                <span class="total-heading">Total </span>
                                <h4 class="d-inline-block dolar-s">
                                    <span class="salary" id="tot">
                                        0
                                    </span>$
                                </h4>
                            </div>
                            <button class="check-btn" id="checkout-btn">
                                <i class="far fa-credit-card "></i>   Checkout
                            </button>

                        </div>
                    </div>
                </div>
                <!-- End Sidebar -->

            </div>
        </div>
    </div>

    <!-- End Content Page -->

     <!-- Product Option لما اضغط علي اي منتج -->
     <div id="myModalRight" class="modal fade modal-right" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header border-0 p-0">
                      <div class="img-special-product m-auto">
                          <img src="assets/img/products/Mask Group 1@2x.png" alt="">
                          <img src="assets/img/products/Mask Group 1@2x.png" class="d-lg-inline-block d-md-inline-block d-sm-none d-none" alt="">
                      </div>
                  </div>
                  <div class="title-product d-flex justify-content-between">
                      <div class="name-product">
                          <span>Andora Full Sleeve Pullover</span>
                      </div>
                      <div class="salary-product">
                          <span>5.00$</span>
                      </div>
                      <h4 class="pu-salary d-none" id="real-salary"> 5:00</h4>
                  </div>
                  <div class="products-info">
                      <p>
                          50% cotton/50% polyester, with up to 5% polyester created from recycled plastic Soft, durable fleece with double-needle cover-seamed neck and armholes stays strong when you work or play hard.
                      </p>
                  </div>
                  <div class="products-colors d-flex justify-content-between align-items-center">
                      <div class="name-color">
                          <h6>Color</h6>
                      </div>
                      <div class="colors-check d-flex align-items-center">
                          <div class="all-colors mr-5">
                              <label for=" " class="salary-head pr-1 ">5$</label>
                              <input type="radio" class="product-black-color all-color-buttons radio check-color-button" name="colors" value="black">
                          </div>
                          <div class="all-colors mr-5">
                              <label for=" " class="salary-head  pr-1 ">5$</label>
                              <input type="radio" class="product-red-color all-color-buttons radio check-color-button " name="colors" value="red">
                          </div>
                          <div class="all-colors mr-5">
                              <label for=" " class="salary-head  pr-1 ">5$</label>
                              <input type="radio" class="product-blue-color all-color-buttons radio check-color-button " name="colors" value="blue">
                          </div>
                      </div>
                      <div class="color-salary">
                          <div class="color-values d-inline-block float-right " id="salary-special-color ">0.00$</div>
                      </div>
                  </div>
                  <div class="products-colors d-flex justify-content-between align-items-center m-0" style=" height: 20%;">
                      <div class="name-size">
                          <h6>Size</h6>
                      </div>
                      <div class="sizes-check d-inline-block " id="mydiv-size">
                          <div class="all-sizes  d-inline-block">
                              <label for=" " class="size-head pr-1 ">5$</label>
                              <button class="small-btn size-product" id="small-btn">S</button>
                          </div>
                          <div class="all-sizes  d-inline-block">
                              <label for=" " class="size-head pr-1 ">5$</label>
                              <button class="medium-btn size-product" id="medium-btn">M</button>
                          </div>
                          <div class="all-sizes  d-inline-block">
                              <label for=" " class="size-head pr-1 ">5$</label>
                              <button class="large-btn size-product active" id="large-btn">L</button>
                          </div>
                          <div class="all-sizes xlarge d-inline-block">
                              <label for=" " class="size-head pr-1 ">5$</label>
                              <button class="small-btn size-product" id="xlarge-btn">XL</button>
                          </div>
                          <div class="all-sizes xxlarge  d-inline-block">
                              <label for=" " class="size-head pr-1 ">5$</label>
                              <button class="medium-btn size-product" id="xxlarge-btn">2XL</button>
                          </div>
                          <div class="all-sizes  d-inline-block">
                              <label for=" " class="size-head pr-1 ">5$</label>
                              <button class="large-btn size-product" id="xxxlarge-btn">3XL</button>
                          </div>

                      </div>
                      <div class="color-salary">
                          <div class="color-values d-inline-block float-right " id="salary-special-color ">0.00$</div>
                      </div>
                  </div>
                  <div class="products-size-color-price d-flex justify-content-between align-items-center align-content-center">
                      <div>
                          <button id="add-products">add</button>
                      </div>
                      <div class="quan-salary-clothes d-flex justify-content-center align-items-center align-content-center">
                          <span class="minus-all-quan">
                              <i class="fas fa-minus"></i>
                          </span>
                          <input type="text " name="qty " id="qty-all-quan" class="qty" />
                          <span class="plus-all-quan">
                              <i class="fas fa-plus"></i>
                          </span>
                      </div>
                      <div class="products-size-color-price-total d-flex justify-content-center align-items-center align-content-center  w-50 ">
                          <span class="total-heading ">Total </span>
                          <h4 class="d-inline-block "> <span class="salary " id="tot2 ">
                          8.00$
                          </span></h4>
                      </div>


                  </div>

              </div>
          </div>
      </div> 



    
    
    
    
    
    
    <script src="assets/vendor/jquery/jquery.min.js "></script>
    <script src="assets/vendor/font-awesome/all.min.js "></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js "></script>

    <!-- <script src="assets/vendor/bootstrap-rtl/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/bootstrap-rtl/js/bootstrap.min.js"></script> -->

    <script src="assets/vendor/waypoints/jquery.waypoints.min.js "></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js "></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js "></script>
    <script src="assets/vendor/aos/aos.js "></script>
    <script src="assets/js/add-products.js "></script>
    <script src="assets/js/dropdown.js "></script>
    <script src="assets/js/main.js "></script>
</body>

</html>