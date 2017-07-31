var FormHelperUsuario = (function() { // EM TESTE

	var baseUrl = $('.baseUrl').val();
	
	var vizualizarSenha =  function() {
		
		$('.vizualizarSenha').click(function() {
			
			$('.isSenha').attr('type','text');
			
			setTimeout(function() {
				$('.isSenha').attr('type','password');
			},1200);
		})
	}
	
	var verificaUsuario = function(url) {
		
		$('input[name=cpNome]').bind('focusout', function() {
			
			var idCampo =  $(this).attr('id');
			
			$.post(url, {nomeUsuario: this.value}, function(retorno) {
				
				if(retorno == true) { //SE EXISTIR USUÁRIO COM ESSE NOME
					
					if(this.value != '') {
						
						Utils.caixaDialog(idCampo , 'USUÁRIO JÁ CADASTRADO.INFORME UM NOME DIFERENTE !')	
					}
				}
			})
		})
	}
	
	var bindEvents = function() {
		
		verificaUsuario(baseUrl + 'usuario/verificaUsuario');
		vizualizarSenha();
		
		$(document).on('click','.excluiUser', function(){

			return confirm('Deseja excluir esse regsitro ?');
		});
	}
	
	return {

		bindEvents: bindEvents
	}

})();

$(document).ready(function() {
	
	FormHelperUsuario.bindEvents();
})