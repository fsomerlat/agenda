document.getElementById('btnLogin').onclick = function() {

	var Errors = [];

	var valida = function (campo, msg) {

		(returnId(campo) == '') ? Errors.push(msg) : false;
	}	

	var returnId = function(Nids) {

		return document.getElementById(Nids).value;
	}

	valida("cpNome"," Preencha  o campo [ NOME ] !");
	valida("cpSenha" , "Preencha o campo [ SENHA ] !");

	if(Errors.length > 0) {

		var msg = Errors.reduce(function(a, b) {

			return a + b + '\n';

		},'Por favor,\n\n');

		window.alert(msg); return false;
	} 

}