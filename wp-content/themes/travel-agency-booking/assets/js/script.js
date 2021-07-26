jQuery(function ($) {


	// $('.dropdown').hover(function () {
 //    $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
 //  }, function () {
 //    $(this).find('.dropdown-menu').first().stop(true, true).slideUp(150)
 //  });

 //  var count = 0;
 //  $('.dropdown .caret').on('click', function (e) {
 //    e.preventDefault();
 //    if (count === 0) {
 //      $(this).closest("li").find('.dropdown-menu').first().stop(true, true).slideDown(150);
 //      count++;
 //    }
 //    else {
 //      $(this).closest("li").find('.dropdown-menu').first().stop(true, true).slideUp(150);
 //      count = 0;
 //    }

 //  });

	$('.destinations-block .owl-carousel').owlCarousel({
		loop:true,
		margin:30,
		responsiveClass:true,
		nav: true,
		responsive:{
			320:{
				items:1
			},
			768:{
				items:2
			},
			992:{
				items:3
			}
		}
	})

	$('.activities-block .owl-carousel').owlCarousel({
		loop:true,
		margin:30,
		responsiveClass:true,
		nav: true,
		responsive:{
			320:{
				items:1
			},
			768:{
				items:2
			},
			992:{
				items:3
			},
			1199:{
				items:4
			}
		}
	})

	$('.travel-articles .owl-carousel').owlCarousel({
		loop:true,
		margin:30,
		responsiveClass:true,
		nav: true,
		responsive:{
			320:{
				items:1
			},
			768:{
				items:2
			},
			992:{
				items:3
			}
		}
	})



	function makeTimer() {

	//		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
	var endTime = new Date("29 December 2021 9:56:00 GMT+01:00");			
	endTime = (Date.parse(endTime) / 1000);

	var now = new Date();
	now = (Date.parse(now) / 1000);

	var timeLeft = endTime - now;

	var days = Math.floor(timeLeft / 86400); 
	var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
	var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
	var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));

	if (hours < "10") { hours = "0" + hours; }
	if (minutes < "10") { minutes = "0" + minutes; }
	if (seconds < "10") { seconds = "0" + seconds; }

	$("#days").html(days + "<span>Days</span>");
	$("#hours").html(hours + "<span>Hours</span>");
	$("#minutes").html(minutes + "<span>Minutes</span>");
	$("#seconds").html(seconds + "<span>Seconds</span>");		

}

setInterval(function() { makeTimer(); }, 1000);

});