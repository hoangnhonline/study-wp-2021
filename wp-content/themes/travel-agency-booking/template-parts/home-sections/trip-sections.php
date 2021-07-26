<?php if( class_exists( 'Wp_Travel_Engine' ) ) : ?>
  <?php 
    if( get_theme_mod( 'best_tours_display_option', true ) ) :
      $category_id = get_theme_mod( 'best_tours_category', '' ) ;
      $tour_title = get_theme_mod( 'best_tours_title', 'Popular Tour' );
      $number_of_posts = get_theme_mod( 'number_of_best_tours', 6 );

      $args = array(
        'post_type' => 'trip',
        'posts_per_page' => $number_of_posts,
       );

       if( ! empty( $category_id ) ) {
        
        $args[ 'tax_query' ] = array(
            array(
              'taxonomy' => 'trip_types',
              'field'    => 'id',
              'terms'    => $category_id
            ),
        );
      }

      $query = new WP_Query( $args );
      if ( $query->have_posts() ) : 
  ?>
    <section class="home-section popular-tour">
        <div class="container">
        <?php if( $tour_title ) : ?>
            <div class="main-title text-center">
                <h3 class="title"><?php echo esc_html( $tour_title ); ?></h3>
            </div>
        <?php endif; ?>

        <div class="row">
        <?php 
            while ( $query->have_posts() ) : $query->the_post();
            $trip_info = get_post_meta( $post->ID,'wp_travel_engine_setting',true );
            $trip_settings = get_option( 'wp_travel_engine_settings', true );
        ?>
            <div class="col-lg-4 col-md-6">
                <div class="tour-block">
                    <div class="img-holder">
                        <?php 
                        if(has_post_thumbnail()){
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'medium');
                            
                            $finalImage = $image[0];
                            } else{                    
                            $finalImage = get_template_directory_uri() . '/images/no-image.png';
                            }
                        
                         ?>
                         <img src="<?php echo esc_url( $finalImage ); ?>" alt="">
                    <span class="discount"><?php echo absint(wte_get_discount_percent( $post->ID ) ); ?>% Off</span>
                    </div>
                    <div class="content-holder">
                        <span class="featured-tag">Featured</span>
                        <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <div class="day-pricing">
                            <div class="day-rating">
                                <?php if( isset( $trip_info['trip_duration'] ) && $trip_info['trip_duration'] != '' ) : ?>
                                <span class="days"><span class="fa fa-clock-o" aria-hidden="true"></span> <?php echo esc_html($trip_info['trip_duration']); ?> days <?php echo " - " . esc_attr( $trip_info['trip_duration_nights'] );?> nights</span>
                                <?php endif; ?>
                            </div>
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
                            <div class="actual-discount">
                                <div class="actual-price"><?php echo esc_html( $currency . $obj->wp_travel_engine_price_format( $prev_cost ) ); ?></div>
                                <div class="discounted-price"><?php echo esc_html( $currency . $obj->wp_travel_engine_price_format( $cost ) ); ?></div>
                            </div>
                            
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>

        <div class="view-btn text-center">
            <a href="<?php echo esc_url( home_url( '/trip-listing' ) ); ?>" class="btn btn-primary">View All Tour</a>
        </div>
        </div>
    </section>
  <?php endif; ?>
  <?php endif; ?>
<?php endif;  