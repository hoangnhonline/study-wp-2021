<?php

class Travel_Agency_Booking_Dropdown_Posttype extends WP_Customize_Control {

	public $posttype = '';


	public function __construct( $manager, $id, $args = array() ) {

	    $travel_tour_posttype = 'trip';
	    if ( isset( $args['posttype'] ) ) {
	      $posttype_exist = post_type_exists( esc_attr( $args['posttype'] ) );
	      if ( true === $posttype_exist ) {
	        $our_taxonomy = esc_attr( $args['posttype'] );
	      }
	    }
	    $this->posttype = esc_attr( $travel_tour_posttype );

	    parent::__construct( $manager, $id, $args );
	 }

	protected function render_content() {
		
		$posttype = $this->posttype;
		$args = array(
			'post_type' => $posttype,
			'posts_per_page' => '-1'
		);
		$all_posts = get_posts( $args );
	?>

		<label>
	      <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	         <select <?php echo $this->link(); ?>>
	            <?php
	              printf('<option value="%s" %s>%s</option>', '', selected($this->value(), '', false),__( 'Select', 'travel-agency-booking') );
	             ?>
	            <?php if ( ! empty( $all_posts ) ): ?>
	              <?php foreach ( $all_posts as $all_post ): ?>
	                <?php 
	                  printf('<option value="%s" %s>%s</option>', $all_post->post_name, selected($this->value(), $all_post->post_name, false), $all_post->post_title );
	                 ?>
	              <?php endforeach; ?>
	           <?php endif; ?>
	         </select>

	    </label>
	    <?php

	}
}