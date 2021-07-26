<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package travel_agency_booking
 */
?>
<footer class="footer">
    <div class="container">
      <div class="footer-widget-holder">
      <?php 
for ( $i = 1 ;  $i < 5 ;  $i++ ) {
    ?>
          <?php 
    dynamic_sidebar( 'footer-' . $i . '' );
    ?>
        <?php 
}
?>  
      </div>
      <div class="copyright">
        <?php 
esc_html_e( "Powered by", 'travel-agency-booking' );
?> <a href="<?php 
echo  esc_url( 'http://wordpress.org/' ) ;
?>"><?php 
esc_html_e( "WordPress", 'travel-agency-booking' );
?></a> | <?php 
esc_html_e( 'Theme by', 'travel-agency-booking' );
?> <a href="<?php 
echo  esc_url( 'http://thebootstrapthemes.com/' ) ;
?>"><?php 
esc_html_e( 'TheBootstrapThemes', 'travel-agency-booking' );
?>
      </div>
    </div>
  </footer>
  <?php 
wp_footer();
?>
  </body>
</html>