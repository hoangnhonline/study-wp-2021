jQuery(function($){
	$('body').on('click', '.loadmore', function() {
 
		var button = $(this);
		var data = {
			'action': 'travel_agency_booking_loadmore',
			'page' : travel_agency_booking_loadmore_params.current_page,
		};
 
		$.ajax({
			url : travel_agency_booking_loadmore_params.ajaxurl,
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...');
			},
			success : function( data ) {
				if( data ) { 
					$( 'div.blog-list-block' ).append(data);
					button.text( 'More Posts' );
					travel_agency_booking_loadmore_params.current_page++;
 
					if ( travel_agency_booking_loadmore_params.current_page == travel_agency_booking_loadmore_params.max_page ) { 
						button.remove();
					}
				} else {
					button.remove();
				}
			}
		});
	});
});