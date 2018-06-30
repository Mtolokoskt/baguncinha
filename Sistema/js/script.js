$( document ).ready(function() {
    	$(".btn-menu").on('click', function(){
		$('.menu').show();
	});
	$(".btn-close").on('click', function(){
		$(".menu").hide();
	});
});