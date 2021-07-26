<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package travel_agency_booking
 */

get_header(); ?>
<?php
    global $wp_query;
    $max_pages = $wp_query->max_num_pages;
?>

<?php
  
  $content_column_class = 'col-xl-9 col-lg-8';
  $sidebar_left_class = 'col-xl-3 col-lg-4';
  $sidebar_right_class = 'col-xl-3 col-lg-4';

?>

<div class="post-list inside-page" id="primary">
  <div class="container">
  	<?php
  		if( have_posts() ) :
  	        the_archive_title( '<h1 class="category-title">', '</h1>' );
  	        the_archive_description( '<div class="taxonomy-description">', '</div>' );
  	    endif;
    ?>
    <div class="row">
      
      <div class="<?php echo esc_attr( $content_column_class ); ?>">
        <div class="list-view">
          <?php if ( have_posts() ) : ?>
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content' ); ?>
                <?php endwhile; ?>                  
                <?php the_posts_pagination(); ?>
        <?php else : ?>
            <?php get_template_part( 'template-parts/content', 'none' ); ?>
          <?php endif; ?>
        </div>
      </div>  
     
      <div class="<?php echo esc_attr( $sidebar_right_class ); ?>"><?php get_sidebar(); ?></div>       

    </div>
  </div>
</div>
<?php get_footer(); ?>
