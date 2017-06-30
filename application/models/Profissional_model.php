<?php date_default_timezone_set("America/Sao_Paulo");
	defined("BASEPATH")OR exit("O acesso via url não é permitido !");
	
	class Profissional_model extends CI_Model {
		
		protected $table;
		private $idProfissional;
		
		public function __construct($table = "teProfissional",$idProfissional = "idProfissional"){
				
			parent::__construct();
			
			$this->table = $table;
			$this->idProfissional = $idProfissional;
		}
		
		public function cadastraProfissional($nm,$sobreNm,$espec,$rg,$orgaoEX,$cep,$rua,$bairro,$cidade,$estado,$tel,$email,$obs) {
		
			$dados = array(
							'cpNomeProfissional' => $nm,
							'cpSobreNomeProfissional'=> $sobreNm,
							'cpEspecilidadeProfissional' => $espec,
							'cpRgProfissional' => $rg,
					        'cpOrgaoExpedidorRgProfissional' => $orgaoEX,
							'cpCepProfissional' => $cep,
							'cpRuaProfissional' => $rua,
					        'cpBairroProfissional' => $bairro,
						    'cpCidadeProfissional' => $cidade,
							'cpEstadoProfissional' => $estado,
							'cpTelefoneProfissional' => $tel,
							'cpEmailProfissional' => $email,
					        'cpDataEntrada' => date("d/m/Y H:i:s"),
					        'cpObservacaoProfissional' => $obs			
						  );
			
			$this->db->set($dados);
			return $this->db->insert($this->table,$dados);
			
		}
		
		public function getJSON() {
			
			$sql="SELECT
					idProfissional,cpNomeProfissional,cpCepProfissional,cpRuaProfissional,cpBairroProfissional,
					cpCidadeProfissional,cpEstadoProfissional,cpTelefoneProfissional,cpEspecilidadeProfissional,
					cpEmailProfissional,cpDataEntrada,cpDataSaida,cpObservacaoProfissional,cpSobreNomeProfissional
				  FROM
					$this->table
				  ORDER BY cpNomeProfissional ASC";
			
			$all = $this->db->query($sql)->result();
			return json_encode($all, JSON_PRETTY_PRINT);
		}
		
		public function getInfoProfissional($id) {
			
			$sql="SELECT
					idProfissional,cpNomeProfissional,cpSobreNomeProfissional,cpCepProfissional,cpEspecilidadeProfissional,cpRgProfissional,
					cpRuaProfissional,cpOrgaoExpedidorRgProfissional,cpBairroProfissional,cpCidadeProfissional,cpEstadoProfissional,cpTelefoneProfissional,
					cpEmailProfissional,cpDataEntrada,cpDataSaida,cpObservacaoProfissional
				   FROM
					$this->table
				   WHERE
				   	 idProfissional = $id";
			
			return $this->db->query($sql)->row();
		}
		
		public function excluiProfissional($id) {
			
			$this->db->where($this->idProfissional, $id);
			return $this->db->delete($this->table);
		}
		
		public function atualizaProfissional($id,$nm,$sobreNm,$espec,$rg,$orgaoEX,$cep,$rua,$bairro,$cidade,$estado,$tel,$email,$obs) {
			
			$dados = array(
					
					
					'cpNomeProfissional' => $nm,
					'cpSobreNomeProfissional'=> $sobreNm,
					'cpEspecilidadeProfissional' => $espec,
					'cpRgProfissional' => $rg,
					'cpOrgaoExpedidorRgProfissional' => $orgaoEX,
					'cpCepProfissional' => $cep,
					'cpRuaProfissional' => $rua,
					'cpBairroProfissional' => $bairro,
					'cpCidadeProfissional' => $cidade,
					'cpEstadoProfissional' => $estado,
					'cpTelefoneProfissional' => $tel,
					'cpEmailProfissional' => $email,
					'cpDataAtualizacao' => date("d/m/Y H:i:s"),
					'cpObservacaoProfissional' => $obs
			);
			
			$this->db->set($dados);
			$this->db->where($this->idProfissional, $id);
			return $this->db->update($this->table, $dados);
		}
		
		public function verificaDuplicidade ($nm,$sobreNm,$rg){
			
			$sql="SELECT 
					cpNomeProfissional,cpSobreNomeProfissional,cpRgProfissional
				  FROM	
					$this->table
				  WHERE
				  	cpNomeProfissional = '$nm' AND cpSobreNomeProfissional = '$sobreNm' OR cpRgProfissional = '$rg' ";
			
			if(!empty($this->db->query($sql)->result())):
			
				return TRUE;
			
			else:
				
				return FALSE;
			
			endif;
			
		}
	}
	
	