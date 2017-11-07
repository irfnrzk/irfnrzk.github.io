jQuery(document).ready(function($){
	//SLIDER MAIN
	$('.slider-main').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 5000
	});	
	//SLIDER PRODUCTS
	$('.slider-products').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 4
	});
});