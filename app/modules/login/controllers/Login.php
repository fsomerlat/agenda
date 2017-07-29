<?php 
	defined("BASEPATH") OR exit("Não é permito acesso via url !");

	class Login extends MX_Controller {

		public function __construct() {

			parent::__construct();
			
			$this->load->helper("form");
			$this->load->library("form_validation");
			$this->load->model("usuario/M_usuario","m_users");
		}	

		public function index () {

			self::FormAcao();
		 	$this->load->view('login');
		}

		public function accessNot() {

			$this->load->view('errors/acessoNegado');
		}
		//SETA ATTRIBUTOS DA SESSÃO
		public function setSessionUsers($valor) {

			 $this->$valor = $this->session->set_userdata('logado', $valor);			

		}	
		//RECUPERA ATTRIBUTOS DA SESSÃO
		public function getSessionUsers($retornoValor) {

			return $this->$retornoValor = $this->session->get_userdata('logado');
		}

		//DESTROY TODA SESSÃO
		public function destroySessionUsers() {

			session_destroy();
			redirect('login','refresh');
		}

		public function FormAcao() {


			//RECUPERA VALOR DOS CAMPOS DO FORMULÁRIO

			$valor_campo = $this->input->post();

			//SETA VALIDAÇÕES
			$this->form_validation->set_rules("cpNome", "[ Nome ] ", "required");
			$this->form_validation->set_rules("cpSenha","[ Senha ]", "required");

	
			//VERIFICA SE OS CAMPOS ESTÃO PREENCHIDOS
			if($this->form_validation->run() == FALSE): // IF 1

				if(isset($valor_campo["acao"])):
					
			         set_msg("<div class='alert alert-danger'>".validation_errors())."</div>";
				
				endif;

			else:

			$autenticaUsers = $this->m_users->verificaLogin($valor_campo["cpNome"],sha1($valor_campo["cpSenha"]));
				
				if($autenticaUsers == TRUE): // IF 2

					$acesso = $autenticaUsers->cpNivelAcesso;
					$nome = $autenticaUsers->cpNome;
					$status = $autenticaUsers->cpStatus;

					if($status == "B"): // IF 3

						set_msg("<div class='alert alert-info'>Usuário [ $nome ] encontra-se bloqueado. Contate o administrador do sistema !</div>");

					else:

						self::setSessionUsers($nome);  // SETA SESSÃO
						self::getSessionUsers($nome); // RECUPERA DADOS DA SESSÃO	

						switch($acesso):

							case "C" : redirect('servico'); break;
							case "S" : redirect('servico'); break;
							case "A" : redirect('usuario?panel=1'); break;

						endswitch;					
                    
					endif; //FIM IF 3
				
				else:

					set_msg("<div class='alert alert-warning'>Usuário e / ou senha incorretos !</div>");
					
				endif;	//FIM IF 2
                
			endif;	//FIM IF 1

		}


}