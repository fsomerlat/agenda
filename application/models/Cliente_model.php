<?php
 defined("BASEPATH") OR exit("O acesso via url não é permitido !");
 
 class Cliente_model extends CI_Model {
 	
 	protected $table;

 	private $idCliente;
 	
 	public function __construct($table = "teCliente",$idCliente = "idCliente") {
 		
 		parent::__construct();
 		
 		$this->table = $table;
 		$this->idCliente = $idCliente;
 	}
 	
 	public function cadastraCliente($nome,$sobreNm,$rg,$orgaoEX,$tel,$email,$cep,$rua,$bairro,$cidade,$estado,$obs) {
 		
 		$dados = array(
 						'cpNomeCliente' => $nome,
 						'cpSobreNomeCliente' => $sobreNm,
 						'cpRgCliente' => $rg,
 						'cpOrgaoExpedidorRgCliente' => $orgaoEX,
 						'cpTelefone' => $tel,
 						'cpEmail' => $email,
 						'cpCep' => $cep,
 				        'cpRua' => $rua,
 						'cpBairro' => $bairro,
 						'cpCidade' => $cidade,
 						'cpEstado' => $estado,
 						'cpObservacao' => $obs
 
 						);
 		
 		$this->db->set($dados);
 		return $this->db->insert($this->table,$dados);
 	}
 	
 	public function loadJSON() {
 		
 		$sql="SELECT
 				idCliente,cpNomeCliente,cpRgCliente,cpOrgaoExpedidorRgCliente,cpTelefone,
 				cpEmail,cpCep,cpRua,cpBairro,cpCidade,cpEstado,cpObservacao,cpSobreNomeCliente
 			  FROM
 				$this->table
 			 ORDER BY
 				cpNomeCliente ASC";
 		
 		$all = $this->db->query($sql)->result();
 		return json_encode($all, JSON_PRETTY_PRINT);
 	}
 	
 	public function getInfoCli($id) {
 			
 		$sql="SELECT 
 				cpNomeCliente,cpSobreNomeCliente,cpRgCliente,cpOrgaoExpedidorRgCliente,cpTelefone,cpEmail,
 				cpCep,cpRua,cpBairro,cpCidade,cpEstado,cpObservacao
 			  FROM
 				$this->table
 			  WHERE
 				 $this->idCliente = $id";
 			
 		return $this->db->query($sql)->row();
 	}
 	
 	public function atualizaCliente($id,$nm,$sobreNm,$rg,$orgaoEX,$tel,$mail,$cep,$rua,$bairro,$cidade,$estado,$obs) {
 		
 		
 		$dados = array (	
 						  'cpNomeCliente' => $nm,
 						  'cpSobreNomeCliente' => $sobreNm,
 						  'cpRgCliente' => $rg,
 				          'cpOrgaoExpedidorRgCliente' => $orgaoEX,
 						  'cpTelefone' => $tel,
 						  'cpEmail' => $mail,
 						  'cpCep' => $cep,
 						  'cpRua' => $rua,
 						  'cpBairro' => $bairro,
 						  'cpCidade' => $cidade,
 						  'cpEstado' => $estado,
 						  'cpObservacao' => $obs
 						);
 		
 		$this->db->set($dados);
 		$this->db->where($this->idCliente, $id);
		return $this->db->update($this->table, $dados);
 	}
 	
 	
 	public function detelaCliente($id) {
 	
 		
 		$sql= "DELETE FROM $this->table WHERE $this->idCliente = $id";
 		return $this->db->query($sql);
	
 	}
 	
 	
 	public function verificaDuplicidade($nome,$sobreNm,$rg) {
	
		
 		$sql = "SELECT 
 					cpNomeCliente,cpSobreNomeCliente,cpRgCliente
 				FROM
 					$this->table
 				 WHERE 
 				  	cpNomeCliente = '$nome' AND cpSobreNomeCliente = '$sobreNm' OR cpRgCliente = '$rg' "; // STRING DEVE CONTER '' 
 		
		if(!empty($this->db->query($sql)->result())):
				
			return TRUE;
		
		else:
		
			return FALSE;
		
		endif;
 	
 	}
 	
 	
 	
 }