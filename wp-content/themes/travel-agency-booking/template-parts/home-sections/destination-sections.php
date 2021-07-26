<?php if( class_exists( 'Wp_Travel_Engine' ) ) : ?>

<?php 
  if( get_theme_mod( 'popular_destinations_display_options', true ) ) :
    $popular_destinations_title = get_theme_mod( 'popular_destinations_title', '' );
?>

  <section class="home-section popular-destinations">
    <div class="container">
      <div class="main-title">
        <?php if( $popular_destinations_title ) : ?>
          <h3 class="title"><?php echo esc_html( $popular_destinations_title ); ?></h3>
        <?php endif; ?>
        <?php
          $termCount = get_theme_mod( 'number_of_popular_destinations', '4' );
          $trip_terms = get_terms(
            array(
                'taxonomy'   => 'destination',
                'hide_empty' => false,
            )
          );
          if ( ! empty( $trip_terms ) && is_array( $trip_terms ) ) {
        ?>
        <a href="<?php echo esc_url( home_url( '/destination' ) ); ?>"> - <?php esc_html_e( "View All Destinations", 'travel-agency-booking' ); ?></a>
        <?php }  ?>
        </div>

      <div class="destinations-block">
        <div class="owl-carousel owl-theme">
        <?php
          $termCount = get_theme_mod( 'number_of_popular_destinations', '4' );
          $trip_terms = get_terms(
            array(
                'taxonomy'   => 'destination',
                'hide_empty' => false,
            )
          );
          if ( ! empty( $trip_terms ) && is_array( $trip_terms ) ) {
            for($i = 0; $i < $termCount; $i++){
              $image_id = get_term_meta( $trip_terms[$i]->term_id, 'category-image-id', true);
              $image = wp_get_attachment_image_src( $image_id, 'travel-agency-booking-slider' );
                if($image[0]){
                  $finalImage = $image[0];
                } else{
                  $finalImage = get_template_directory_uri() . '/images/no-image.png';
                }
            // Run a loop and print them all                
          ?>                                       
          <div class="destinations-holder">
            <img src="<?php echo esc_url( $finalImage ); ?>" alt="">
            <span class="tour-count"><?php echo esc_html($trip_terms[$i]->count); ?> Tour</span>
            <div class="title-holder">
              <h4 class="title"><?php echo esc_html($trip_terms[$i]->name); ?></h4> 
            </div>
            <div class="text-holder">
              <h4 class="title"><?php echo esc_html($trip_terms[$i]->name); ?></h4>
              <p>
              <?php
                $destination_desc =  $trip_terms[$i]->description;
                echo esc_textarea(substr($destination_desc,'0','190')); ?>
              </p>
              <a href="<?php echo esc_url( get_term_link( $trip_terms[$i] ) ) ?>">View All Tour</a>
            </div>
          </div>
          <?php } } ?>
         
        </div>
      </div>
    </div>
  </section>

  <?php endif; ?>

<?php endif;