<?php
function travel_agency_booking_load_more_scripts() {

    $args = array(
        'post_type' => 'post',
        'paged' => get_query_var( 'paged' ) ? absint( get_query_var('paged') ) : 1
    );
    $wp_query = new WP_Query( $args );

    wp_register_script( 'travel_agency_booking_loadmore', get_template_directory_uri() . '/assets/js/loadmore.js', array( 'jquery' ) );

    wp_localize_script( 'travel_agency_booking_loadmore', 'travel_agency_booking_loadmore_params', array(
        'ajaxurl' => esc_url_raw( admin_url( 'admin-ajax.php' ) ),
        'current_page' => get_query_var( 'paged' ) ? absint( get_query_var('paged') ) : 1,
        'max_page' => $wp_query->max_num_pages,
    ) );

    wp_reset_postdata();

    wp_enqueue_script( 'travel_agency_booking_loadmore' );
}

add_action( 'wp_enqueue_scripts', 'travel_agency_booking_load_more_scripts' );


function travel_agency_booking_load_more_ajax() {

    if( isset( $_POST['page'] ) ) {
        $args['paged'] = absint( $_POST['page'] + 1 );
    }
    $args['post_status'] = esc_html( 'publish' );

    $wp_query = new WP_Query( $args );

    if( $wp_query->have_posts() ) :

        while( $wp_query->have_posts() ): $wp_query->the_post();
            get_template_part( 'template-parts/content' );
        endwhile;

    endif;
    die; // here we exit the script and even no wp_reset_query() required!
}

add_action('wp_ajax_travel_agency_booking_loadmore', 'travel_agency_booking_load_more_ajax');
add_action('wp_ajax_nopriv_travel_agency_booking_loadmore', 'travel_agency_booking_load_more_ajax');