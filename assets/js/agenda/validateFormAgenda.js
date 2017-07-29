document.getElementById("btnAgenda").onclick = function() {
	
	var Errors = [];
	

	var valida =  function(campo, msg) {
		
		(returnId(campo) == '' || returnId(campo) == 0) ? Errors.push(msg) : "";	
	}
	
	var validaPaiFilho = function(campo) {
		
		if(returnId(campo) == "Cadastrado") {
			
			valida("teCliente_idCliente","Selecione o campo [ CLIENTE ] !");
			valida("teServico_idServico","Selecione o campo [ SERVIÇO ] !");
			valida("cpDataAgendamento","Preencha o campo [ DATA ] !");
			valida("cpHoraAgendamento","Preencha o campo [ HORA ] !");
			
		}else if(returnId(campo) == "Nao cadastrado") {
			
			valida("teServico_idServico","Selecione o campo [ SERVIÇO ] !");
			valida("cpDataAgendamento","Preencha o campo [ DATA ]");
			valida("cpHoraAgendamento"," Preencha o campo [ HORA ] !");
		}
	}
	
	var returnId = function(Nids) {
		
		return document.getElementById(Nids).value;
	}
	
	validaPaiFilho("tipoCliente");
	valida("tipoCliente","Selecione um [ TIPO DE CLIENTE ] !");
	
	if(Errors.length > 0) {
		
		var msg = Errors.reduce(function(a,b) {
			
			return a + b + '\n';
			
		},'Por favor, \n\n');
		
		window.alert(msg); return false;
	}
}