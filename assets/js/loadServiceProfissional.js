
var LoadServiceProfissional = (function(){
	
	var loadService = function(url) {
		
		var itens = "";
		
		$.ajax({
			
			url: url,
			cache: false,
			datatype:"json",
			beforeSend: function() {
				
				$(".tableProfissional").html("carregando lista de profissionais ...");
			},
			error: function() {
				
				$(".tableProfissional").html("Houve algum erro no dados dos dados !");
			},
			success: function(retorno) {
				
				setTimeout(function() {
						
					retorno.map(function(dados) {
						
						itens += "<tr>";
						itens += "<td>" + dados.idProfissional + "</td>";
						itens += "<td>" + dados.cpNomeProfissional + "</td>";
						itens += "<td>" + dados.cpTelefoneProfissional + "</td>";
						itens += "<td>" + dados.cpEmailProfissional + "</td>";
						itens += "<td class='info'><a href='#'><span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span></a></td>";
						itens += "<td>" + dados.cpEspecilidadeProfissional + "</td>";
						itens += "<td><a href='FormProfissional?panel=9&acao=editar&id="+dados.idProfissional+"'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span><a/></td>";
						itens += "<td><a href='FormProfissional?panel=9&acao=excluir&id="+dados.idProfissional+"'><span class='glyphicon glyphicon-trash excluiProfissional' aria-hidden='true'></span></a></td>";
						itens += "</tr>";
				
					});
					
					$("#tableProfissional tbody").html(itens);
					$(".tableProfissional").html("Lista de profissionais cadastrados");
					
				},1200);
			}
		});
		
	}

	var bindEvents = function() {
		
		loadService("http://localhost/CodIgniter/profissional/service_profissional");
	}
	
	return {
		
		bindEvents: bindEvents
	}
	
})();