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
	function callback(a){
			console.log('loaded gallery 1', a);
		}
		function callback2(a){
			console.log('loaded gallery 2', a);
		}
$('#gallery').photobox('a',{
time:0,       //Убрать кнопку autoplay, если нужна - то поставить от 1000
thumbs:true,  //Показать миниатюры. Цикл с последнего изображения на первое
zoomable:true, //Включить, отключить увеличение колесиком мыши
counter: false
});
$('#gallery2').photobox('a',{
time:0,       //Убрать кнопку autoplay, если нужна - то поставить от 1000
thumbs:true,  //Показать миниатюры. Цикл с последнего изображения на первое
zoomable:true, //Включить, отключить увеличение колесиком мыши
counter: false
});
var imageLink = $('#gallery a:first');
		$('#addImage').on('click',function(){
			$('#gallery2 > div').append( imageLink.clone() );
		});

		$('#removeImage').on('click',function(){
			$('#gallery2 a:last').remove();
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
	var header3 = document.querySelector('.header_line');
	if(window.pageYOffset > 200){
		header3.classList.add('header_line_fixed');
	} else{
		header3.classList.remove('header_line_fixed');
	}
	var header4 = document.querySelector('.header_line_right-container');
	if(window.pageYOffset > 200){
		header4.classList.add('header_line_right-container_fixed');
	} else{
		header4.classList.remove('header_line_right-container_fixed');
	}
	var header5 = document.querySelector('.header_line_right-container img');
	if(window.pageYOffset > 200){
		header5.classList.add('header_line_right-container_fixed_img');
	} else{
		header5.classList.remove('header_line_right-container_fixed_img');
	}
	var header6 = document.querySelector('.VK_icon');
	if(window.pageYOffset > 200){
		header6.classList.add('VK_icon_fixed');
	} else{
		header6.classList.remove('VK_icon_fixed');
	}
	var ava = document.getElementById('main_logo');
		if(window.pageYOffset > 200){
		ava.setAttribute('src','img/min-logo.png');
	} else{
		ava.setAttribute('src', 'img/main-logo.png');
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