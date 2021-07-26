<?php
if( get_theme_mod( 'cta_blocks_show_hide', true ) ) :

 $title_for_cta_block = get_theme_mod('title_for_cta_block');
 $content_for_cta_block = get_theme_mod('content_for_cta_block');
 $cta_block_link_label = get_theme_mod('cta_block_link_label');
 $cta_block_link = get_theme_mod('cta_block_link');
 $cta_block_image = get_theme_mod('cta_block_image');
 if($title_for_cta_block OR $content_for_cta_block OR $cta_block_link_label OR $cta_block_link ){
?>
  <section class="home-section discount-section" <?php if( $cta_block_image ) { echo 'style="background-image:url('. esc_url($cta_block_image) .')"'; } ?>>
  <div class="container">
      <div class="discount-holder">
      
        <?php if($title_for_cta_block){ ?>
        <div class="main-title">
          <h3 class="title"><?php echo esc_html($title_for_cta_block); ?></h3>
        </div>
        <?php } ?>
        <?php if($content_for_cta_block){ ?>
            <p><?php echo esc_html($content_for_cta_block); ?>.</p>
        <?php } ?>
        <?php if($cta_block_link_label && $cta_block_link){ ?>
        <a href="<?php echo esc_url($cta_block_link); ?>" class="btn btn-primary"><?php echo esc_html($cta_block_link_label); ?></a>
        <?php } ?>
      </div>
    </div>
  </section>
<?php
 }
endif;