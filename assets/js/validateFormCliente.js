document.getElementById("btnCadastrarCliente").onclick = function() {

	var Errors = [];
	
	var valida = function(campo, msg) {
		
		if(returnId(campo) == '' || returnId(campo) == 0) {
			
			Errors.push(msg);
		}
	} 
	
	var returnId = function(Nids) {
		
		return document.getElementById(Nids).value;
	}
	
	valida("cpNomeCliente","Preencha o campo [ NOME DO CLIENTE ] !");
	valida("cpCep","Preencha o campo [ CEP ] !");
	valida("cpTelefone","Preencha o campo [ TELEFONE ] !");
	valida("cpRua","Preencha o campo [ RUA ] !");
	valida("cpBairro","Preencha o campo [ BAIRRO ] !");
	valida("cpCidade","Preencha o campo [ CIDADE ] !");
	valida("cpEstado","Preencha o campo [ ESTADO ] !");
	
	if(Errors.length > 0) {
		
		var msg = Errors.reduce(function(a,b) {
				
			return a + b + '\n';
			
		},'Por favor, \n\n');
		
		window.alert(msg);
	}
}