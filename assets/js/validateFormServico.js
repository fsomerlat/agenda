document.getElementById("btnCadastrarServico").onclick =  function (){

	var Errors = new Array();

	var valida = function(campo, msg) {

		(returnId(campo) == '' || returnId(campo) == 0) ? Errors.push(msg) : false;
	}

	var returnId = function (Nids) {

		return document.getElementById(Nids).value;
	}

	valida("cpNomeServico", "Preencha o campo [ NOME DO SERVIÇO ] !");
	valida("cpValorServico", "Preencha o campo [  VALOR DO SERVIÇO ] !");

	if(Errors.length > 0 ) {

		var msg = Errors.reduce(function(a, b) {

			return a + b + '\n';

		},'Por favor, \n\n');

		window.alert(msg); return false;
	}
}