<?php
require_once "../controllers/GeneroController.php";
require_once "../controllers/LivroController.php";
$listaGeneros = GeneroController::trazerTodos();
$listaLivros = null;
if (isset($_GET['genero'])){
    $listaLivros = LivroController::trazerTodosPorGenero($_GET['genero']);
}else{
    $listaLivros = LivroController::trazerTodos();
}
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop || Witter Multipage Responsive Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,700,600,500,300' rel='stylesheet' type='text/css'>

    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- Font-Awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- pe-icon-7-stroke css -->
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <!-- Flaticon css -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- venobox css -->
    <link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="screen" />
    <!-- nivo slider css -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr css -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<!--Header Area Start-->
<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-6">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="img/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="col-md-1 col-sm-6 visible-sm  col-xs-6">
                <div class="header-right">
                    <ul>
                        <li>
                            <a href="account.html"><i class="flaticon-people"></i></a>
                        </li>
                        <li class="shoping-cart">
                            <a href="#">
                                <i class="flaticon-shop"></i>
                                <span>2</span>
                            </a>
                            <div class="add-to-cart-product">
                                <div class="cart-product">
                                    <div class="cart-product-image">
                                        <a href="single-product.html">
                                            <img src="img/shop/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-product-info">
                                        <p>
                                            <span>1</span>
                                            x
                                            <a href="single-product.html">East of eden</a>
                                        </p>
                                        <a href="single-product.html">S, Orange</a>
                                        <span class="cart-price">$ 140.00</span>
                                    </div>
                                    <div class="cart-product-remove">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="cart-product">
                                    <div class="cart-product-image">
                                        <a href="single-product.html">
                                            <img src="img/shop/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-product-info">
                                        <p>
                                            <span>1</span>
                                            x
                                            <a href="single-product.html">East of eden</a>
                                        </p>
                                        <a href="single-product.html">S, Orange</a>
                                        <span class="cart-price">$ 140.00</span>
                                    </div>
                                    <div class="cart-product-remove">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="total-cart-price">
                                    <div class="cart-product-line fast-line">
                                        <span>Shipping</span>
                                        <span class="free-shiping">$10.50</span>
                                    </div>
                                    <div class="cart-product-line">
                                        <span>Total</span>
                                        <span class="total">$ 140.00</span>
                                    </div>
                                </div>
                                <div class="cart-checkout">
                                    <a href="checkout.html">
                                        Check out
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 col-sm-12 hidden-xs">
                <div class="mainmenu text-center">
                    <nav>
                        <ul id="nav">
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="shop.php">FEATURED</a></li>
                            <li><a href="shop.php">REVIEW BOOK</a></li>
                            <li><a href="about.html">ABOUT AUTHOR</a></li>
                            <li><a href="#">pages</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Check Out</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="shop.php">Shopping Page</a></li>
                                    <li><a href="single-product.html">Single Shop Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-md-1 hidden-sm">
                <div class="header-right">
                    <ul>
                        <li>
                            <a href="account.html"><i class="flaticon-people"></i></a>
                        </li>
                        <li class="shoping-cart">
                            <a href="#">
                                <i class="flaticon-shop"></i>
                                <span>2</span>
                            </a>
                            <div class="add-to-cart-product">
                                <div class="cart-product">
                                    <div class="cart-product-image">
                                        <a href="single-product.html">
                                            <img src="img/shop/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-product-info">
                                        <p>
                                            <span>1</span>
                                            x
                                            <a href="single-product.html">East of eden</a>
                                        </p>
                                        <a href="single-product.html">S, Orange</a>
                                        <span class="cart-price">$ 140.00</span>
                                    </div>
                                    <div class="cart-product-remove">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="cart-product">
                                    <div class="cart-product-image">
                                        <a href="single-product.html">
                                            <img src="img/shop/1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-product-info">
                                        <p>
                                            <span>1</span>
                                            x
                                            <a href="single-product.html">East of eden</a>
                                        </p>
                                        <a href="single-product.html">S, Orange</a>
                                        <span class="cart-price">$ 140.00</span>
                                    </div>
                                    <div class="cart-product-remove">
                                        <i class="fa fa-times"></i>
                                    </div>
                                </div>
                                <div class="total-cart-price">
                                    <div class="cart-product-line fast-line">
                                        <span>Shipping</span>
                                        <span class="free-shiping">$10.50</span>
                                    </div>
                                    <div class="cart-product-line">
                                        <span>Total</span>
                                        <span class="total">$ 140.00</span>
                                    </div>
                                </div>
                                <div class="cart-checkout">
                                    <a href="checkout.html">
                                        Check out
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Header Area End-->
<!-- Mobile Menu Start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li><a href="index.html">HOME</a></li>
                            <li><a href="shop.php">FEATURED</a></li>
                            <li><a href="shop.php">REVIEW BOOK</a></li>
                            <li><a href="about.html">ABOUT AUTHOR</a></li>
                            <li><a href="#">pages</a>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="cart.html">Cart Page</a></li>
                                    <li><a href="checkout.html">Check Out</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="shop.php">Shopping Page</a></li>
                                    <li><a href="single-product.html">Single Shop Page</a></li>
                                    <li><a href="wishlist.html">Wishlist Page</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu End -->
