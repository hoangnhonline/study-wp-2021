<?php

if ( get_theme_mod( 'banner_section_display_option', true ) ) {
    $banner_title = get_theme_mod( 'banner_section_title' );
    $banner_desc = get_theme_mod( 'banner_section_description' );
    $banner_cta_label = get_theme_mod( 'banner_section_cta_label' );
    $banner_cta_link = get_theme_mod( 'banner_section_cta_link' );
    ?>
  <section class="home-section banner">
    <div class="banner-holder" style="background-image: url('<?php 
    echo  esc_url( get_header_image() ) ;
    ?>');">
      <div class="container">
        <div class="caption">
          <h1><?php 
    echo  esc_html( $banner_title ) ;
    ?></h1>
          <p><?php 
    echo  esc_html( $banner_desc ) ;
    ?></p>
          <?php 
    
    if ( $banner_cta_link && $banner_cta_label ) {
        ?>
            <div class="btn-group">
              <a class="btn btn-third" href="<?php 
        echo  esc_attr( $banner_cta_link ) ;
        ?>">
                <?php 
        echo  esc_html( $banner_cta_label ) ;
        ?>
              </a>
            </div>
          <?php 
    }
    
    ?>
        </div>
      </div>  
    </div>

    <?php 
    
    if ( get_theme_mod( 'search_section_display_option', true ) ) {
        ?>
        <section class="banner-search search-block"><div class="container"><?php 
        get_search_form();
        ?></div></section>
        <?php 
    }
    
    ?>
  <?php 
}

?>
</section>

<div id="primary"></div>