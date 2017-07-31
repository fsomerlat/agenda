var FileServiceCorreios = (function() {
	
	var loadServiceCorreios = function(idCcep,bairro,localidade,uf,logradouro) {
	
		$('#' + idCcep).bind('keyup', function() {
			
			var idCampo = $(this).attr('id'), 
				cep = $(this).val().replace(/\D/g,''),
				tamanhoCampoCep = cep.length == 8;
			
			if(cep !='') {
				
				var validaCep = /^[0-9]{8}$/;
				
				if(validaCep.test(cep)) {
					
					$('.loading').val('carregando...');
					
					$.getJSON('https://viacep.com.br/ws/' + cep + '/json/?callback=?', function(dados) {
						
						if(!("erro" in dados)) {
							
							if(tamanhoCampoCep) {
								
								$('#' + bairro).val(dados.bairro);
								$('#' + localidade).val(dados.localidade);
								$('#' + uf).val(dados.uf);
								$('#' + logradouro).val(dados.logradouro);								
							}
						
						} else {
							
							if(tamanhoCampoCep) {
								
								$('.loading').val('');	
								Utils.caixaDialog(idCampo, 'O CEP INFORMADO NÃO FOI ENCONTRADO !');	
								return false;
							}
						}
					});
				
				} else{
						
					if(tamanhoCampoCep) {
						
						Utils.caixaDialog(idCampo, 'O CEP INFORMADO NÃO É VÁLIDO !');
						$('.loading').val('');						
					}
				}
				
			} else {
				
				$('.loading').val('');
			}
		});
	}
	
	var bindEvents = function() {
		
		loadServiceCorreios();
	}
	
	return {
		
		loadServiceCorreios: loadServiceCorreios
	}
	
})();