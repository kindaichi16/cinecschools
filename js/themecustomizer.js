jQuery(document).ready(function($) {
	wp.customize('edu_footer_text', function( value ) {
		value.bind(function(to) {
			$('#address_e').html( to );
		});
	});
	wp.customize('edu_footer_text_c', function( value ) {
		value.bind(function(to) {
			$('#address_c').html( to );
		});
	});
	wp.customize('edu_footer_tel', function( value ) {
		value.bind(function(to) {
			$('#address_tel').html( to );
		});
	});
	wp.customize('edu_footer_fax', function( value ) {
		value.bind(function(to) {
			$('#address_fax').html( to );
		});
	});
});