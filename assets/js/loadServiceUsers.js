var LoadServiceUsers = (function() {

	var loadService = function(url) {

		var option = "";

		$.ajax({

			url: url,
			cache: false,
			dataType: "json",
			beforeSend: function() {

				$(".titleTableUsers").html("caregando lista de usuários...");
			},

			error: function() {

				$(".titleTableUsers").html("Houve um erro com o retorno dos dados !");
			},

			success: function (retorno) {
					
				if(retorno[0].erro) {

					$(".titleTableUsers").html(retorno[0].erro);
				
				} else {

					setTimeout(function() {

						retorno.map(function(dados) {

							(dados.cpStatus == "A") ? status = "Ativo" : status = "Bloqueado";

							option += "<tr>";
							option += "<td>" + dados.idUsuario + "</td>";
							option += "<td>" + dados.cpNome + "</td>";
							option += "<td>" + status + "</td>";

							switch(dados.cpNivelAcesso) {

								case "A" :  option += "<td>Administrador</td>"; break;
								case "C" :  option += "<td>Comum</td>"; break;
								case "S" :  option += "<td>Super</td>"; break;
 							}
				
							option += "<td><a href='http://localhost/CodIgniter/usuario/FormUsers?panel=1&acao=editar&id="+dados.idUsuario+"'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a></td>";
							option += "<td><a href='http://localhost/CodIgniter/usuario/FormUsers?acao=excluir&id="+dados.idUsuario+"' class='excluiUser'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td>";
							option += "</tr>";
						});

						$("#tableListUsers tbody").html(option);
						$(".titleTableUsers").html("Lista de usuários");

					},1200);
				}
			}
		});
	}	

	var bindEvents = function () {

		loadService('http://localhost/CodIgniter/usuario/service_usuario');
	}

	return  {

		bindEvents: bindEvents
	}

})();