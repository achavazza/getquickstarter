$(function(){
	$('#s').keyup(function(){
		var valThis = $(this).val().toLowerCase();
		$('.results>li').each(function(){
			var text = $(this).text().toLowerCase();
			(text.indexOf(valThis) == 0) ? $(this).show() : $(this).hide();
		});
	});
}); 
