<?php
	defined("BASEPATH")OR exit ("O acesso via url não é permitido !");
	
	class M_agenda extends  CI_Model  {
		
		protected $table;
		private $idAgenda;
		
		public function __construct($table = "Agenda",$idAgenda="idAgenda") {
			
			parent::__construct();
			
			$this->table = $table;
			$this->idAgenda = $idAgenda;
		}
		
		public function agendar($fkCliente,$profissional,$ClienteNaoCadastrado,$fkServico,$data,$hora,$obs) {
			
			$dados = array (

							'teCliente_idCliente' => $fkCliente,
					        'teProfissional_idProfissional' => $profissional,	
					        'cpClienteNaoCadastrado' => $ClienteNaoCadastrado,
							'teServico_idServico' => $fkServico,
							'cpDataAgendamento' => $data,
							'cpHoraAgendamento' => $hora,
							'cpObservacaoAgenda' => $obs
							);				
		
			$this->db->set($dados);
			return $this->db->insert($this->table,$dados);
		}
		
		public function getJSON() {
			
			$sql= "SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						$this->table as ag
						
					INNER JOIN Cliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN Servico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN Profissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 ";
			
			$all = $this->db->query($sql)->result();
			return json_encode($all, JSON_PRETTY_PRINT);
		}
		
		public function getJSON_CLIENTE_NAO_CADASTRADO() {
			
			$sql="SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				$this->table as ag 
				
				INNER JOIN Servico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN Profissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			";
			
			$all = $this->db->query($sql)->result();
			return json_encode($all, JSON_PRETTY_PRINT);
		}
		
		public function verificaAgendamento($data,$hora,$fkProfissonal) {
			
			
			$sql="SELECT 
						cpDataAgendamento,cpHoraAgendamento,teProfissional_idProfissional
				  FROM	
				  
					$this->table 
				
				  WHERE 
					
					  cpDataAgendamento = '$data' AND cpHoraAgendamento = '$hora' AND teProfissional_idProfissional = $fkProfissonal ";
			
			if(empty($this->db->query($sql)->result())):
				
				return  FALSE;
			
			else:
				
				return TRUE;
			
			endif;
				   
		}
		
		public function getInfoAgenda($tipoCliente,$id) {
			
			$sql_CliCadastrado="SELECT 
						
									ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,serv.cpValorServico,cli.cpSobreNomeCliente,prof.cpEspecilidadeProfissional,
									serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
								
								  FROM
									 $this->table as ag
								 
									 INNER JOIN Servico as serv ON serv.idServico = ag.teServico_idServico
									 INNER JOIN Cliente as cli ON cli.idCliente = ag.teCliente_idCliente 
									 INNER JOIN Profissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
								
								WHERE 
									ag.idAgenda = $id";
			
			$sql_CliNCadastrado="SELECT
									
									ag.idAgenda,ag.cpClienteNaoCadastrado,prof.cpNomeProfissional,serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpObservacaoAgenda,
									prof.cpEspecilidadeProfissional

								FROM
									$this->table as ag 
									
									INNER JOIN Servico as serv ON serv.idServico = ag.teServico_idServico
									INNER JOIN Profissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
							
								WHERE
									ag.idAgenda = $id ";		
			
			if($tipoCliente == "CliCadastrado"):
			
				return $this->db->query($sql_CliCadastrado)->row();
			
			elseif($tipoCliente == "Ncadastrado"):
			
				return $this->db->query($sql_CliNCadastrado)->row();
			
			endif;
		}
		
		
		public function excluiAgendamento($id) {
			
			$sql="DELETE FROM $this->table WHERE $this->idAgenda = $id";
			return $this->db->query($sql);
		}
		
		
	
}
	