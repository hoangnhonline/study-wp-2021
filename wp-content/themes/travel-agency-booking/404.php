<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package travel_agency_booking
 */

get_header();
?>

<div class="inside-page" id="primary">
  <div class="container">
  		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'travel-agency-booking' ); ?></h1>
		</header>

		<div class="row">
		<div class="col-sm-9">
		<?php if ( have_posts() ) : ?>
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content' ); ?>
			<?php endwhile; ?>                  
			<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
			<?php endif; ?>
		</div>  

		<div class="col-sm-3"><?php get_sidebar(); ?></div>       

		</div>

  </div>
</div>

<?php
get_footer();