<?php
	
	defined("BASEPATH") OR exit("Acesso via url nkão é permitido");

	class Servico extends MX_Controller {


		public function __construct() {

			parent::__construct();

			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('servico/M_servico', 'm_servs');
		}

		public function index() {

		    $this->load->helper('include');
		    $this->load->view('header');
			$this->load->view('servico',array(self::FormAcaoService(), 'js' => carregaJS('servico')));
			$this->load->view('footer');
		}
		
		public function service_servico() {
			
			echo $this->m_servs->getJSON();
		}

		public function FormAcaoService() {


			$valor_campo = $this->input->post();

			$this->form_validation->set_rules("cpNomeServico", "Nome do serviço", "required");
			$this->form_validation->set_rules("cpValorServico", "Valor do serviço", "required");

			if($this->form_validation->run()  == FALSE):

				if(isset($valor_campo["start"])):
					set_msg("<div class='alert alert-danger'>".validation_errors()."</div>");
				endif;
			else:

				//CADASTRO E ATUALIZAÇÃO
				if($valor_campo["acao"] == "cadastrar"):
				
				    $this->m_servs->inserir($valor_campo["cpNomeServico"], $valor_campo["cpValorServico"]);
					
					redirect("servico?panel=3",set_msg("<div class='alert alert-success role='alert'>Serviço inserido com sucesso !</div>"));
				
				elseif($valor_campo["acao"] == "atualizar"):

					$id = $valor_campo['id'];

					$this->m_servs->atualiza($id,$valor_campo["cpNomeServico"],$valor_campo["cpValorServico"]);
					redirect("servico?panel=3",set_msg("<div class='alert alert-success'>Registro atualiado com suscesso !</div>"));


				endif;

			endif;

			//EDIÇÃO E EXCLUSÃO
			if(isset($_GET["acao"])):

				$id = (int)$_GET["id"];

				if($_GET["acao"] == "excluir"):

				    $this->m_servs->excluir($id);
				 	set_msg("<div class='alert alert-danger'>Registro excluido com sucesso !</div>");

				 elseif($_GET["acao"] == "editar"):
				 
				    $getInfoServs = $this->m_servs->getInfoServ($id);
				 	
				 	$servico = $getInfoServs->cpNomeServico;
				 	$valor = $getInfoServs->cpValorServico;	

					$InfoServs = array(
										'id' => $id,
										'servico' => $servico,
										'valorServico' => $valor
									   );	
									   	 	
 					set_msg("<div class='alert alert-info'>*****  Há um registro sendo editado *****</div>"); 
					return $InfoServs;

				endif;
			endif;

		}

		
	}