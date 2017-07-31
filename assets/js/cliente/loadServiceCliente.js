var LoadServiceCliente = (function() {
	
	var baseUrl = Utils.getBaseUrl();
	
	var loadCliente = function(url) {
	
		var options = '';
		
		$.ajax({
			
			url: url,
			cache: false,
			dataType:'json',
			beforeSend: function() {
				
				$('.laodTableClientes').html('<i class="fa fa-spinner fa-pulse fa-2x fa-fw"></i>carregando lista de clientes...');
			},
			error: function() {
				
				$('.laodTableClientes').html('Houve algum erro no retorno dos dados !');
			},
			success: function(retorno) {
				
				setTimeout(function(){
					
					retorno.map(function(dados){
						
						options += '<tr>';
						options += '<td>' + dados.idCliente + '</td>'
						options += '<td>' + dados.cpNomeCliente + '</td>';
						options += '<td>' + dados.cpTelefone + '</td>';
						options += '<td>' + dados.cpEmail + '</td>';
						options += '<td>' + dados.cpRgCliente + '</td>';
						options += '<td>' + dados.cpEstado + '</td>';
						options += '<td><a href="'+baseUrl+"cliente?panel=7&acaoED=editar&id="+dados.idCliente+'"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a></td>';
						options += '<td><a href="'+baseUrl+"cliente?panel=7&acaoEX=excluir&id="+dados.idCliente+'"><span class="glyphicon glyphicon-trash excluiCliente" aria-hidden="true"></span></a></td>';
						options += '</tr>';
					});
					
					$('#tableCliente tbody').html(options);
					$('.laodTableClientes').html('Lista de clientes');
					
				},1200);
			}
		});
	}
	
	var bindEvents = function() {
		
		loadCliente(baseUrl + "cliente/service_cliente");
	}
	
	return  {
		
		bindEvents: bindEvents	
	}
	
})();

$(document).ready(function() {
	
	LoadServiceCliente.bindEvents();	
})