<!-- Breadcrumbs Area Start -->
<div class="breadcrumbs-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumbs">
                    <h2>SHOP LEFT SIDEBAR</h2>
                    <ul class="breadcrumbs-list">
                        <li>
                            <a title="Return to Home" href="index.html">Home</a>
                        </li>
                        <li>SHOP LEFT SIDEBAR</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumbs Area Start -->
<!-- Shop Area Start -->
<div class="shopping-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="shop-widget">
                    <div class="shop-widget-top">
                        <aside class="widget widget-categories">
                            <h2 class="sidebar-title text-center">GENERO</h2>
                            <ul class="sidebar-menu">
                                <?php
                                foreach ($listaGeneros as $genero){
                                    echo "<li>
                                                        <a href=\"shop.php?genero=".$genero->getId()."\">
                                                        <i class=\"fa fa-angle-double-right\"></i>
                                                        ".$genero->getNome()."                                          
                                                        <span></span>
                                                        </a>
                                                       </li>";
                                }
                                ?>
                            </ul>
                        </aside>
                        <!--<aside class="widget shop-filter">
                            <h2 class="sidebar-title text-center">PRICE SLIDER</h2>
                            <div class="info-widget">
                                <div class="price-filter">
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                        <div class="widget-buttom">
                                            <input type="submit"  value="Filter"/>
                                            <input type="reset" value="CLEAR" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>-->
                    </div>
                    <!--<div class="shop-widget-bottom">
                        <aside class="widget widget-tag">
                            <h2 class="sidebar-title">POPULAR TAG</h2>
                            <ul class="tag-list">
                                <li>
                                    <a href="#">e-book</a>
                                </li>
                                <li>
                                    <a href="#">writer</a>
                                </li>
                                <li>
                                    <a href="#">book’s</a>
                                </li>
                                <li>
                                    <a href="#">eassy</a>
                                </li>
                                <li>
                                    <a href="#">nice</a>
                                </li>
                                <li>
                                    <a href="#">author</a>
                                </li>
                            </ul>
                        </aside>
                        <aside class="widget widget-seller">
                            <h2 class="sidebar-title">TOP SELLERS</h2>
                            <div class="single-seller">
                                <div class="seller-img">
                                    <img src="img/shop/1.jpg" alt="" />
                                </div>
                                <div class="seller-details">
                                    <a href="shop.php"><h5>Cold mountain</h5></a>
                                    <h5>$ 50.00</h5>
                                    <ul>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-seller">
                                <div class="seller-img">
                                    <img src="img/shop/2.jpg" alt="" />
                                </div>
                                <div class="seller-details">
                                    <a href=""><h5>The historian</h5></a>
                                    <h5>$ 50.00</h5>
                                    <ul>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                        <li><i class="fa fa-star icolor"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>-->
                </div>
            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div class="shop-tab-area">
                    <div class="shop-tab-list">
                        <!--<div class="shop-tab-pill pull-left">
                            <ul>
                                <li class="active" id="left"><a data-toggle="pill" href="#home"><i class="fa fa-th"></i><span>Grid</span></a></li>
                                <li><a data-toggle="pill" href="#menu1"><i class="fa fa-th-list"></i><span>List</span></a></li>
                            </ul>
                        </div>-->
                        <!--<div class="shop-tab-pill pull-right">
                            <ul>
                                <li class="product-size-deatils">
                                    <div class="show-label">
                                        <label>Show : </label>
                                        <select>
                                            <option value="10" selected="selected">10</option>
                                            <option value="09">09</option>
                                            <option value="08">08</option>
                                            <option value="07">07</option>
                                            <option value="06">06</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="product-size-deatils">
                                    <div class="show-label">
                                        <label><i class="fa fa-sort-amount-asc"></i>Sort by : </label>
                                        <select>
                                            <option value="position" selected="selected">Position</option>
                                            <option value="Name">Name</option>
                                            <option value="Price">Price</option>
                                        </select>
                                    </div>
                                </li>
                                <li class="shop-pagination"><a href="#">1</a></li>
                                <li class="shop-pagination"><a href="#">2</a></li>
                                <li class="shop-pagination"><a href="#"><i class="fa fa-caret-right"></i></a></li>
                            </ul>
                        </div>-->
                    </div>
                    <div class="tab-content">
                        <div class="row tab-pane fade in active" id="home">
                            <div class="shop-single-product-area">

                                <!-- lista de livros -->
                                <?php
                                foreach ($listaLivros as $livro){
                                    ?>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="single-banner">
                                            <div class="product-wrapper">
                                                <a href="detalharLivro.php" class="single-banner-image-wrapper">
                                                    <img alt="" src="images/<?php echo $livro->getCapaImagem();?>" width="150" height="220">
                                                </a>
                                                <div class="product-description">
                                                    <div class="functional-buttons">
                                                      <!--  <a href="#" title="Add to Cart">
                                                            <i class="fa fa-shopping-cart"></i> -->
                                                        </a>
                                                       <!-- <a href="#" title="Add to Wishlist">
                                                            <i class="fa fa-heart-o"></i> -->
                                                        </a>
                                                        <!-- <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                            <i class="fa fa-compress"></i> -->
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="banner-bottom text-center">
                                                <div class="banner-bottom-title">
                                                    <a href="#"><?php echo $livro->getTitulo();?></a>
                                                    <div class=""><span>R$ </span><?php echo $livro->getValor();?></div>
                                                </div>
                                                <!--<div class="rating-icon">
                                                    <i class="fa fa-star icolor"></i>
                                                    <i class="fa fa-star icolor"></i>
                                                    <i class="fa fa-star icolor"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                <!--<div class="col-md-4 col-sm-6">
                                    <div class="single-banner">
                                        <div class="product-wrapper">
                                            <a href="#" class="single-banner-image-wrapper">
                                                <img alt="" src="img/featured/2.jpg">
                                                <div class="price"><span>$</span>160</div>
                                            </a>
                                            <div class="product-description">
                                                <div class="functional-buttons">
                                                    <a href="#" title="Add to Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Add to Wishlist">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                        <i class="fa fa-compress"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner-bottom text-center">
                                            <div class="banner-bottom-title">
                                                <a href="#">People of the book</a>
                                            </div>
                                            <div class="rating-icon">
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <!--<div class="col-md-4 col-sm-6">
                                    <div class="single-banner">
                                        <div class="product-wrapper">
                                            <a href="#" class="single-banner-image-wrapper">
                                                <img alt="" src="img/featured/3.jpg">
                                                <div class="price"><span>$</span>160</div>
                                            </a>
                                            <div class="product-description">
                                                <div class="functional-buttons">
                                                    <a href="#" title="Add to Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Add to Wishlist">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                        <i class="fa fa-compress"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner-bottom text-center">
                                            <div class="banner-bottom-title">
                                                <a href="#">The secret letter</a>
                                            </div>
                                            <div class="rating-icon">
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <!--<div class="col-md-4 col-sm-6">
                                    <div class="single-banner">
                                        <div class="product-wrapper">
                                            <a href="#" class="single-banner-image-wrapper">
                                                <img alt="" src="img/featured/4.jpg">
                                                <div class="price"><span>$</span>160</div>
                                            </a>
                                            <div class="product-description">
                                                <div class="functional-buttons">
                                                    <a href="#" title="Add to Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Add to Wishlist">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                        <i class="fa fa-compress"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner-bottom text-center">
                                            <div class="banner-bottom-title">
                                                <a href="#">Lone some dove</a>
                                            </div>
                                            <div class="rating-icon">
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <!--<div class="col-md-4 col-sm-6">
                                    <div class="single-banner">
                                        <div class="product-wrapper">
                                            <a href="#" class="single-banner-image-wrapper">
                                                <img alt="" src="img/featured/5.jpg">
                                                <div class="price"><span>$</span>160</div>
                                            </a>
                                            <div class="product-description">
                                                <div class="functional-buttons">
                                                    <a href="#" title="Add to Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Add to Wishlist">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                        <i class="fa fa-compress"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner-bottom text-center">
                                            <div class="banner-bottom-title">
                                                <a href="#">The historian</a>
                                            </div>
                                            <div class="rating-icon">
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <!--<div class="col-md-4 col-sm-6">
                                    <div class="single-banner">
                                        <div class="product-wrapper">
                                            <a href="#" class="single-banner-image-wrapper">
                                                <img alt="" src="img/featured/6.jpg">
                                                <div class="price"><span>$</span>160</div>
                                            </a>
                                            <div class="product-description">
                                                <div class="functional-buttons">
                                                    <a href="#" title="Add to Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Add to Wishlist">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                        <i class="fa fa-compress"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner-bottom text-center">
                                            <div class="banner-bottom-title">
                                                <a href="#">East of eden</a>
                                            </div>
                                            <div class="rating-icon">
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <!--<div class="col-md-4 col-sm-6">
                                    <div class="single-banner">
                                        <div class="product-wrapper">
                                            <a href="#" class="single-banner-image-wrapper">
                                                <img alt="" src="img/featured/7.jpg">
                                                <div class="price"><span>$</span>160</div>
                                            </a>
                                            <div class="product-description">
                                                <div class="functional-buttons">
                                                    <a href="#" title="Add to Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Add to Wishlist">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                        <i class="fa fa-compress"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner-bottom text-center">
                                            <div class="banner-bottom-title">
                                                <a href="#">Cold mountain</a>
                                            </div>
                                            <div class="rating-icon">
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <!--<div class="col-md-4 col-sm-6">
                                    <div class="single-banner">
                                        <div class="product-wrapper">
                                            <a href="#" class="single-banner-image-wrapper">
                                                <img alt="" src="img/featured/8.jpg">
                                                <div class="price"><span>$</span>160</div>
                                            </a>
                                            <div class="product-description">
                                                <div class="functional-buttons">
                                                    <a href="#" title="Add to Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Add to Wishlist">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                        <i class="fa fa-compress"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner-bottom text-center">
                                            <div class="banner-bottom-title">
                                                <a href="#">Twilight</a>
                                            </div>
                                            <div class="rating-icon">
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                                <!--<div class="col-md-4 hidden-sm">
                                    <div class="single-banner">
                                        <div class="product-wrapper">
                                            <a href="#" class="single-banner-image-wrapper">
                                                <img alt="" src="img/featured/1.jpg">
                                                <div class="price"><span>$</span>160</div>
                                            </a>
                                            <div class="product-description">
                                                <div class="functional-buttons">
                                                    <a href="#" title="Add to Cart">
                                                        <i class="fa fa-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Add to Wishlist">
                                                        <i class="fa fa-heart-o"></i>
                                                    </a>
                                                    <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
                                                        <i class="fa fa-compress"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner-bottom text-center">
                                            <div class="banner-bottom-title">
                                                <a href="#">East of eden</a>
                                            </div>
                                            <div class="rating-icon">
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                        <!--<div id="menu1" class="tab-pane fade">
                            <div class="row">
                                <div class="single-shop-product">
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <div class="left-item">
                                            <a href="single-product.html" title="East of eden">
                                                <img src="img/featured/1.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <div class="deal-product-content">
                                            <h4>
                                                <a href="single-product.html" title="East of eden">East of eden</a>
                                            </h4>
                                            <div class="product-price">
                                                <span class="new-price">$ 140.00</span>
                                                <span class="old-price">$ 120.00</span>
                                            </div>
                                            <div class="list-rating-icon">
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                            <div class="availability">
                                                <span>In stock</span>
                                                <span><a href="cart.html">Add to cart</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-shop-product">
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <div class="left-item">
                                            <a href="single-product.html" title="People of the book">
                                                <img src="img/featured/2.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <div class="deal-product-content">
                                            <h4>
                                                <a href="single-product.html" title="People of the book">People of the book</a>
                                            </h4>
                                            <div class="product-price">
                                                <span class="new-price">$ 140.00</span>
                                                <span class="old-price">$ 120.00</span>
                                            </div>
                                            <div class="list-rating-icon">
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                            <div class="availability">
                                                <span>In stock</span>
                                                <span><a href="cart.html">Add to cart</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-shop-product">
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <div class="left-item">
                                            <a href="single-product.html" title="The secret letter">
                                                <img src="img/featured/3.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <div class="deal-product-content">
                                            <h4>
                                                <a href="single-product.html" title="The secret letter">The secret letter</a>
                                            </h4>
                                            <div class="product-price">
                                                <span class="new-price">$ 140.00</span>
                                                <span class="old-price">$ 120.00</span>
                                            </div>
                                            <div class="list-rating-icon">
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                            <div class="availability">
                                                <span>In stock</span>
                                                <span><a href="cart.html">Add to cart</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-shop-product">
                                    <div class="col-xs-12 col-sm-5 col-md-4">
                                        <div class="left-item">
                                            <a href="single-product.html" title="Lone some dove">
                                                <img src="img/featured/4.jpg" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-7 col-md-8">
                                        <div class="deal-product-content">
                                            <h4>
                                                <a href="single-product.html" title="Lone some dove">Lone some dove</a>
                                            </h4>
                                            <div class="product-price">
                                                <span class="new-price">$ 140.00</span>
                                                <span class="old-price">$ 120.00</span>
                                            </div>
                                            <div class="list-rating-icon">
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star icolor"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                            <div class="availability">
                                                <span>In stock</span>
                                                <span><a href="cart.html">Add to cart</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Area End -->
<!-- Footer Area Start -->
<footer>
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-8">
                    <div class="footer-left">
                        <a href="cadLivro.php">
                            <img src="img/logo-2.png" alt="">
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        <ul class="footer-contact">
                            <li>
                                <i class="flaticon-location"></i>
                                450 fifth Avenue, 34th floor. NYC
                            </li>
                            <li>
                                <i class="flaticon-technology"></i>
                                (+800) 123 4567 890
                            </li>
                            <li>
                                <i class="flaticon-web"></i>
                                info@bookstore.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4">
                    <div class="single-footer">
                        <h2 class="footer-title">Information</h2>
                        <ul class="footer-list">
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">Delivery Information</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Manufactures</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm">
                    <div class="single-footer">
                        <h2 class="footer-title">My Account</h2>
                        <ul class="footer-list">
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="account.html">Login</a></li>
                            <li><a href="cart.html">My Cart</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 hidden-sm">
                    <div class="single-footer">
                        <h2 class="footer-title">Shop</h2>
                        <ul class="footer-list">
                            <li><a href="#">Orders & Returns</a></li>
                            <li><a href="#">Search Terms</a></li>
                            <li><a href="#">Advance Search</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Group Sales</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-sm-8">
                    <div class="single-footer footer-newsletter">
                        <h2 class="footer-title">Our Newsletter</h2>
                        <p>Consectetur adipisicing elit se do eiusm od tempor incididunt ut labore et dolore magnas aliqua.</p>
                        <form action="#" method="post">
                            <div>
                                <input type="text" placeholder="email address">
                            </div>
                            <button class="btn btn-search btn-small" type="submit">SUBSCRIBE</button>
                            <i class="flaticon-networking"></i>
                        </form>
                        <ul class="social-icon">
                            <li>
                                <a href="#">
                                    <i class="flaticon-social"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="flaticon-social-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="flaticon-social-2"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="flaticon-video"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 visible-sm">
                    <div class="single-footer">
                        <h2 class="footer-title">Shop</h2>
                        <ul class="footer-list">
                            <li><a href="#">Orders & Returns</a></li>
                            <li><a href="#">Search Terms</a></li>
                            <li><a href="#">Advance Search</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Group Sales</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-bottom-left pull-left">
                        <p>Copyright &copy; 2016 <span><a href="#">DevItems</a></span>. All Right Reserved.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-bottom-right pull-right">
                        <img src="img/paypal.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
<!--Quickview Product Start -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="" src="img/quick-view.jpg">
                            </div>
                        </div>
                        <div class="product-info">
                            <h1>Frame Princes Cut Diamond</h1>
                            <div class="price-box">
                                <p class="s-price"><span class="special-price"><span class="amount">$280.00</span></span></p>
                            </div>
                            <a href="product-details.html" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="numbers-row">
                                        <input type="number" id="french-hens" value="3">
                                    </div>
                                    <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                </form>
                            </div>
                            <div class="quick-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .product-info -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End of Quickview Product-->
<!-- all js here -->
<!-- jquery latest version -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- owl.carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- jquery-ui js -->
<script src="js/jquery-ui.min.js"></script>
<!-- jquery Counterup js -->
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<!-- jquery countdown js -->
<script src="js/jquery.countdown.min.js"></script>
<!-- jquery countdown js -->
<script type="text/javascript" src="venobox/venobox.min.js"></script>
<!-- jquery Meanmenu js -->
<script src="js/jquery.meanmenu.js"></script>
<!-- wow js -->
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<!-- scrollUp JS -->
<script src="js/jquery.scrollUp.min.js"></script>
<!-- plugins js -->
<script src="js/plugins.js"></script>
<!-- Nivo slider js -->
<script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="lib/home.js" type="text/javascript"></script>
<!-- main js -->
<script src="js/main.js"></script>
</body>
</html>