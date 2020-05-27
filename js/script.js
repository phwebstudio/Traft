$(document).ready(function () {
	$("#toBtm, #logo, #main-menu, #anchor").on("click", "a", function (event) {
		event.preventDefault();
		var id = $(this).attr('href');
		var	top = $(id).offset().top
		$('body,html').animate({
			scrollTop: top
		}, 1000);
	});
});

$(document).ready(function() {
		$('.menu-trigger').click(function() {
		$('header nav ul').slideToggle(500);
	});
});

$(window).scroll(function () {
	if ($(this).scrollTop() > 10) {
		$('header').addClass("sticky");
	} else {
		$('header').removeClass("sticky");
	}
});

$('.testimotials-slider').slick({
	infinite: true,
  	slidesToShow: 1,
  	slidesToScroll: 1,
	draggable: false,
	autoplay: true,
	autoplaySpeed: 4000,
	pauseOnFocus: false,
	dots: true, 
	arrows: true
});

lightbox.option({
	'wrapAround': true
})