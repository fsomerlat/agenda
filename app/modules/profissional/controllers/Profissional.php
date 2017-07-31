<?php	

	defined("BASEPATH") OR exit("O acesso via url não é permitido !");
	
	class Profissional extends MX_Controller {
		
		public function __construct() {
			
			parent::__construct();
			
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model("M_profissional","m_prof");
		}
		
		public function index() {
			
		    $this->load->helper('include');
		    $this->load->view('header');
			$this->load->view('profissional', array( self::FormAcaoProf() , 'js' => carregaJS('profissional')));
			$this->load->view('footer');
		}
		
		public function service_profissional() {
			
			header("Content-Type: application/json");
			print_r($this->m_prof->getJSON());
		}	
		
		public function FormAcaoProf () {
			
			$valor_campo = $this->input->post();
			
			$this->form_validation->set_rules("cpNomeProfissonal","[ NOME DO PROFISSIONAL ]","required");
			$this->form_validation->set_rules("cpSobreNomeProfissional","[ SOBRE NOME ]","required");
			$this->form_validation->set_rules("cpEspecilidadeProfissional","[ ESPECILIDADE ]", "required");
			$this->form_validation->set_rules("cpRgProfissional","[ RG ]","required");
			$this->form_validation->set_rules("cpOrgaoExpedidorRgProfissional","[ ORGÃO EXPEDIDOR ]","required");
			$this->form_validation->set_rules("cpCepProfissional","[ CEP ]","required");
			$this->form_validation->set_rules("cpTelefoneProfissional","[ TELEFONE ]","required");
			$this->form_validation->set_rules("cpRuaProfissional","[ RUA ]","required");
			$this->form_validation->set_rules("cpBairroProfissional","[ BAIRRO ]","required");
			$this->form_validation->set_rules("cpCidadeProfissional","[ CIDADE ]","required");
			$this->form_validation->set_rules("cpEstadoProfissional","[ ESTADO ]","required");
			
			if($this->form_validation->run() ==  FALSE): // INICIO CADASTRA E ATUALIZA
				
				if(isset($valor_campo["acao"])): 
						
					set_msg("<div class='alert alert-danger'>".validation_errors()."</div>");
			
				endif;
			
			else:
				
				$rg = $valor_campo["cpRgProfissional"];
				$nome = $valor_campo["cpNomeProfissonal"];
				$sobreNm = $valor_campo["cpSobreNomeProfissional"];
				
				if($valor_campo["acao"] == "cadastrar"): 
								
				    if($this->m_prof->verificaDuplicidade($nome,$sobreNm,$rg) == TRUE):
					
						set_msg("<div class='alert alert-warning'>Desculpe...O RG [ $rg ] e / ou nome [ $nome $sobreNm ] já são cadastrados !</div>");
					
					else:
					
					$this->m_prof->cadastraProfissional( 
														addslashes($valor_campo["cpNomeProfissonal"]),addslashes($valor_campo["cpSobreNomeProfissional"]),
														addslashes($valor_campo["cpEspecilidadeProfissional"]),addslashes($valor_campo["cpRgProfissional"]),
														addslashes($valor_campo["cpOrgaoExpedidorRgProfissional"]),addslashes($valor_campo["cpCepProfissional"]),
														addslashes($valor_campo["cpRuaProfissional"]),addslashes($valor_campo["cpBairroProfissional"]),
														addslashes($valor_campo["cpCidadeProfissional"]),addslashes($valor_campo["cpEstadoProfissional"]),
														addslashes($valor_campo["cpTelefoneProfissional"]),addslashes($valor_campo["cpEmailProfissional"]),
														addslashes($valor_campo["cpObservacaoProfissional"])
														);
			
						redirect("profissional?panel=9",set_msg("<div class='alert alert-success'>Registro inserido com sucesso !</div>"));
					
					endif;			
				
				endif;
				
				if($valor_campo["acao"] == "atualizar"):	
						
					
				    if($this->m_prof->verificaDuplicidade($nome,$sobreNm,$rg) ==  TRUE):
							
						set_msg("<div class='alert alert-warning'>Desculpe...O RG [ $rg ] e / ou nome [ $nome $sobreNm ] já são cadastrados !</div>");
				
					else:
				
					   $this->m_prof->atualizaProfissional(
					       
														addslashes($valor_campo["id"]),addslashes($valor_campo["cpNomeProfissonal"]),addslashes($valor_campo["cpSobreNomeProfissional"]),
														addslashes($valor_campo["cpEspecilidadeProfissional"]),addslashes($valor_campo["cpRgProfissional"]),
														addslashes($valor_campo["cpOrgaoExpedidorRgProfissional"]),addslashes($valor_campo["cpCepProfissional"]),
														addslashes($valor_campo["cpRuaProfissional"]),addslashes($valor_campo["cpBairroProfissional"]),
														addslashes($valor_campo["cpCidadeProfissional"]),addslashes($valor_campo["cpEstadoProfissional"]),
														addslashes($valor_campo["cpTelefoneProfissional"]),addslashes($valor_campo["cpEmailProfissional"]),
														addslashes($valor_campo["cpObservacaoProfissional"])
													);
				
						redirect("profissional",set_msg("<div class='alert alert-success'>Registro atualizado com sucesso !</div>"));	
					
					endif;
				
				endif;
			
			endif; //FIM CADASTRA E ATUALIZA
			
			if(isset($_GET["id"])):
				
				$id = (int)$_GET["id"];
			
				if($_GET["acao"] == "editar"): 
					
				    $getInfoProf = $this->m_prof->getInfoProfissional($id);
					
					set_msg("<div class='alert alert-info'>***** O registro [ $id ] está sendo editado *****</div>");
					
					return array (
									'id' => $id,
									'nome' => $getInfoProf->cpNomeProfissional,
									'sobreNm' => $getInfoProf->cpSobreNomeProfissional,
							        'espec' => $getInfoProf->cpEspecilidadeProfissional,
							        'rg' => $getInfoProf->cpRgProfissional,
							        'orgaoEX' => $getInfoProf->cpOrgaoExpedidorRgProfissional,
									'cep' => $getInfoProf->cpTelefoneProfissional,
									'tel' => $getInfoProf->cpTelefoneProfissional,
							        'email' => $getInfoProf->cpEmailProfissional,
									'rua' => $getInfoProf->cpRuaProfissional,
									'bairro' => $getInfoProf->cpBairroProfissional,
							        'cidade' => $getInfoProf->cpCidadeProfissional,
									'estado' => $getInfoProf->cpEstadoProfissional,
									'obs' => $getInfoProf->cpObservacaoProfissional
								 );
				
				
				endif;
				
				if($_GET["acao"] == "excluir"): 
				
				    $this->m_prof->excluiProfissional(addslashes($id));
					set_msg("<div class='alert alert-danger'>Registro excluído com sucesso !</div>");
				
				endif;

			endif;
		}
}