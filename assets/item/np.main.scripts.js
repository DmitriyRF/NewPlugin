jQuery.noConflict();
 
jQuery( document ).ready(function( $ ) {

	$('#item_rating').bind('rated', function(event) {
		$(this).rateit('readonly', true);

		var formObj				=	{
			action: 				"np_rate_item",
			rid: 					$(this).data("rid"),
			rating: 				$(this).rateit("value")
		}

		$.post( item_obj.ajax_url, formObj, function(argument) {
			console.log(argument);
		});
	});

});