<?php

/**
 * travel booking functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package travel_agency_booking
 */



if ( !defined( 'TRAVEL_AGENCY_BOOKING_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( 'TRAVEL_AGENCY_BOOKING_VERSION', '1.0.0' );
}
if ( !function_exists( 'travel_agency_booking_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function travel_agency_booking_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on travel booking, use a find and replace
         * to change 'travel-agency-booking' to the name of your theme in all the template files.
         */
        load_theme_textdomain( 'travel-agency-booking', get_template_directory() . '/languages' );
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );
        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'main-menu' => esc_html__( 'Main Menu', 'travel-agency-booking' ),
        ) );
        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script'
        ) );
        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'travel_agency_booking_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );
        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
        add_theme_support( 'register_block_style' );
        add_theme_support( 'register_block_pattern' );
        add_theme_support( 'wp-block-styles' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( "align-wide" );
        add_theme_support( 'html5', array(
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
            'navigation-widgets'
        ) );
        add_editor_style( get_stylesheet_uri() );
        require get_template_directory() . '/inc/starter-content.php';
        $starter_content = travel_agency_booking_starter_content();
        add_theme_support( 'starter-content', $starter_content );
    }

}
add_action( 'after_setup_theme', 'travel_agency_booking_setup' );
/**
 * Social media
 *
 */
function travel_agency_booking_social_media()
{
    $social_media = array(
        'facebook'    => esc_html__( 'Facebook', 'travel-agency-booking' ),
        'twitter'     => esc_html__( 'Twitter', 'travel-agency-booking' ),
        'pinterest'   => esc_html__( 'Pinterest', 'travel-agency-booking' ),
        'instagram'   => esc_html__( 'Instagram', 'travel-agency-booking' ),
        'youtube'     => esc_html__( 'Youtube', 'travel-agency-booking' ),
        'linkedin'    => esc_html__( 'LinkedIn', 'travel-agency-booking' ),
        'tripadvisor' => esc_html__( 'Tripadvisor', 'travel-agency-booking' ),
        'airbnb'      => esc_html__( 'Airbnb', 'travel-agency-booking' ),
    );
    return $social_media;
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function travel_agency_booking_content_width()
{
    $GLOBALS['content_width'] = apply_filters( 'travel_agency_booking_content_width', 640 );
}

add_action( 'after_setup_theme', 'travel_agency_booking_content_width', 0 );
/**
 * Enqueue scripts and styles.
 */
function travel_agency_booking_scripts()
{
    $font_family = get_theme_mod( 'font_family', 'Lora' );
    $heading_font_family = get_theme_mod( 'heading_font_family', 'Montserrat' );
    $site_identity_font_family = esc_attr( get_theme_mod( 'site_identity_font_family', 'Montserrat' ) );
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontello', get_template_directory_uri() . '/assets/css/fontello.css' );
    wp_enqueue_style(
        'travel-agency-booking-style',
        get_stylesheet_uri(),
        array(),
        TRAVEL_AGENCY_BOOKING_VERSION
    );
    wp_style_add_data( 'travel-agency-booking-style', 'rtl', 'replace' );
    wp_enqueue_style( 'travel-agency-booking-googlefonts', 'https://fonts.googleapis.com/css?family=' . esc_attr( $font_family ) . ':200,300,400,500,600,700,800,900|' . esc_attr( $heading_font_family ) . ':200,300,400,500,600,700,800,900|' . esc_attr( $site_identity_font_family ) . ':200,300,400,500,600,700,800,900|' );
    wp_enqueue_script(
        'travel-agency-booking-navigation',
        get_template_directory_uri() . '/assets/js/navigation.js',
        array(),
        "",
        true
    );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'travel-agency-booking-script', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ) );
    wp_enqueue_script(
        'travel-agency-booking-skip-link-focus-fix',
        get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js',
        array(),
        '',
        true
    );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'travel_agency_booking_scripts' );
/**
 * Recommended Plugins
 */
require get_template_directory() . '/inc/tgmpa/recommended-plugins.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
// Breadcrumbs
require get_template_directory() . '/inc/breadcrumbs.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/loadmore.php';
/**
 * Call Widget page
 **/
require get_template_directory() . '/inc/widgets/widgets.php';
require get_template_directory() . '/inc/custom-controls/custom-control.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/customizer/customizer.php';
/**
 * Customizer changes css
 */
require get_template_directory() . '/inc/dynamic-css.php';