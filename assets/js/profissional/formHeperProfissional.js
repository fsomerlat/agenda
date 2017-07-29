var FormHelperProfissional = (function() {
	
	var mascarasCampos = function() {
		
		$("#cpCepProfissional").mask("99999-999");
		$("#cpTelefoneProfissional").mask("(99) 9999-9999");
		$("#cpRgProfissional").mask("99999-999");
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
		
		$("#cpOrgaoExpedidorRgProfissional").autocomplete({
			
			source:siglas
		});
	}	

	var bindEvents = function(){
		
		FileServiceCorreios.loadServiceCorreios('cpCepProfissional','cpBairroProfissional','cpCidadeProfissional','cpEstadoProfissional','cpRuaProfissional');		
		orgaoExpedidor();
		mascarasCampos();
		
		$(document).on('click','.excluiProfissional', function(){
			
			return confirm("Deseja excluir esse registro ?");
		});
	}
	
	return {
		
		bindEvents:bindEvents
	}
	
})();

$(document).ready(function() {
	
	FormHelperProfissional.bindEvents();
})
