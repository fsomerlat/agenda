var FormHelperServico = (function(){

	var mascaraCampos = function() {
		
		$("#cpValorServico").mask("9999.99");
	} 
	
	var bindEvents = function() {
		
		mascaraCampos();
		
		$(document).on('click','.excluiServico', function() {

			return confirm('Deseja excluir esse serviço ?');
		});

	}

	return {

		bindEvents: bindEvents
	}
	
})();

$(document).ready(function() {
	
	FormHelperServico.bindEvents();
})