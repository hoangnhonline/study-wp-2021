<?php
if( get_theme_mod( 'info_blocks_show_hide', true ) ) :
  $travel_agency_booking_info_sections = get_theme_mod( 'travel_agency_booking_info_section', '' );
  if ( ! empty( $travel_agency_booking_info_sections ) && is_array( $travel_agency_booking_info_sections ) ) {
?>
<section class="home-section main-info-block">
    <div class="container">
      <div class="info-block-holder">
        <div class="row">
        <?php 
            foreach ( $travel_agency_booking_info_sections as $travel_agency_booking_info_section ) {                  
        ?>
          <div class="col-lg-4 col-md-6">
            <div class="info-holder">
            <?php if( $travel_agency_booking_info_section['info_thumbnail'] ){ 
    				    $img_url = is_numeric( $travel_agency_booking_info_section['info_thumbnail'] ) ? wp_get_attachment_image_url( $travel_agency_booking_info_section['info_thumbnail'], 'full' ) : $travel_agency_booking_info_section['info_thumbnail'];
                        ?>    				    
                        <img src="<?php echo esc_url( $img_url ); ?>" />
    				<?php } ?>
              
              <div class="info-text">
              <?php if($travel_agency_booking_info_section['info_name']){ ?>
                <h5 class="title"><?php echo esc_html($travel_agency_booking_info_section['info_name']); ?></h5>
              <?php } ?>
              <?php if($travel_agency_booking_info_section['info_desc']){ ?>
                <p><?php echo esc_textarea($travel_agency_booking_info_section['info_desc']);?></p>
              <?php } ?>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>
      </div>
    </div>
  </section>
<?php } endif;