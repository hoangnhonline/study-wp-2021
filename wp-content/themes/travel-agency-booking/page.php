<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package travel_agency_booking
 */

get_header(); ?>
<div class="inside-page" id="primary">
<div class="container">
	<div class="row">
		<div class="col-sm-9">
<section class="page-section">					
			<div class="detail-content">            
	            <?php while ( have_posts() ) : the_post(); ?>
	                <?php get_template_part( 'template-parts/content', 'page' ); ?>   
	            <?php endwhile; // End of the loop. ?> 
	            <?php comments_template(); ?>         
	        </div> <!-- /.end of detail-content -->	
</section><!-- /.end of section -->
	</div>
	<div class="col-sm-3"><?php get_sidebar(); ?>
	</div>
	</div>
</div>
</div>
<?php get_footer();