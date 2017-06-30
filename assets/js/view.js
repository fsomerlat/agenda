$(document).ready(function() {

	Utils.bindEvents();
	FormHelperUsuario.bindEvents();
	FormHelperServico.bindEvents();
	FormHelperAgenda.bindEvents();
	FormHelperClient.bindEvents();
	FormHelperProfissional.bindEvents();
	FormHelperPainelAgendamentos.bindEvents();
});

$(document).ready(function(){
		
	try {

		LoadServiceUsers.bindEvents();
		
	}catch(e) {

		console.log(e);
	}

	try {

		LoadServiceServico.bindEvents();
	
	}catch(e) {

		console.log(e);
	}
	
	try {
		
		LoadServiceCorreios.bindEvents();
	
	}catch(e) {
		
		console.log(e);
		
	}
	
	try {
		
		LoadServiceCliente.bindEvents();
	
	}catch(e) {
		
		console.log(e)
	}
	
	try {
		
		LoadServiceAgenda.bindEvents();
	
	
	}catch(e) {
		
		console.log(e);
	}
	
	try {
		
		loadServicePainelAgendamento.bindEvents();
	
	}catch(e) {
		
		console.log(e);
	}
	
	try {
		
		LoadServiceProfissional.bindEvents();
	
	}catch(e){
		
		console.log(e);
	}	
	
});