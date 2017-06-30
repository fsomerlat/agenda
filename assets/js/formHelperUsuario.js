var FormHelperUsuario = (function() { // EM TESTE


	var bindEvents = function() {

		$(document).on("click",".excluiUser", function(){

			return confirm('Deseja excluir esse regsitro ?');
		});
	}

	return {

		bindEvents: bindEvents
	}

})();