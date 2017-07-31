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
	
	var tooltip = function() {
		
		$(function() {
		    $(document).tooltip({
		      position: {
		        my: "center bottom-20",
		        at: "center top",
		        using: function( position, feedback ) {
		          $( this ).css( position );
		          $( "<div>" )
		            .addClass( "arrow" )
		            .addClass( feedback.vertical )
		            .addClass( feedback.horizontal )
		            .appendTo( this );
		        }
		      }
		    });
		});		
	}
	var caixaDialog = function(idFocus, mensagem) {
		
	  $(function(ev) {
	    $("#dialog-message").dialog({
		  modal: true,
		  hide: { effect: "shake", duration: 400},
		    buttons: {

		     Ok: function() {         
		    		
		    	$(ev.target).closest('input,select').find('#' + idFocus).focus();
	          	$(this).dialog( "close" ); 
		    
		     }
		  	
		    }
		 });	  
	  });

	  $('.mensagem').html(mensagem);
	}

	var verificaRG = function(url,idCampoRg) {
		
		$('#' + idCampoRg).bind('keyup', function() {
			
			var idCampo = $(this).attr('id'),
				valorCampo = $(this).mask(''),
				tamanhoCampoRg = valorCampo.length == 8;
			
			if(tamanhoCampoRg) {
				
				$.post(url, {rg: valorCampo}, function(retorno) {
					
					if(retorno == true) {

						Utils.caixaDialog('','O RG INFORMADO JÁ EXISTE EM NOSSA BASE DE DADOS !');
					}
				})				
			}			
		})
	}
	
	var expandePainel = function(idPainel) {

		$("#panel_" + idPainel).collapse();
	}

	var bindEvents = function() {

		$(".dataAtual").html(newDataAtual(getData()));
		tooltip();
	}

	return {

		bindEvents: bindEvents,
		caixaDialog: caixaDialog,
		getBaseUrl: getBaseUrl,
		verificaRG: verificaRG
	}

})();