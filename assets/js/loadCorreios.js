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
	
	var bindEvents = function() {
		
		loadCorreios();
	}
	
	return {
		
		bindEvents: bindEvents
	}
	
})();