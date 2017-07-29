var Utils =  (function() {

	var getBaseUrl = function() {
		
		return $('.baseUrl').val();
	}
	
	var getItensUrl = function() {

		var url = window.location.search.replace("?", ""),
			itens = url.split("&");	

		var getItens = {

				'a' : itens[0],
		}

		return getItens.a.substring(6,7);
	}

	var newDataAtual = function(objDt) {

		var dia	= (objDt.getDate() < 10)  ? '0' + objDt.getDate() : objDt.getDate(),
			mes = (objDt.getMonth() < 10) ?  objDt.getMonth() + 1 :  objDt.getMonth() + 1,
			ano = objDt.getFullYear();

		return dia +' / '+mes+' / '+ano;
	}

	var getData = function () {

		return new Date();
	}

	var expandePainel = function(idPainel) {

		$("#panel_" + idPainel).collapse();
	}

	var bindEvents = function() {

		$(".dataAtual").html(newDataAtual(getData()));
		expandePainel(getItensUrl());
	}

	return {

		bindEvents: bindEvents,
		getBaseUrl: getBaseUrl
	}

})();