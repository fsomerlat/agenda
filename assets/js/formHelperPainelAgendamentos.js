var FormHelperPainelAgendamentos = (function() {
	
	var createDatePicker = function() {
		
		$("#cpDataInicioAgendamento").datepicker({
			
			  dayNamesMin: [ "Dom", "Seg", "Ter", "Quar", "Quin", "Sex", "Sab" ],
			  duration: "slow",
			  monthNamesShort: [ "Jan", "Fev", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setem", "Out", "Novem", "Dezem" ],
		      changeMonth: true,
		      changeYear: true, 
			  dateFormat:"dd/mm/yy",
			  autoSize: true,
		});
		
		$("#cpDataFinalAgendamento").datepicker({
			
		
			  dayNamesMin: [ "Dom", "Seg", "Ter", "Quar", "Quin", "Sex", "Sab" ],
			  duration: "slow",
			  monthNamesShort: [ "Jan", "Fev", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setem", "Out", "Novem", "Dezem" ],
		      changeMonth: true,
		      changeYear: true, 
			  dateFormat:"dd/mm/yy",
			  autoSize: true,			
		});
	}
	
	var bindEvents = function() {
		
		createDatePicker();
	}

	return {
		
		bindEvents: bindEvents
		
	}
	
})();