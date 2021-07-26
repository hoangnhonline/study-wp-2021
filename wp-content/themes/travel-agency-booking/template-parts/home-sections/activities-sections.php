<?php if( class_exists( 'Wp_Travel_Engine' ) ) : ?>

<?php 
  if( get_theme_mod( 'recommended_activities_display_option', true ) ) :
    $activities_title = get_theme_mod( 'recommended_activities_title', '' );
?>

  <section class="home-section home-activities">
    <div class="container">
      <div class="main-title">
        <?php if( $activities_title ) : ?>
          <h3 class="title"><?php echo esc_html( $activities_title ); ?></h3>
        <?php endif; ?>
        <a href="<?php echo esc_url( home_url( '/activities' ) ); ?>"> - View All Activities</a>
      </div>

      <div class="activities-block">
        <div class="owl-carousel owl-theme">
        <?php
          $termCount = get_theme_mod( 'number_of_recommended_activities', 4 );
          $trip_terms = get_terms(
            array(
                'taxonomy'   => 'activities',
                'hide_empty' => false,
            )
          );
          if ( ! empty( $trip_terms ) && is_array( $trip_terms ) ) {
            
            for( $i = 0; $i < $termCount; $i++ ) {
              $image_id = get_term_meta( $trip_terms[$i]->term_id, 'category-image-id', true);
              $image = wp_get_attachment_image_src( $image_id, 'travel-agency-booking-slider' );
                if($image){
                  $finalImage = $image[0];
                } else{
                  $finalImage = get_template_directory_uri() . '/images/no-image.png';
                }
            // Run a loop and print them all                
          ?>                                       
          <div class="activities-holder">
            <img src="<?php echo esc_url( $finalImage ); ?>" alt="">
            <span class="tour-count"><?php echo esc_html($trip_terms[$i]->count); ?> Tour</span>
            <div class="title-holder">
              <h4 class="title"><?php echo esc_html($trip_terms[$i]->name); ?></h4> 
            </div>
            <div class="text-holder">
              <h4 class="title"><?php echo esc_html($trip_terms[$i]->name); ?></h4>
              <p>
              <?php
                $activities_desc =  $trip_terms[$i]->description;
                echo esc_textarea(wp_trim_words( $activities_desc, 18, '...')); ?>
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