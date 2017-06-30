<?php
	defined("BASEPATH") OR exit ("Acesso via url não é permitido !");

	class Servico_model extends CI_Model {

		protected $table;

		public function __construct($table = "teServico") {	

			parent::__construct();
			$this->table = $table;
		}


		public function inserir($servico,$valor) {

			$dados =  array(
							'cpNomeServico' => $servico,
							'cpValorServico' => $valor 
					      );

			$this->db->set($dados);
			return $this->db->insert('teServico',$dados);

		}

		public function getJSON() {

			$sql = "SELECT 

						idServico,cpNomeServico,cpValorServico
					
					FROm 
						$this->table";

			$all = $this->db->query($sql)->result();
			return json_encode($all, JSON_PRETTY_PRINT);
		}

		public function excluir($id) {

			$sql="DELETE FROM 
						$this->table
				  WHERE 
				  		idServico = $id";

		    return $this->db->query($sql);
		}

		public function getInfoServ($id) {

			$sql="SELECT 
					idServico,cpNomeServico,cpValorServico
				 FROM
				 	$this->table
				 WHERE
				 	idServico = $id";

			return $this->db->query($sql)->row();
		}

		public function atualiza($id, $servico, $valor) {

			$dados =  array(
								'cpNomeServico' => $servico,
								'cpValorServico' => $valor
							);

			$this->db->set($dados);
			$this->db->where('idServico', $id);
			return $this->db->update($this->table, $dados);
		}
	}