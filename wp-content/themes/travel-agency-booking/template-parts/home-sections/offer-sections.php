<?php if( class_exists( 'Wp_Travel_Engine' ) ) : ?>
<?php 
  if( get_theme_mod( 'offer_package_display_option', true ) ) :
    $select_trip_posttype = get_theme_mod( 'select_trip_posttype' );

    if($select_trip_posttype){
    $selected_trip_posttype = get_page_by_path( get_theme_mod( 'select_trip_posttype' ), '' , 'trip' );
    
    if(!empty($selected_trip_posttype)):
    global $post;
    $post = get_post($selected_trip_posttype);
    setup_postdata( $post );
  
    
    $tripID = $selected_trip_posttype->ID;
    $tripTitle = $selected_trip_posttype->post_title;
    $image_url = wp_get_attachment_url( get_post_thumbnail_id($tripID) );
    $trip_info = get_post_meta( $tripID,'wp_travel_engine_setting',true );
    $trip_settings = get_option( 'wp_travel_engine_settings', true );
?>
<section class="home-section timer-content-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="timer-content">
            <div class="main-title">
            <?php if($tripTitle){ ?>
              <h3 class="title"><?php the_title(); ?></h3>
            <?php } ?>
            </div>
            <?php the_excerpt(); ?>
            <?php
              $code = 'USD';
              if( isset( $trip_settings['currency_code'] ) && $trip_settings['currency_code'] != '' ) {
                  $code = esc_attr( $trip_settings['currency_code'] );
              }
              $obj = new Wp_Travel_Engine_Functions();
              $currency = $obj->wp_travel_engine_currencies_symbol( $code );
              $cost = isset( $trip_info['trip_price'] ) ? $trip_info['trip_price']: '';
              $prev_cost = isset( $trip_info['trip_prev_price'] ) ? $trip_info['trip_prev_price']: '';
              if( $cost != '' ) {                   
            ?>
            <div class="pricing">
              <span class="actual-price"><?php echo esc_html( $currency . $obj->wp_travel_engine_price_format( $prev_cost ) ); ?></span>
              <span class="discounted-price"><?php echo esc_html( $currency . $obj->wp_travel_engine_price_format( $cost ) ); ?> <span>/ <?php esc_html_e( "For Person", 'travel-agency-booking' ); ?></span></span>
            </div>
            <?php }  ?>
            <a href="<?php the_permalink(absint($tripID)); ?>" class="btn btn-primary"><?php esc_html_e( "Learn More", 'travel-agency-booking' ); ?></a>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="img-holder">
            <img src="<?php echo esc_url($image_url); ?>">
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php wp_reset_postdata(); endif; } endif; ?>

<?php endif;