document.getElementById('btnCadastraUser').onclick = function() {

	var Errors = [];

	var valida = function (campo, msg) {

		(returnId(campo) == '' || returnId(campo) == 0) ? Errors.push(msg) : false;
	}

	var returnId = function(Nids) {

		return document.getElementById(Nids).value;
	}

	valida('cpNome','Preencha o campo [ NOME ] !');
	valida('cpSenha','Preencha o campo [ SENHA ] !');
	valida('cpStatus','Selecione o campo [ STATUS ] !');
	valida('cpNivelAcesso','Selecione o campo [ NÍVEL DE ACESSO ] !');


	if(Errors.length > 0) {

		var msg = Errors.reduce(function(a, b) {

			return a + b + '\n';

		},'Por favor,\n\n');

		window.alert(msg); return false;
	}

}