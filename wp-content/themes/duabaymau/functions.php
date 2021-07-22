<?php
/*
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
*/
add_action( 'wp_enqueue_scripts', 'duabaymau_register_styles' );

function duabaymau_register_styles() {

	//$theme_version = wp_get_theme()->get( 'Version' );

	//wp_enqueue_style( 'duabaymau-style', get_stylesheet_uri(), array(), $theme_version );
	$cssUrl = get_template_directory_uri().'/assets/css';
	echo $cssUrl;
	// wp_style_add_data( 'twentytwenty-style', 'rtl', 'replace' );

	// // Add output of Customizer settings as inline style.
	// wp_add_inline_style( 'twentytwenty-style', twentytwenty_get_customizer_css( 'front-end' ) );

	// // Add print CSS.
	// wp_enqueue_style( 'twentytwenty-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );
	wp_register_style('duabaymau_font_awesome', $cssUrl.'/font-awesome-all.css', array(), '1.0');
	wp_enqueue_style( 'duabaymau_font_awesome');
}