var FormHelperCliente = (function() {
	
	var toClear = function(className) {

		$("." + className).val("");
	}
	
	var orgaoExpedidor = function() { // ALGUNS ÓRGÃOS EXPEDIDOR DE RG
	
		var siglas = [
						
					 'SSP/MG',
					 'SSP/MA',
					 'SSP/MT',
					 'SSP/SC',
					 'SSP/SP',
					 'SSP/RJ',
					 'SSP/BA'
					];
		
		$("#cpOrgaoExpedidorRgCliente").autocomplete({
			
			source:siglas
		});
	}
	
	var mascarasCampos = function() {
		
		$("#cpCep").mask("99999-999");
		$("#cpTelefone").mask("(99) 9999-9999");
		$("#cpRgCliente").mask("99999-999");
	}
	var bindEvents = function() {

		FileServiceCorreios.loadServiceCorreios('cpCep','cpBairro','cpCidade','cpEstado','cpRua');		
		mascarasCampos();
		orgaoExpedidor();
		
		$(document).on("click",".excluiCliente",function() {
			
			return confirm("Deseja excluir esse registro ?");
		});
	}
	
	return {
		
		bindEvents: bindEvents
	}
	
})();

$(document).ready(function() {
	
	FormHelperCliente.bindEvents();
})
