var $ = jQuery;

//Show Menu
$('.menu_button').click(function(){
	$('.pop_menu').addClass('pop_menu_open').removeClass('hidden pop_menu_close');
});

//Hide Menu
$('.close_button').click(function(){
	$('.pop_menu').addClass('pop_menu_close').removeClass('pop_menu_open').delay(500).queue(function(next){
		$(this).addClass('hidden');
		next();
	});
});

$(window).load(function(){
	$('body').addClass('loaded');
});

$(function(){
	$('a.nav-link').on('click',function(){
		$('body').removeClass('loaded').fadeIn('#loader-wrapper',500);

		var href = $(this).attr('href');

		setTimeout(function() {window.location = href}, 1000);
        return false;
	});
})