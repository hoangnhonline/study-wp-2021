<?php 
    if( get_theme_mod( 'blog_post_display_option', true ) ) :
    $blog_section_title = get_theme_mod( 'blog_post_section_title', '' );

    $blog_paged = ( get_query_var('page') ) ? get_query_var('page') : 1;
    $posts_per_page = get_theme_mod( 'number_of_blog_post', 4 );
    $blog_cat = get_theme_mod( 'blog_post_category' ) ;
        $args = array(
            'post_type' => 'post',
            'category_name'       =>  $blog_cat ,
            'posts_per_page'    =>  $posts_per_page,
            'paged'     => $blog_paged
        );
        $query = new WP_Query( $args );
        $max_pages = $query->max_num_pages;
        if ( $query->have_posts() ) {
?>
<section class="home-section travel-articles">
    <div class="container">
      <div class="main-title">
      <?php if(! empty($blog_section_title)){ ?>
        <h3 class="title"><?php echo esc_html($blog_section_title); ?></h3>
      <?php } ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>/blog""> - View All Articles</a>
      </div>
      <div class="owl-carousel owl-theme">
     
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="articles-holder">
          <div class="img-holder">
            <?php the_post_thumbnail( 'medium' ); ?>
          </div>
          <div class="article-content">
            <h4 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            <?php the_excerpt(); ?>
            <div class="author-date">
              <span class="author"><i class="fa fa-user" aria-hidden="true"></i> <?php echo esc_html(get_the_author_meta('display_name'));?></span>
              <span class="date"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php echo esc_attr( get_the_date('d M Y') ); ?></span>
            </div>
          </div>
        </div>
        <?php endwhile; ?>                                       
	    <?php wp_reset_postdata(); ?>
      </div>
    </div>
  </section>
  <?php } endif; ?>