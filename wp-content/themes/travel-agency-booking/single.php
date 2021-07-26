<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package travel_agency_booking
 */

get_header();
?>

<div class="inside-page content-area" id="primary">
	<div class="container">	
		<div class="row">

			<div class="col-sm-9" id="main-content">
				<section class="page-section">
					<div class="detail-content">

						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'template-parts/content', 'single' ); ?>
						<?php endwhile; // End of the loop. ?>
						<?php comments_template(); ?>

					</div><!-- /.end of deatil-content -->
				</section> <!-- /.end of section -->
			</div>

			<div class="col-sm-3"><?php get_sidebar(); ?></div>

		</div>
	</div>
</div>
<!-- #main -->

<?php
get_footer();
