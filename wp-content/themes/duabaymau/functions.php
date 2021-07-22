<?php
/*
<!-- Fav Icon -->
<link rel="icon" href="http://wp.local/wp-content/themes/duabaymau/assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Arimo:400,400i,700,700i&display=swap" rel="stylesheet">

*/

add_action('widgets_init', 'duabaymau_widgets_init');

function duabaymau_widgets_init(){
	register_sidebar(array(
	        /* translators: %d: Sidebar number. */
	        'name'           => sprintf( __( 'Primary widget area %d' ), $i ),
	        'id'             => "primary-widget-sidebar",
	        'description'    => 'Thêm widget vào sidebar bên phải',
	        'class'          => '',
	        'before_widget'  => '<div id="%1$s" class="sidebar-widget %2$s">',
	        'after_widget'   => "</div>\n",
	        'before_title'   => '<div class="widget-title"><h3>',
	        'after_title'    => "</h3></div>\n",
	        'before_sidebar' => '',
	        'after_sidebar'  => '',
	    )
	);
	register_sidebar(array(
	        /* translators: %d: Sidebar number. */
	        'name'           => sprintf( __( 'Blog page widget area %d' ), $i ),
	        'id'             => "blog-widget-sidebar",
	        'description'    => 'Thêm widget vào sidebar bên phải trang blog',
	        'class'          => '',
	        'before_widget'  => '<div id="%1$s" class="sidebar-widget %2$s">',
	        'after_widget'   => "</div>\n",
	        'before_title'   => '<div class="widget-title"><h3>',
	        'after_title'    => "</h3></div>\n",
	        'before_sidebar' => '',
	        'after_sidebar'  => '',
	    )
	);
}
//add_action( 'wp_enqueue_scripts', 'duabaymau_register_styles' );


function duabaymau_register_styles() {
	//$theme_version = wp_get_theme()->get( 'Version' );
	global $wp_styles;
	$version = '1.0';
	//wp_enqueue_style( 'duabaymau-style', get_stylesheet_uri(), array(), $theme_version );
	$cssUrl = get_template_directory_uri().'/assets/css';	

	wp_register_style('duabaymau_font_awesome', $cssUrl.'/font-awesome-all.css', array(), $version);
	wp_enqueue_style( 'duabaymau_font_awesome');

	wp_register_style('duabaymau_flaticon', $cssUrl.'/flaticon.css', array(), $version);
	wp_enqueue_style( 'duabaymau_flaticon');

	wp_register_style('duabaymau_owl', $cssUrl.'/owl.css', array(), $version);
	wp_enqueue_style( 'duabaymau_owl');

	wp_register_style('duabaymau_bootstrap', $cssUrl.'/bootstrap.css', array(), $version);
	wp_enqueue_style( 'duabaymau_owl');

	wp_register_style('duabaymau_fancybox', $cssUrl.'/jquery.fancybox.min.css', array(), $version);
	wp_enqueue_style( 'duabaymau_fancybox');

	wp_register_style('duabaymau_animate', $cssUrl.'/animate.css', array(), $version);
	wp_enqueue_style( 'duabaymau_animate');

	wp_register_style('duabaymau_color', $cssUrl.'/color.css', array(), $version);
	wp_enqueue_style( 'duabaymau_color');

	wp_register_style('duabaymau_rtl', $cssUrl.'/rtl.css', array(), $version);
	wp_enqueue_style( 'duabaymau_rtl');

	wp_register_style('duabaymau_style', $cssUrl.'/style.css', array(), $version);
	wp_enqueue_style( 'duabaymau_style');

	wp_register_style('duabaymau_responsive', $cssUrl.'/responsive.css', array(), $version);
	wp_enqueue_style( 'duabaymau_responsive');

}
/*
<!-- jequery plugins -->
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/jquery.js"></script>
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/popper.min.js"></script>
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/bootstrap.min.js"></script>
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/owl.js"></script>
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/wow.js"></script>
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/validation.js"></script>
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/jquery.fancybox.js"></script>
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/appear.js"></script>
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/jquery.countTo.js"></script>
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/scrollbar.js"></script>
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/nav-tool.js"></script>
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/TweenMax.min.js"></script>
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/circle-progress.js"></script>
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/jquery.nice-select.min.js"></script>

<!-- main-js -->
<script src="http://wp.local/wp-content/themes/duabaymau/assets/js/script.js"></script>
*/

add_action( 'wp_enqueue_scripts', 'duabaymau_register_js' );

function duabaymau_register_js() {
	
	$version = '1.0';

	$jsUrl = get_template_directory_uri().'/assets/js';
	
	// wp_register_script('duabaymau_jquery', $jsUrl.'/jquery.js', array('jquery'), $version, true);
	// wp_enqueue_script( 'duabaymau_jquery');

	wp_register_script('duabaymau_popper', $jsUrl.'/popper.min.js', array('jquery'), $version, true);
	wp_enqueue_script( 'duabaymau_popper');

	wp_register_script('duabaymau_bootstrap', $jsUrl.'/bootstrap.min.js', array('jquery'), $version, true);
	wp_enqueue_script( 'duabaymau_bootstrap');

	wp_register_script('duabaymau_owl', $jsUrl.'/owl.js', array('jquery'), $version, true);
	wp_enqueue_script( 'duabaymau_owl');

	wp_register_script('duabaymau_wow', $jsUrl.'/wow.js', array('jquery'), $version, true);
	wp_enqueue_script( 'duabaymau_wow');

	wp_register_script('duabaymau_validation', $jsUrl.'/validation.js', array('jquery'), $version, true);
	wp_enqueue_script( 'duabaymau_validation');

	wp_register_script('duabaymau_fancybox', $jsUrl.'/jquery.fancybox.js', array('jquery'), $version, true);
	wp_enqueue_script( 'duabaymau_fancybox');

	wp_register_script('duabaymau_appear', $jsUrl.'/appear.js', array('jquery'), $version, true);
	wp_enqueue_script( 'duabaymau_appear');

	wp_register_script('duabaymau_countTo', $jsUrl.'/jquery.countTo.js', array('jquery'), $version, true);
	wp_enqueue_script( 'duabaymau_countTo');

	wp_register_script('duabaymau_scrollbar', $jsUrl.'/scrollbar.js', array('jquery'), $version, true);
	wp_enqueue_script( 'duabaymau_scrollbar');

	wp_register_script('duabaymau_nav_tool', $jsUrl.'/nav-tool.js', array('jquery'), $version, true);
	wp_enqueue_script( 'duabaymau_nav_tool');

	wp_register_script('duabaymau_tweenmax', $jsUrl.'/TweenMax.min.js', array('jquery'), $version, true);
	wp_enqueue_script( 'duabaymau_tweenmax');

	wp_register_script('duabaymau_circle_progress', $jsUrl.'/circle-progress.js', array('jquery'), $version, true);
	wp_enqueue_script( 'duabaymau_circle_progress');

	wp_register_script('duabaymau_nice_select', $jsUrl.'/jquery.nice-select.min.js', array('jquery'), $version, true);
	wp_enqueue_script( 'duabaymau_nice_select');

	wp_register_script('duabaymau_script', $jsUrl.'/script.js', array('jquery'), $version, true);
	wp_enqueue_script( 'duabaymau_script');

}