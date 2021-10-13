$(document).ready(function(){
	(function() {
		// inicia mostrando apenas o canvas
		$(".box").hide()
		$('.box:first').show()
		
	    $('.link').click(function(e) {
	    	// troca o card
	        $('.box').hide();
	        $('#' + $(this).attr('title')).show();

	        // altera os estilos dos cards
	        $(".link").addClass("estilo-card-default");
	        $(".link").removeClass("estilo-card-selected");
	        $(this).addClass("estilo-card-selected");

	        e.preventDefault();
	    });
	})();
});