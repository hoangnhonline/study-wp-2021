<?php
/**
 * Template part for displaying single posts.
 *
 * @package travel_agency_booking
 */

?>

  <h1 class="page-title"><?php the_title(); ?></h1>

<div class="single-post">   

    <div class="info">
      <ul class="list-inline">
           
              <?php $archive_year  = get_the_time('Y'); $archive_month = get_the_time('m'); $archive_day = get_the_time('d'); ?>
              <li><i class="icon-clock"></i> <a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day ) ); ?>"><?php echo get_the_date(); ?></a></li>
            
              <li>
                <a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                  <?php $avatar = get_avatar( get_the_author_meta( 'ID' ), $size = 60 ); ?>
                  <?php if( $avatar ) : ?>
                      <i class="icon-user"></i>
                  <?php endif; ?>
                  <?php echo esc_html( get_the_author() ); ?>
                </a>
             </li>
            
              <li><i class="icon-comment-empty"></i> <?php comments_popup_link( __( 'zero comment', 'travel-agency-booking' ), __( 'one comment', 'travel-agency-booking' ), __( '% comments', 'travel-agency-booking' ) ); ?></li>
            
              <?php $categories = get_the_category();
                if( ! empty( $categories ) ) :
                  foreach ( $categories as $category ) { ?>
                    <li><a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>"><?php echo esc_html( $category->name ); ?></a></li>
                  <?php }
                endif; ?>
            
              <?php $tags = get_the_tags();
                if( ! empty( $tags ) ) :
                  foreach ( $tags as $value ) { ?>
                    <li><a href="<?php echo esc_url( get_category_link( $value->term_id ) ); ?>"><?php echo esc_html( $value->name ); ?></a></li>
                  <?php }
                endif; ?>          
        
      </ul>
    </div>

 


  <div class="post-content">
    
      <?php if ( has_post_thumbnail() ) : ?>
        <figure class="feature-image">
          <?php the_post_thumbnail( 'full' ); ?>
        </figure>      
      <?php endif; ?>    
    
    <article>
      <?php the_content(); ?>
      
      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'travel-agency-booking' ),
          'after'  => '</div>',
        ) );
      ?>     
    </article>

    </div>

    
      <div class="author-post clearfix">
        <?php $avatar = get_avatar( get_the_author_meta( 'ID' ), $size = 75 ); ?>
        <?php if( $avatar ) : ?>
          <div class="author-image"> 
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo $avatar; ?></a>
          </div>
        <?php endif; ?>
        <div class="author-details">
        <h6><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></h6>
        <p><?php echo esc_html( get_the_author_meta('description') ); ?></p>
        </div>
      </div>
    
  </div>


  