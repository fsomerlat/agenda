
var FormHelperAgenda = (function(){
		
	var baseUrl = Utils.getBaseUrl();
	
	var ocultaClass = function(className) {
		
		$("." + className).hide();
	}
	
	var exibeClass = function(className) {
		
		$("." + className).show();
	}
	
	var datePicker = function() {
		
		$("#cpDataAgendamento").datepicker({
				
			  dayNamesMin: [ "Dom", "Seg", "Ter", "Quar", "Quin", "Sex", "Sab" ],
			  duration: "slow",
			  monthNamesShort: [ "Jan", "Fev", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setem", "Out", "Novem", "Dezem" ],
		      changeMonth: true,
		      changeYear: true, 
			  dateFormat:"dd/mm/yy",
			  minDate: new Date(),
			  autoSize: true,
		});
	}
	
	var preencheComboServico = function(url) {
		
		var options = "";
		$.ajax({
			
			url: url,
			cache: false,
			dataType: "json",
			beforeSend: function() {
				
				$("#teServico_idServicoAgenda").html("<option value=''>carregando...</option>");
			},
			error: function() {
				
				$(".tableAgenda").html("Houve um erro com o preenchimento do combox [ SERVIÇO ] !");
			},
			success: function(retorno) {
				
				setTimeout(function() {
					
				options += "<option value=''>Selecione</option>";
				
				retorno.map(function(dados){
						
						options += "<option value ='"+dados.idServico+"'>"+dados.cpNomeServico+"</option>";1
					});
					
					$("#teServico_idServicoAgenda").html(options);
					
				},3000);
			}
		});
	}
	
	var preencheComboProfissional = function(url) {
		
		var options = "";
		
		$.ajax({
			
			url: url,
			cache: false,
			dataType: "json",
			beforeSend: function() {
				
				$(".carregaProfissional").html("<option value=''>carregando...</optioin>");
			},
			error: function() {
				
				$(".tableAgenda").html("Houve um error com o retorno dos dados ao carregar combox [ PROFISSIONAL ] !");
			},
			success: function(retorno) {
				
				setTimeout(function(){
					
					options += "<option value=''>Selecione</option>";
					
					retorno.map(function(dados){
						
						options += "<option value='" +dados.idProfissional+"'>" +dados.cpNomeProfissional+" "+dados.cpSobreNomeProfissional+"</option>";
					});
					
					$(".carregaProfissional").html(options);
					
				},3000);
			}
		});
	}
	
	var preencheComboCliente = function(url) {
		
		var options = "";
		
		$.ajax({
				
			url: url,
			cache: false,
			dataType:"json",
			error: function() {
				
				$(".tableAngenda").html("Houve um erro ao carregar dados para o combox [ CLIENTE ] !");
			},
			success: function(retorno) {
			
				options += "<option value=''>Selecione</option>";
				
				retorno.map(function(dados){
					
					options += "<option value='"+dados.idCliente+"'>"+dados.cpNomeCliente+" "+dados.cpSobreNomeCliente+"</option>";
				});
				
				$(".carregaClientes").html(options);					
			}
		});
	}
	
	var ajusteBtnAgenda = function(value) { // UTILIZADO PARA REAJUSTAR OS BOTÕES DOS CAMPOS QUANDO NECESSÁRIO

		var classCol = ['col-md-2','col-md-3','col-md-4','col-md-5','col-md-6','col-md-7','col-md-8','col-md-9','col-md-10','col-md-11','col-md-12'];

		for(var i=0; i < classCol.length; i++) {

			if(value == "Cadastrado") {

				$(".btnAgenda").removeClass(classCol[i]).addClass("col-md-6");
			
			}else if(value == "Nao cadastrado") {

				$(".btnAgenda").removeClass(classCol[i]).addClass("col-md-6");
			}
		}
	}
	
	var criaComboxCliente = function() {
		
		return "<div class='campoCliente'><label for='Cliente'>Cliente cadastrado</label><select name='teCliente_idCliente' id='teCliente_idClienteAgenda' class='form-control carregaClientes'></select></div>";
	}
	
	var criaInputCliente = function() {
		
		return "<div class='campoCliente'><label for='Cliente'>Cliente não cadastrado</label><input type='text' name='cpClienteNaoCadastrado' id='cpClienteNaoCadastrado' class='form-control'/></div>";
	}
	
	var campoCliente = function(value) { 
		
		if(value == "Cadastrado") {
	
			preencheComboCliente(baseUrl + "cliente/service_cliente");
			$(".cliente").html(criaComboxCliente());
			
		}else if(value == "Nao cadastrado") {
			
			$(".cliente").html(criaInputCliente());
		
		} else {
			
			ocultaClass("campoCliente");		
		}
	}
	
	var alteraExibicao = function(value) {
		
		
		if(value == "Cadastrado") {
			
			ocultaClass("notClient");
			exibeClass('isClient');
			exibeClass('isGlobal');

		} else if(value == "Nao cadastrado") {
			
			ocultaClass("isClient");
			exibeClass('notCliente');
			exibeClass('isGlobal');
		} else {
			
			ocultaClass("notClient");
			ocultaClass("isClient");
			ocultaClass("isGlobal");	
		}		
	}
	
	var exibicaoCamposEditados = function() {
		
		var edicaoTipoCliente = $("input[name=edicaoTipoCliente]").val();
		
		if(edicaoTipoCliente == "CliCadastrado") {
			
			preencheComboCliente(baseUrl + "cliente/service_cliente");
			
			exibeClass('isClient');
			exibeClass('isGlobal');
			ocultaClass('notClient');
			
			$(".cliente").html(criaComboxCliente());
			
		}else if(edicaoTipoCliente == 'Ncadastrado') {
			
			exibeClass('notClient');
			exibeClass('isGlobal');
			ocultaClass('isClient');
			
			$(".cliente").html(criaInputCliente());
			
		} else {
			
			ocultaClass("notClient");
			ocultaClass("isClient");
			ocultaClass("isGlobal");
		}
	}
	
	var bindEvents = function() {
		
		datePicker();
		exibicaoCamposEditados();
		
		preencheComboServico(baseUrl + "servico/service_servico");
		preencheComboProfissional(baseUrl + "profissional/service_profissional");
		
		$("select[name=tipo_cliente]").change(function(){
				
			ajusteBtnAgenda(this.value);
			alteraExibicao(this.value);
			campoCliente(this.value);
			
		});
		
		$(document).on("click",".excluiAgendamento",function(){
			
			return confirm("Deseja excluir esse registro ?");
		});
	}
	
	return {
		
		bindEvents: bindEvents
	}
	
})();

$(document).ready(function() {
	
	FormHelperAgenda.bindEvents();
})

