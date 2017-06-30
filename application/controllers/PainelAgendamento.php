<?php	
	defined("BASEPATH") OR die ("Não é possível o acesso via url.");
	
	class PainelAgendamento extends CI_Controller {
		
		public function __construct() {
			
			parent::__construct();
			
			$this->load->model("PainelAgendamento_model","panelAg");
		}
		
		public function service_painelAgendamento() {
			
			header("Content-Type: application/json");
			echo $this->panelAg->getJSON_ClienteCadastrado(); //$this->panelAg->getJSON_Clinete_N_Cadastrado();
		}
	}
	
	