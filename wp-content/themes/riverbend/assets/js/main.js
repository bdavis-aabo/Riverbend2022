$(document).ready(function(){
	$('.contact-btn').click(function(){
		$('.contactForm-section').addClass('is-visible');
	});

	$('.closeContact-btn').click(function(){
		$('.contactForm-section').removeClass('is-visible');
	});
});

// SWIPER FUNCTIONS
var swiper = new Swiper('.swiper', {
	direction: 'vertical',
	loop: false,
	pagination: {
		el: '.swiper-pagination',
		clickable: true
	},
	spaceBetween: 0,
	mousewheel: true,
	slidesPerView: 1
});
