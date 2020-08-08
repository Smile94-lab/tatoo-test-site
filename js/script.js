$(document).ready(function() {
	$('.slider').slick({
		arrows:false,
		dots:true,
		adaptiveHeight: false,
		slidesToShow:1,
		autoplay:false,
		speed:1000,
		autoplaySpeed:800,
		centerMode: true,
		variableWidth: true,
	});

	window.onscroll = function showHeader() {
	var header = document.querySelector('.header_wrapper');
	if(window.pageYOffset > 200){
		header.classList.add('header_fixed');
	} else{
		header.classList.remove('header_fixed');
	}
	var header1 = document.querySelector('.header_line_left-container img');
	if(window.pageYOffset > 200){
		header1.classList.add('hide');
	} else{
		header1.classList.remove('hide');
	}
	var header2 = document.querySelector('.header_line_left-container p');
	if(window.pageYOffset > 200){
		header2.classList.add('hide');
	} else{
		header2.classList.remove('hide');
	}
}

	$('.menu').click(function(event) {
		$('.menu, .burger__menu, .submenu, .subgallery, .subcontacts, .burger-container').toggleClass('active');
	});
		$('.needopen').click(function(event) {
			$('.menu_overlay').toggleClass('open');
			$('body').toggleClass('lock');
	});
	$('.submenu__text').on("click","a", function (event) {
		$('.menu, .burger__menu, .submenu, .subgallery, .subcontacts, .burger-container').removeClass('active');
	});
	$('.menu_overlay').on("click", function (event) {
		$('.menu_overlay').removeClass('open');
		$('body').removeClass('lock');
	});
	$("#menu").on("click","a", function (event) {
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $(id).offset().top;
		$('body,html').animate({scrollTop: top}, 1500);
	});
});