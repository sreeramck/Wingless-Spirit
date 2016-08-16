// Main navigation position
jQuery(function($) {
	var siteHeader = $('.site-header');
	var siteHeaderHeight = $(siteHeader).height();
	var siteBranding = $('.site-branding');
	var siteBrandingHeight = $(siteBranding).height();
	var mainNavigation = $('.main-navigation');
	var mainNavigationHeight = $(mainNavigation).height();

	console.log( 'Site header height: ' + siteHeaderHeight );
	console.log( 'Site branding height: ' + siteBrandingHeight );
	console.log( 'Main navigation height: ' + mainNavigationHeight );

	$( mainNavigation ).css({
		'margin-top': ( ( siteHeaderHeight - siteBrandingHeight ) / 2 ) + ( siteBrandingHeight / 2 )
	});
});

//Menu dropdown animation
jQuery(function($) {
	$('.sub-menu').hide();
	$('.main-navigation .children').hide();
	$('.menu-item').hover( 
		function() {
			$(this).children('.sub-menu').slideDown();
		}, 
		function() {
			$(this).children('.sub-menu').hide();
		}
	);
	$('.main-navigation li').hover( 
		function() {
			$(this).children('.main-navigation .children').slideDown();
		}, 
		function() {
			$(this).children('.main-navigation .children').hide();
		}
	);	
});

//Open social links in a new tab
jQuery(function($) {
     $( '.social-navigation li a' ).attr( 'target','_blank' );
});

//Scroll arrow
jQuery(function($) {
	$('.scroll-icon').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 1000);
	    return false;
	});
});

//Back to top
jQuery(function($) {
	$('.scrolltop').click(function(){
		$('html, body').animate({
			scrollTop : 0
		},1500);
		return false;
	});
});	

//Parallax
jQuery(function($) {
	$(".header-image").parallax("50%", 0.3);
});

//Fit Vids
jQuery(function($) {
    $("body").fitVids();  
});

//Mobile menu
jQuery(function($) {
	$('.main-navigation .menu').slicknav({
		label: '<i class="fa fa-bars"></i>',
		prependTo: '.mobile-nav',
		closedSymbol: '&#43;',
		openedSymbol: '&#45;'
	});
	$('.info-close').click(function(){
		$(this).parent().fadeOut();
		return false;
	});
});	