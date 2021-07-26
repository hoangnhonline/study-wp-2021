<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package travel_agency_booking
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'travel-agency-booking' ); ?></a>
  <header class="header">
    <?php 
    $general_section_display_option = get_theme_mod( 'general_section_display_option', true ); 
    if($general_section_display_option){
      ?>
      <div class="top-header">
        <div class="container">
          <div class="t-header-holder">
            <div class="phone-email">
              <?php 
              $travel_agency_booking_contact_number = get_theme_mod( 'travel_agency_booking_contact_number' ); 
              if($travel_agency_booking_contact_number){
                ?>
                <a href="tel:<?php echo esc_attr($travel_agency_booking_contact_number); ?>" class="phone">
                  <span class="icon-phone" aria-hidden="true"></span> <?php echo esc_html($travel_agency_booking_contact_number); ?></a>
                <?php } ?>  
                <?php 
                $travel_agency_booking_email_address = get_theme_mod( 'travel_agency_booking_email_address', '' ); 
                if($travel_agency_booking_email_address){
                  ?>
                  <a class="email" href="mailto:<?php echo esc_attr($travel_agency_booking_email_address); ?>">
                    <span class="icon-mail" aria-hidden="true"></span>
                    <?php echo esc_html($travel_agency_booking_email_address); ?>
                  </a>
                <?php } ?> 
              </div>
              <div class="social-navigation">
                <?php $social_media_array = get_theme_mod( 'travel_agency_booking_social_media', 'facebook' ); ?>

                <?php if ( ! empty( $social_media_array ) && is_array( $social_media_array ) ) : ?>

                <div class="social-icons">
                  <ul class="list-inline">
                    <?php
                    foreach ( $social_media_array as $value ) {
                      $key_classes = $value['social_media_repeater_class'];
                      $class = str_replace( " ", "-", strtolower( $key_classes ) );
                      $i_tag_class = 'icon-' . $class;
                      ?>
                      <li class="<?php echo esc_attr( strtolower( $class ) ); ?>">
                        <a href="<?php echo esc_url( $value['social_media_link'] ); ?>" target="_blank">
                          <i class="<?php echo esc_attr( $i_tag_class ); ?>"></i>
                        </a>
                      </li>
                    <?php } ?>
                  </ul>
                </div>

              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>  

    <div class="main-header">
      <div class="container">

        <div class="header-wrapper">


          <div class="site-title-description">
            <?php
            the_custom_logo();
            $siteTitleShow = get_theme_mod('sitetitle_showhide');
            if($siteTitleShow){ 
            ?>
            <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
            <?php } ?>
            <?php 
            $siteDescShow = get_theme_mod('tagline_showhide');
            if($siteDescShow){
            $travel_booking_description = get_bloginfo( 'description', 'display' );
            if ( $travel_booking_description || is_customize_preview() ) :
              ?>
              <p class="site-description"><?php echo $travel_booking_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
            <?php endif;
            }
            ?>
          </div>


          <nav id="site-navigation" class="main-navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><!-- <?php esc_html_e( 'Primary Menu', 'travel-agency-booking' ); ?> -->
              <div id="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </button>
            <?php
            wp_nav_menu(
              array(
                'theme_location' => 'main-menu',
                'menu_id'        => 'primary-menu',
              )
            );
            ?>
          </nav><!-- #site-navigation -->

        </div>
      </div>
    </div>
  </header>


  <?php if ( class_exists( 'Breadcrumb_Trail' ) && ! is_home() && ! is_front_page() ) : ?>               
  <div class="breadcrumb-holder">
   <div class="container"><?php breadcrumb_trail(); ?></div> 
 </div>
</div>
<?php endif; ?>
