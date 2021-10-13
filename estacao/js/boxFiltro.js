$(document).ready(function(){
	(function() {

		$(".por-dia").hide()
	    $(".formatoFiltro").change(function(e) {
	    	var thisForm = $(this).parents("form")
        	var formato = $(this).find(":selected").val()

	    	if(formato == "datas") {
	    		thisForm.find(".entre-datas").show()
	    		thisForm.find(".por-dia").hide()
	    	}
	    	if(formato == "dia") {
	    		thisForm.find(".por-dia").show()
	    		thisForm.find(".entre-datas").hide()
	    	}
	    });
	    
	})();
});