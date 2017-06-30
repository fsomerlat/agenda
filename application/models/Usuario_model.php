<?php 
	defined("BASEPATH") OR exit("Não é permitio acesso via url !");


	class Usuario_model extends CI_Model {

		//ESTÁ SENDO USUTILZADO SOMENTE A TABLE - O RESTANTE ESTÁ PELO CI
		protected $table,
				  $idUsuario,
				  $cpNome,
                  $cpSenha,
                  $cpStatus,
                  $cpNivelAcesso;


		public function __construct($table = 'tsUsuario') {

			parent:: __construct();

			$this->table = $table;
			
		}

		public function getJSON() {


			$sql = $this->db->query("SELECT idUsuario,cpNome,cpStatus,cpNivelAcesso FROM $this->table"); 
			$all = $sql->result();

			return json_encode($all, JSON_PRETTY_PRINT); 
		}


		public function verificaLogin($nome, $senha) {

			$sql= "SELECT 
						idUsuario,cpNome,cpSenha,cpStatus,cpNivelAcesso
				   FROM
				   		$this->table
				   WHERE
				   	cpNome = '$nome' AND cpSenha = '$senha' ";

			$query = $this->db->query($sql);
			return $query->row();
		}
		
		public function getAll() {

			//ESCREVENDO SQL

			  $query = $this->db->query("SELECT idUsuario,cpSenha,cpNome,cpStatus,cpNivelAcesso FROM $this->table");
			  return $query->result();
		}	

		public function escapeStr($var) {

			return $this->db->escape($var);
		}

		public function inserir($nome,$senha,$status,$nivelAcesso){

			//UTILIZANDO OS MÉTODO ENCAPSULADOS DO CodeIgniter

			$dados = array(
							'cpNome' => $nome,
							'cpSenha' => $senha,
							'cpStatus' => $status,
							'cpNivelAcesso' => $nivelAcesso
						);

			$this->db->insert('tsUsuario', $dados);
			return $this->db->insert_id();
		 
		}	

		public function excluir($id) {

			$sql = " DELETE FROM 

						$this->table 
					
					WHERE

						idUsuario = $id";

			return $this->db->query($sql);
		}

		public function getId($id) {


			$sql = "SELECT 
						
						idUsuario,cpNome,cpStatus,cpNivelAcesso
					
					FROM 
						$this->table

					WHERE
						idUsuario = $id";

			$execut = $this->db->query($sql);
			return $execut->result();		 
		}

		public function atualizar($id,$nome,$senha,$status,$niveAcesso) {

			//UTILIZANDO OS MÉTODO ENCAPSULADOS DO CodeIgniter

			$dados = array (
							'cpNome' => $nome,
							'cpSenha' => $senha,
							'cpStatus' => $status,
							'cpNivelAcesso' => $niveAcesso
							);

			$this->db->set($dados);
			$this->db->where('idUsuario', $id);
			return $this->db->update('tsUsuario', $dados);
		}

	}