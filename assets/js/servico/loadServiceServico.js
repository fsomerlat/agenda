var LoadServiceServico = (function(){

	var baseUrl = Utils.getBaseUrl();
	
	var loadService = function(url) {

		var options = ""; 
		$.ajax({

			url:url,
			cache: false,
			dataType: "json",
			beforeSend: function() {

				$(".tableServico").html("carregando lista de servicos...");
			},
			error: function() {

				$(".tableServico").html("Houve algum erro com a fonte de dados !");
			}
			,success: function(retorno) {

				setTimeout(function(){

					retorno.map(function(dados) {

						options += "<tr>";
						options += "<td>" + dados.idServico + "</td>";
						options += "<td>" + dados.cpNomeServico + "</td>";
						options += "<td>R$ " + dados.cpValorServico + "</td>";
						options += "<td><a href='"+baseUrl+"servico?panel=3&acao=editar&id="+dados.idServico+"'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a></td>";
						options += "<td><a href='"+baseUrl+"servico?acao=excluir&id="+dados.idServico+"'><span class='glyphicon glyphicon-trash excluiServico' aria-hidden='true'></span></a></td>";
						options += "</tr>";
					});

					$("#tableListServico tbody").html(options);
					$(".tableServico").html("Lista de serviços");

				},1200);
			}
		});
	}	

	var bindEvents = function() {

		loadService(baseUrl + "servico/service_servico");
	}

	return {

		bindEvents:bindEvents
	}

})();

$(document).ready(function() {
	
	LoadServiceServico.bindEvents();
})
