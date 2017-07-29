var loadServicePainelAgendamento = (function() {
	
	var baseUrl = Utils.getBaseUrl();
	
	var loadService = function(url) {
		
		var itens = "";
		
		$.ajax({
			
			url: url,
			cache: false,
			dataType: "json",
			beforeSend: function() {
				
				$(".tableAPainelgendamento").html("carregando lista de agendamento ...");
			},
			error: function() {
				
				$(".tableAPainelgendamento").html("Houve algum erro com a fonte de dados !");
			},
			success: function(retorno) {
				
				setTimeout(function() {
					
					retorno.map(function(dados) {
						
						itens += "<tr>";
						itens += "<td>"+dados.idAgenda+"</td>";
						itens += "<td>"+dados.cpDataAgendamento+"</td>";
						itens += "<td>"+dados.cpHoraAgendamento+"</td>";
						itens += "<td>"+dados.cpNomeCliente+"</td>";
						itens += "<td>"+dados.cpSobreNomeCliente+"</td>";					
						itens += "<td>"+dados.cpNomeServico+"</td>";
						itens += "</tr>";
					});
					
					$("#tablePainelAgendamento tbody").html(itens);
					$(".tableAPainelgendamento").html("Todos agendamento");
					
				},1200);	
				
			}
		});
	}
	
	var bindEvents = function() {
		
		loadService(baseUrl + "painelAgendamento/service_painelAgendamento");
	}
	
	return  {
		
		bindEvents: bindEvents
	}
	
})();