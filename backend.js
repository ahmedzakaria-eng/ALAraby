
$(function () {
	// body...
	'use strict';
	
	// Hide Placeholder On Form Focus

	$('[placeholder]').focus(function () {

		$(this).attr('data-text', $(this).attr('placeholder'));

		$(this).attr('placeholder','');
	
	}).blur(function () {
	
		$(this).attr('placeholder', $(this).attr('data-text'));
	
	});

	// Add Asterisk On Required Field

	// $('input').each(function() {
	// 	if($(this).attr('required') === 'required')
	// 	{
	// 		$(this).after('<span class = "asterisk">*</span>');
	// 	}
	// })

	// Confirm Message On Buttom

	$('.confirm').click(function() {
		return confirm('Are You Sure?');
	})
});