var LoadServiceAgenda = (function(){
	
	var baseUrl = Utils.getBaseUrl();
	
	var loadServiceClientesCadastrados = function(url) {
		
		var options = "";
		
		$.ajax({
			
			url: url,
			cache: false,
			dataType:"json",
			beforeSend: function() {
				
				$(".tableAgenda").html("carregando agenda...");
			},
			success: function(retorno) { 
				
				setTimeout(function(){
					
					retorno.map(function(dados){
						
						options += "<tr>";
						options += "<td>" + dados.idAgenda +"</td>";
						options += "<td>" + dados.cpNomeCliente +"</td>";
						options += "<td>" + dados.cpNomeProfissional +"</td>";
						options += "<td>" + dados.cpNomeServico +"</td>";
						options += "<td><a href='#' target='_blank'><span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span></a></td>";
						options += "<td>R$ " + dados.cpValorServico +"</td>";
						options += "<td>" + dados.cpDataAgendamento +"</td>";
						options += "<td>" + dados.cpHoraAgendamento +"</td>";
						options += "<td>" + dados.cpObservacaoAgenda +"</td>";
						options += "<td><a href='"+baseUrl+"agenda?panel=5&TipoCli=CliCadastrado&acao=editar&id="+dados.idAgenda+"'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a></td>";
						options += "<td><a href='"+baseUrl+"agenda?panel=5&acao=excluir&id="+dados.idAgenda+"'><span class='glyphicon glyphicon-trash excluiAgendamento' aria-hidden='true'></span></a></td>";
						options += "</tr>";
					});
					
					$("#tableAgenda tbody").html(options);
					$(".tableAgenda").html("Meus Agendamentos");
					
				},1200);
			}
		});
		
	}
	
	var loadServiceClientesNaoCadastrados = function(url) {
		
		var options = "";
		
		$.ajax({
			
			url: url,
			cache: false,
			dataType: "json",
			success: function(retorno) {
				
				setTimeout(function() {
					
					retorno.map(function(dados){
						
						if(dados.cpClienteNaoCadastrado != "NULL"){
						
						options += "<tr>";
						options += "<td>"+ dados.idAgenda+"</td>";
						options += "<td>"+ dados.cpClienteNaoCadastrado+"</td>";
						options += "<td>"+ dados.cpNomeProfissional+"</td>";
						options += "<td>"+ dados.cpNomeServico+"</td>";
						options += "<td><a href='#' target='_blank'><span class='glyphicon glyphicon-info-sign' aria-hidden='true'></span></a></td>";
						options += "<td>R$ "+ dados.cpValorServico +"</td>";
						options += "<td>"+ dados.cpDataAgendamento+"</td>";
						options += "<td>"+ dados.cpHoraAgendamento+"</td>";
						options += "<td>"+ dados.cpObservacaoAgenda+"</td>";
						options += "<td><a href='FormAgenda?panel=5&TipoCli=Ncadastrado&acao=editar&id="+dados.idAgenda+"'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a></td>";
						options += "<td><a href='FormAgenda?panel=5&acao=excluir&id="+dados.idAgenda+"'><span class='glyphicon glyphicon-trash excluiAgendamento' aria-hidden='true'></span></a></td>";

						options += "</tr>";
						}
					});
					
					$("#tableAgendaN tbody").html(options);
					
					
				},1200)
			}
			
		});
		
	}
	
	var bindEvents = function() {
		
		loadServiceClientesCadastrados(baseUrl + "agenda/service_agenda_clientes_cadastrados");
		loadServiceClientesNaoCadastrados(baseUrl +"agenda/service_agenda_clientes_nao_cadastrados");
	}
	
	
	return {
		
		bindEvents: bindEvents
	}
	
})();

$(document).ready(function() {
	
	LoadServiceAgenda.bindEvents();
})

