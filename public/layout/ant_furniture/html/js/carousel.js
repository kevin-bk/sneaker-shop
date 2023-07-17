
	$(".home-slider").owlCarousel({
		nav:true,
		navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"],
		slideSpeed : 600,
		paginationSpeed : 400,
		singleItem:true,
		pagination : false,
		dots: true,
		autoplay:true,
		autoplayTimeout:4500,
		autoplayHoverPause:false,
		autoHeight: false,
		loop: true,
		responsive: {
			0: {
				items: 1
			},
			543: {
				items: 1
			},
			768: {
				items: 1
			},
			991: {
				items: 1
			},
			992: {
				items: 1
			},
			1300: {
				items: 1
			},
			1590: {
				items: 1
			}
		}
	});