/* global amadeusCustomizerObject */
/*
Upsells
*/

jQuery(document).ready(function() {

	/* Upsells in customizer (Documentation link and Upgrade to PRO link */

	if ( !jQuery( '.amadeus-upsells' ).length ) {
		var html = '<li class="accordion-section amadeus-upsells" style="padding-bottom: 15px"><a style="width: 80%; margin: 5px auto 5px auto; display: block; text-align: center;" href="http://docs.themeisle.com/article/270-amadeus-documentation" class="button" target="_blank">'+amadeusCustomizerObject.documentation+'</a></li>';
		jQuery('#accordion-section-amadeus_general .accordion-section-content .customize-section-description-container').after(html)
	}
	
	jQuery('.preview-notice').append('<a class="amadeus-upgrade-to-pro-button" href="http://themeisle.com/themes/amadeus-pro/?ref=6148" class="button" target="_blank">{pro}</a>'.replace('{pro}',amadeusCustomizerObject.pro));
});
