<?php
	defined("BASEPATH") OR die("Não é possível o acesso via url.");
	
	class PainelAgendamento_model extends CI_model {
		
		protected $table;
		
		public function __construct($table = "tuAgenda") {
			
			parent::__construct();
			
			$this->table = $table;
		}
		
		public function getJSON_ClienteCadastrado() {
			
			$sql = "SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						$this->table as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional";
			
			$all = $this->db->query($sql)->result();
			
			return json_encode($all, JSON_PRETTY_PRINT);
		}
		
		public function getJSON_Clinete_N_Cadastrado() {
			
			$sql="SELECT
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,ag.cpClienteNaoCadastrado,
						serv.cpNomeServico		
				  FROM

					$this->table as ag 
				  
				  INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				  INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional";
			
			$all = $this->db->query($sql)->result();
			
			return json_encode($all, JSON_PRETTY_PRINT);
		}
	}