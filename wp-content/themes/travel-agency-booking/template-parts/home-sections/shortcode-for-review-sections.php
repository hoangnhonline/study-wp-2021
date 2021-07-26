<?php
if( get_theme_mod( 'review_shortcode_show_hide', true ) ) :
    $shortcode_for_review = get_theme_mod('shortcode_for_review');
    if($shortcode_for_review ){
?>
    <div class="home-section shortcode-section">
        <div class="container">
            <?php echo do_shortcode($shortcode_for_review ); ?>
        </div>
    </div>
<?php  } endif;