<?php


function travel_agency_booking_starter_content() {
	$starter_content = array(
	    'options' => array(
	    	'show_on_front' => 'page',
	        'page_on_front' => '{{home}}',
	        'page_for_posts' => '{{blog}}',
			'blogdescription' => 'Just another Preview Sites'
	    ),
	    // Starter pages to include
        'posts' => array(
            'home' => array(
	            'post_type' => 'page',
	            'post_title' => 'Home',	            
	            'template' => 'template-home.php',
	        ),
			'about',
	        'blog',	
			'contact'        
        ),
		'attachments' => array(
			'cta-image' => array(
				'post_title' => _x( 'CTA Image ', 'Theme starter content', 'travel-agency-booking' ),
				'file' => 'assets/images/discount.jpg',
			),
		),

		'theme_mods' => array(
	        'travel_agency_booking_contact_number' => esc_html__( '+9779806789890', 'travel-agency-booking' ),
	        'travel_agency_booking_email_address' => esc_html__( 'travel@yahoo.com', 'travel-agency-booking' ),
			'banner_section_title' => esc_html__( 'Open Your Eyes', 'travel-agency-booking' ),
	        'banner_section_description' => esc_html__( 'Explore the best things to do around the planet', 'travel-agency-booking' ),
			'banner_section_cta_label' => esc_html__( 'Read More', 'travel-agency-booking' ),
	        'banner_section_cta_link' => esc_html__( '#', 'travel-agency-booking' ),

			'title_for_cta_block' => 'Discount 10-30% Off',
	        'content_for_cta_block' => esc_html__( 'Mauris eleifend tempor nisl, vel tempus nibh euismod ac. Morbi vulputate aliquet velit. Maecenas quis ornare nisi. Phasellus facilisis fermentum.', 'travel-agency-booking' ),
			'cta_block_link_label' => esc_html__( 'See Promotions Tour', 'travel-agency-booking' ),
	        'cta_block_link' => esc_html__( '#', 'travel-agency-booking' ),
			
			'blog_post_section_title' => esc_html__( 'Travel Articles', 'travel-agency-booking' ),
    		
			'copyright_text' => esc_html__( '© Copyright 2021 Travel Agency Booking | Developed By Bootstrap Themes Powered by WordPress .', 'travel-agency-booking' ),
			
		),    
		'nav_menus' => array(
			'main-menu' => array(
				'name' => __( 'Main Menu', 'travel-agency-booking' ),
				'items' => array(
					'page_home' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{home}}',
					),
					'page_about' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{about}}',
					),
					'page_blog' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{blog}}',
					),
					'page_contact' => array(
						'type' => 'post_type',
						'object' => 'page',
						'object_id' => '{{contact}}',
					),
				),
			),	
		),
		'widgets' => array(
						'footer-1' => array(
        						'my_text' => array(
								'text',
								array(
									'title' => 'Contact Info',
									'text'  => '<p>Phone: +977-1-47012454 </p>

												<p>Email: info@xyz-adventure.com</p>
									
												<p>GPO Box : 5612, Thamel ,Kathmandu</p>
									
												<p>Fax Number: 503-555-1213</p>',
									)
								),
							),
							'footer-2' => array(
								'text_business_info',
							),
							'footer-3' => array(
								'meta',
							),
							'footer-4' => array(
								'search',
							),
			
			
		)
	);

	return $starter_content; 
}