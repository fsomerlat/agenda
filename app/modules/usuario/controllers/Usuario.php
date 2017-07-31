<?php 
	defined("BASEPATH") OR exit("Não é possível acesso via url !");

	class Usuario extends MX_Controller {

		public function __construct() {

			parent::__construct();

			$this->load->helper('form');
			$this->load->library(array('form_validation'));
			$this->load->model('usuario/M_usuario', 'm_users');
		}

		public function index() { 

    		$this->load->helper('include');
    		
		    $this->load->view('header');
		    $this->load->view('usuario', array( self::FormAcao() , 'js' => carregaJS('usuario')));
		    $this->load->view('footer');
		}
    
		public function verificaUsuario() {
		
		    if(!empty($_POST["nomeUsuario"])):
		      echo $this->m_users->verificaUsuario($_POST["nomeUsuario"]);
		    endif;
		}
		
		public function service_usuario() {
			
			header("Content-Type: application/json");
			echo $this->m_users->getJSON(); 
		}

		public function FormAcao() {
			
			//RECUPERA VALORES DOS CAMPOS DO FORMULÁRI
			$valor_campo = $this->input->post();	

			//SETA VALIDAÇÃO OBRIGATÓRIA DOS CAMPOS
			$this->form_validation->set_rules("cpNome", "Nome", "required");
			$this->form_validation->set_rules("cpSenha", "Nome", "required");
			$this->form_validation->set_rules("cpStatus", "Status", "required");
			$this->form_validation->set_rules("cpNivelAcesso", "Nível de acesso","required");

			//VERIFICA SE A VALIDAÇÃO ESTÁ OK
			if($this->form_validation->run() == FALSE):

				if(isset($valor_campo["acao"])):

					set_msg("<div class='alert alert-danger'>".validation_errors()."</div>");
				
				endif;
				
				else:
					//CADASTRAR USUÁRIOS
					if($valor_campo['acao'] == "cadastrar"):

					   $this->m_users->inserir($valor_campo['cpNome'],sha1($valor_campo['cpSenha']),$valor_campo['cpStatus'],$valor_campo['cpNivelAcesso']);

						redirect("usuario?panel=1",set_msg("<div class='alert alert-success'>Usuário cadastrado com sucesso !</div>"));

					//EDITA 
					elseif($valor_campo['acao'] == "atualizar"):

						$id = $valor_campo['id'];

						$this->m_users->atualizar(
													$id,
													$valor_campo['cpNome'],
													sha1($valor_campo['cpSenha']), 
													$valor_campo['cpStatus'],
													$valor_campo['cpNivelAcesso']
												);

						redirect("usuario?panel=1",set_msg("<div class='alert alert-success'>Usuário atualizado com sucesso !</div>"));		
				 
					endif;
			endif;
					
			//EXCUTA OU AÇÕES

			if(isset($_GET["id"])):

				$id = (int)$_GET["id"];

					//EXCLUIR
					if($_GET["acao"] == "excluir"):

					   $this->m_users->excluir($id);
					   	set_msg("<div class='alert alert-danger'>Registro excluído com sucesso !</div>");
					
					endif;		
				
					//EDITA E CARREGA USUARIO
					if($_GET["acao"] == "editar"):

					   $getInfoUsers = $this->m_users->getId($id);

						foreach ($getInfoUsers as $key => $res) {

							$arry =  array(	

						      			'id'     => $res->idUsuario,
										'nome'   => $res->cpNome,
										'status' => $res->cpStatus,
										'acesso' => $res->cpNivelAcesso
									);
							} 

							set_msg("<div class='alert alert-info'>***** Há um registro sendo editado *****</div>");
							
							return $arry;
					endif;

			endif;
		}	
	}