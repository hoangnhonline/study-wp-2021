<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
<link rel="icon" href="http://wp.local/wp-content/themes/duabaymau/assets/images/favicon.ico" type="image/x-icon">


<!-- Fav Icon -->
<link rel="icon" href="http://wp.local/wp-content/themes/duabaymau/assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="http://wp.local/wp-content/themes/duabaymau/assets/css/font-awesome-all.css" rel="stylesheet">
<link href="http://wp.local/wp-content/themes/duabaymau/assets/css/flaticon.css" rel="stylesheet">
<link href="http://wp.local/wp-content/themes/duabaymau/assets/css/owl.css" rel="stylesheet">
<link href="http://wp.local/wp-content/themes/duabaymau/assets/css/bootstrap.css" rel="stylesheet">
<link href="http://wp.local/wp-content/themes/duabaymau/assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="http://wp.local/wp-content/themes/duabaymau/assets/css/animate.css" rel="stylesheet">
<link href="http://wp.local/wp-content/themes/duabaymau/assets/css/color.css" rel="stylesheet">
<link href="http://wp.local/wp-content/themes/duabaymau/assets/css/rtl.css" rel="stylesheet">
<link href="http://wp.local/wp-content/themes/duabaymau/assets/css/style.css" rel="stylesheet">
<link href="http://wp.local/wp-content/themes/duabaymau/assets/css/responsive.css" rel="stylesheet">
<link href="http://wp.local/wp-content/themes/duabaymau/assets/css/customize.css" rel="stylesheet">
</head>


<!-- page wrapper -->
<body class="boxed_wrapper ltr">

    <!-- Preloader -->
    <div class="loader-wrap">
        <div class="preloader"><div class="preloader-close">Preloader Close</div></div>
        <div class="layer layer-one"><span class="overlay"></span></div>
        <div class="layer layer-two"><span class="overlay"></span></div>        
        <div class="layer layer-three"><span class="overlay"></span></div>        
    </div>


    <!-- page-direction -->
    <div class="page_direction">
        <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
        <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
    </div>
    <!-- page-direction end -->


    <!-- search-popup -->
    <div id="search-popup" class="search-popup">
        <div class="close-search"><span>Close</span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn style-four">
                        </fieldset>
                    </div>
                </form>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="index.html">Finance</a></li>
                    <li><a href="index.html">Idea</a></li>
                    <li><a href="index.html">Service</a></li>
                    <li><a href="index.html">Growth</a></li>
                    <li><a href="index.html">Plan</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- search-popup end -->
<header class="main-header style-one">
    <?php require_once DUABAYMAU_THEME_INC_DIR.'/header-top.php'; ?>
    <div class="header-lower">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="index.html"><img src="http://wp.local/wp-content/themes/duabaymau/assets/images/logo.png" alt=""></a></figure>
                </div>
                <?php require_once DUABAYMAU_THEME_INC_DIR.'/main-menu.php'; ?>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="outer-box clearfix">
                <div class="logo-box pull-left">
                    <figure class="logo"><a href="index.html"><img src="http://wp.local/wp-content/themes/duabaymau/assets/images/small-logo.png" alt=""></a></figure>
                </div>
                <div class="menu-area pull-right">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>
    
    <nav class="menu-box">
        <div class="nav-logo"><a href="index.html"><img src="http://wp.local/wp-content/themes/duabaymau/assets/images/mobile-logo.png" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
            <ul>
                <li>Chicago 12, Melborne City, USA</li>
                <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                <li><a href="mailto:info@example.com">info@example.com</a></li>
            </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->