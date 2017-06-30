<?php
defined("BASEPATH") OR exit ("O acessp via url não é permitido !");

	class Cliente extends CI_Controller {
		
		public function __construct() {
			
			parent::__construct();
			
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('cliente_model','cli');
		}
		
		public function FormCliente() {
			
			$this->load->view('cliente', self::FormAcao());
		}
		
		public function service_cliente() {
			
			echo $this->cli->loadJSON();
		}
		
		public function FormAcao() {
			
			$valor_campo = $this->input->post();
			
			$this->form_validation->set_rules("cpNomeCliente"," [ NOME DO CLIENTE ]","required");
			$this->form_validation->set_rules("cpSobreNomeCliente","[ SOBRENOME ]","required");
			$this->form_validation->set_rules("cpRgCliente","[ RG ]" ,"required");
			$this->form_validation->set_rules("cpOrgaoExpedidorRgCliente", "[ ORGÃO EXPEDIDOR]", "required");
			$this->form_validation->set_rules("cpCep"," [ CEP ]","required");
			$this->form_validation->set_rules("cpTelefone", "[ TELEFONE ]","required");
			$this->form_validation->set_rules("cpRua","[ RUA ]","required");
			$this->form_validation->set_rules("cpBairro","[ CIDADE ]","required");
			$this->form_validation->set_rules("cpEstado","[ ESTADO ]" ,"required");
			
			if($this->form_validation->run() == FALSE):
			
				if(isset($_GET["start"])):
				
					set_msg("<div class='alert alert-danger'>".validation_errors()."</div>");
				
				endif;
					
				else:
					
					// INÍCIO BLOCO P/ CADASTRAR E ATUALIZAR REGISTRO
					
					$rg = $valor_campo["cpRgCliente"];
					$cliente = $valor_campo['cpNomeCliente'];
					$sobreNm = $valor_campo['cpSobreNomeCliente'];
					
					if($valor_campo["acao"] == "cadastrar"): 
					
						if($this->cli->verificaDuplicidade($cliente,$sobreNm,$rg)  == TRUE ): 
							
							$rg = $valor_campo["cpRgCliente"];
						
								set_msg("<div class='alert alert-warning'> Desculpe...O RG [ $rg ] e / ou o nome [ $cliente $sobreNm ] já é cadastrado !</div>");
							
						else:							
						
							$this->cli->cadastraCliente(
									
									addslashes($valor_campo["cpNomeCliente"]),addslashes($valor_campo["cpSobreNomeCliente"]),addslashes($valor_campo["cpRgCliente"]),addslashes($valor_campo["cpOrgaoExpedidorRgCliente"]),
									addslashes($valor_campo["cpTelefone"]),addslashes($valor_campo["cpEmail"]),addslashes($valor_campo["cpCep"]),addslashes($valor_campo["cpRua"]),
									addslashes($valor_campo["cpBairro"]),addslashes($valor_campo["cpCidade"]),addslashes($valor_campo["cpEstado"]),addslashes($valor_campo["cpObservacao"])
									
									);
							
							redirect("cliente/FormCliente?panel=7",set_msg("<div class='alert alert-success'>O cliente [ $cliente ] foi cadastrado com sucesso !</div>"));
						
						endif; 
						
					endif;
						
						
					if($valor_campo["acao"] == "atualizar"):
						
						$id = $valor_campo["id"]; 
	
						if($this->cli->verificaDuplicidade($cliente,$sobreNm,$rg) == TRUE): 
						
						
							set_msg("<div class='alert alert-warning'> Desculpe...O RG [ $rg ] e / ou o nome [ $cliente $sobreNm ] já é cadastrado !</div>");
						
						else:
						
							$this->cli->atualizaCliente(
													
													addslashes($id),addslashes($valor_campo['cpNomeCliente']),addslashes($valor_campo["cpSobreNomeCliente"]),addslashes($valor_campo["cpRgCliente"]),
													addslashes($valor_campo["cpOrgaoExpedidorRgCliente"]),addslashes($valor_campo["cpTelefone"]),addslashes($valor_campo["cpEmail"]),
													addslashes($valor_campo["cpCep"]),addslashes($valor_campo["cpRua"]),addslashes($valor_campo["cpBairro"]),
													addslashes($valor_campo["cpCidade"]),addslashes($valor_campo["cpEstado"]),addslashes($valor_campo["cpObservacao"])
													
									  				);
						
							redirect("cliente/FormCliente?panel=7",set_msg("<div class='alert alert-success'>O registro [ $id ] foi atualizado com sucesso ! </div>"));
						
						
						endif; 
					
					endif;
					
					//FIM BLOCO P/ CADASTRAR E ATUALIZAR REGISTRO
			endif;
			
			//INÍCIO BLOCO P/ EDITAR E EXCLUIR REGISTRO
			if(isset($_GET["id"])):
				
			$id = (int)$_GET["id"];
				
				if(isset($_GET["acaoED"])): 
					
					$getCli = $this->cli->getInfoCli($id);
					
					set_msg("<div class='alert alert-info'>***** O registro [ $id ] está sendo editado *****</div>");
					
					return array (	
									'id' => $id,
									'nome' => $getCli->cpNomeCliente,
							        'sobreNm' => $getCli->cpSobreNomeCliente,
							        'rg' => $getCli->cpRgCliente,
							        'orgapEX' => $getCli->cpOrgaoExpedidorRgCliente,
									'tel' => $getCli->cpTelefone,
									'email' => $getCli->cpEmail,
									'cep'	=>  $getCli->cpCep,
									'rua' => $getCli->cpRua,
									'bairro' => $getCli->cpBairro,
									'cidade' => $getCli->cpCidade,
									'estado' => $getCli->cpEstado,
									"obs" => $getCli->cpObservacao
								);
					
				
				elseif(isset($_GET["acaoEX"])):
					
					
				$this->cli->detelaCliente($id);
				
					set_msg("<div class='alert alert-danger'>Registro excluído com sucesso !</div>");
				
				endif; 
			
			endif; 
			//FIM BLOCO P/ EDITAR E EXCLUIR REGISTRO
			
			
		}
	}