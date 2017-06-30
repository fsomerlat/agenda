var LoadServiceCorreios = (function() {
	
	var loadCorreios = function() {
	
		$("#cpCep").blur(function() {
			
			var cep = $(this).val().replace(/\D/g,"");
			
			if(cep != "") {
				
				var validaCep = /^[0-9]{8}$/;
				
				if(validaCep.test(cep)) {
					
					
					$(".loading").val("carregando...");
					
					$.getJSON("https://viacep.com.br/ws/" +cep+ "/json/?callback=?",function(dados) {
						
						if(!("erro" in dados)) {
							
							$("input[name=cpBairro]").val(dados.bairro);
							$("input[name=cpCidade]").val(dados.localidade);
							$("input[name=cpEstado]").val(dados.uf);
							$("input[name=cpRua]").val(dados.logradouro);
						
						} else {
							
							window.alert("O cep informado não foi encontrado !");
							$(".loading").val("");
						}
					});
				
				} else{
						
					window.alert("O cep informado não é válido !");
					$(".loading").val("");
				}
				
			} else {
				
				$(".loading").val("");
			}
		});
	}
	
	var loadServiceCorreios = function() {
		
		$("#cpCepProfissional").blur(function(){
			
			var cep = $(this).val().replace(/\D/g,"");
		
			if(cep != "") {
				
				var validaCep = /^[0-9]{8}$/;
				
				if(validaCep.test(cep)) {
					
					$(".loadingProfissional").val("carregando...")
					
					$.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?",function(dados){
						
						if(!("erro" in dados)) {
							
							$("#cpRuaProfissional").val(dados.logradouro);
							$("#cpBairroProfissional").val(dados.bairro);
							$("#cpCidadeProfissional").val(dados.localidade);
							$("#cpEstadoProfissional").val(dados.uf);
							
						} else {
							
							window.alert("O cep informado não foi encontrado !");
							$(".loadingProfissional").val("");
						}
						
					});
				
				} else {
					
					window.alert("O formato do cep informado não e válido !");
					$(".loadingProfissional").val("");
				
				} 
			} else {
				
				$(".loadingProfissional").val("");
			}
	
		});
	}
	
	var bindEvents = function() {
		
		loadCorreios();
		loadServiceCorreios();
	}
	
	return {
		
		bindEvents: bindEvents
	}
	
})();