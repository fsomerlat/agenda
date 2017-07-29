<?php
	defined("BASEPATH") OR exit("O acesso via url não é permitido !");
	
	class Agenda extends MX_Controller {
		
		private $Errors;
		
		public function __construct(){
			
			parent::__construct($Errors = NULL);
		
			$this->Errors = $Errors;
			$this->msg = [];
			
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model("agenda/M_agenda","m_agenda");
			$this->load->model("profissional/M_profissional","m_prof");
		}
		
		public function index() {
			
		    $this->load->helper('include');
		    $this->load->view('header');
			$this->load->view('agenda/agenda',array(self::FormAgendaAcao(),self::excluir(), 'js' => carregaJS('agenda')));
		    $this->load->view('footer');
		}
		
		public function service_agenda_clientes_cadastrados() {
			
			header("Content-Type: application/json");
			echo $this->m_agenda->getJSON();	
		}
		
		public function service_agenda_clientes_nao_cadastrados() {
			
			header("Content-type: application/json");
			echo $this->m_agenda->getJSON_CLIENTE_NAO_CADASTRADO();
		}
		
		public function painelAgendamentos() {
			
			$this->load->view('painelAgendamentos');
		}
		
		public function setMsgError($profissional,$data,$hora) {
			
			return "<div class='col-md-12 divMsgAgenda'><div class='form-group'><div class='alert alert-info'>Dr (a). [ $profissional ] já está agendado(a) para [ $data ás $hora ] !</div></div></div>";
		}	
		
		public function setMsgEdicao($cliente,$tipoCliente,$prof,$espec,$serv) {
			
			$elem = array (
							"col-md-6" => "<div class='col-md-6 divMsgAgenda'>",
							"alert-info" => "<div class='alert alert-info'>",
							"alert-warning" => "<div class='alert alert-warning'>",
							"form-group" => "<div class='form-group'>",
					 		"fechaDivs" => "</div></div></div>"
						  );

			
			return $elem["col-md-6"].$elem["form-group"].$elem["alert-info"]."Um agendamento referente ao cliente [ $cliente ] que é [ $tipoCliente ] está sendo editado.".$elem["fechaDivs"].
				   $elem["col-md-6"].$elem["form-group"].$elem["alert-warning"]."Descrição: [ Profisisonal: $prof ] [ Especilidade: $espec] [ Servico: $serv ]".$elem["fechaDivs"];
		}
		
		public function setMgsSuccess($msg) {
			
			
			$elem = array(
							'col-md-12' => "<div class='col-md-12 divMsgAgenda'>",
							'form-group' => "<div class='form-group'>",
							'success' => "<div class='alert alert-success'>",
							'fechaDivs' => "</div></div></div>"
					
							);
			
			return $elem['col-md-12'].$elem['form-group'].$elem['success'].$msg.$elem["fechaDivs"];
			
		}
		
		public function validaCampo($campo,$msg=[]) {
			
			if(self::returnName($campo) == ""):
			
					 $this->Errors .= $msg;
			endif;
		}
		
		public function returnName($CampoName) {
			
			$valor_campo = $this->input->post();
			
			return 	$valor_campo[$CampoName];
		}
		
		public function setMsgDanger($msg) {
			
			$elem = array (	
							'col-md-12' => "<div class='col-md-12 divMsgAgenda'>",
							'form-group' => "<div class='form-group'>",
							'danger' => "<div class='alert alert-danger'>",
							'fechaDivs' => "</div></div></div>"	
							);
			
			return $elem['col-md-12'].$elem['form-group'].$elem['danger'].$msg.$elem['fechaDivs'];
		}	
		
		public function FormAgendaAcao() {
			
			$valor_campo = $this->input->post();
			
			$this->form_validation->set_rules("tipo_cliente","[ TIPO CLIENTE ]","required");
			
			if($this->form_validation->run() == FALSE ): //INICIO CADASTRO E ATUALIZAÇÃO
				
				if(isset($valor_campo["acao"])):
				
					set_msg(self::setMsgDanger(validation_errors()));
				
				endif;
			
			else:
			
				if($valor_campo["tipo_cliente"] == "Cadastrado"): //INICIO CLIENTE CADASTRADO
					
					$msg = "";
				
					self::validaCampo("teCliente_idCliente","È necessário preencher o campo [ CLIENTE CADASTRADO ] ! ");
					self::validaCampo("teProfissional_idProfissional","È necessário preencher o campo [ PROFISSONAL ] ! ");
					self::validaCampo("teServico_idServico","È necessário preencher o campo [ SERVIÇO ] ! ");
					self::validaCampo("cpDataAgendamento","È necessário preencher o campo [ DATA AGENDAMENTO ] ! ");
					self::validaCampo("cpHoraAgendamento","È necessário preencher o campo [ HORA AGENDAMENTO ] ! ");
				
					for($i=0; $i < strlen($this->Errors); $i++){
						
						$msg .= $this->Errors[$i];
					}
					
					if($msg != ""):
						
						set_msg(self::setMsgDanger($msg));
					
					else:
					
					if($valor_campo["acao"] == "agendar"):
					
						$data = $valor_campo["cpDataAgendamento"];
						$hora = $valor_campo["cpHoraAgendamento"];
						$fkProf = $valor_campo["teProfissional_idProfissional"];
						
						$getInfoProf = $this->m_prof->getInfoProfissional($fkProf);
						$nomeProfissonal = $getInfoProf->cpNomeProfissional .' '. $getInfoProf->cpSobreNomeProfissional;
						
						if($this->m_agenda->verificaAgendamento($data,$hora,$fkProf) == TRUE):
							
							set_msg(self::setMsgError($nomeProfissonal, $data, $hora));
						
						else:	
						
						$this->m_agenda->agendar(
								
												addslashes($valor_campo["teCliente_idCliente"]),addslashes($valor_campo["teProfissional_idProfissional"]),
												addslashes("NULL"),addslashes($valor_campo["teServico_idServico"]),addslashes($valor_campo["cpDataAgendamento"]),
												addslashes($valor_campo["cpHoraAgendamento"]),addslashes($valor_campo["cpObservacaoAgenda"])
													
											);
							
						redirect("agenda?panel=5",set_msg(self::setMgsSuccess("Cliente agendado com sucesso !")));
						
						endif;
					
					endif;
						
					if($valor_campo["acao"] == "atualizar"):
						
						set_msg(self::setMgsSuccess("Agenda de usuário [ CADASTRADO ] foi atualizada !"));
						
					endif;
					
				endif; //FIM CLIENTE CADASTRADO
				
				elseif($valor_campo["tipo_cliente"] == "Nao cadastrado"): // INICIO CLIENTE NÃO CADASTRADO

					$msg = "";

					self::validaCampo("cpClienteNaoCadastrado","È necessário preencher o campo [ CLIENTE NÃO CADASTRADO ] ! ");
					self::validaCampo("teProfissional_idProfissional","È necessário preencher o campo [ PROFISSIONAL ] ! ");
					self::validaCampo("teServico_idServico","È necessário preencher o campo [ SERVIÇO ] ! ");
					self::validaCampo("cpDataAgendamento","È necessário preencher o campo [ DATA AGENDAMENTO ] ! ");
					self::validaCampo("cpHoraAgendamento","È necessário preencher o campo [ HORA AGENDAMENTO ] !");
						
					for($i=0; $i < strlen($this->Errors); $i++){
						
						$msg .=  $this->Errors[$i];
					}
					
					if($msg != ""):
						
						set_msg(self::setMsgDanger($msg));
					
					else:
					
					if($valor_campo["acao"] == "agendar"):
					
						$data = $valor_campo["cpDataAgendamento"];
						$hora = $valor_campo["cpHoraAgendamento"];
						$fkProf = $valor_campo["teProfissional_idProfissional"];
							
						$getInfoProf = $this->m_prof->getInfoProfissional($fkProf);
						$nomeProfissonal = $getInfoProf->cpNomeProfissional .' '. $getInfoProf->cpSobreNomeProfissional;
						
						if($this->m_agenda->verificaAgendamento($data,$hora,$fkProf) == TRUE):
						
							set_msg(self::setMsgError($nomeProfissonal, $data, $hora));
						
						else:
						
						$this->m_agenda->agendar(
									
								addslashes("NULL"),addslashes($valor_campo["teProfissional_idProfissional"]),addslashes($valor_campo["cpClienteNaoCadastrado"]),
								addslashes($valor_campo["teServico_idServico"]),addslashes($valor_campo["cpDataAgendamento"]),
								addslashes($valor_campo["cpHoraAgendamento"]),addslashes($valor_campo["cpObservacaoAgenda"])
									
								);
					
						redirect("agenda/FormAgenda?panel=5", set_msg(self::setMgsSuccess("Cliente agendado com sucesso !")));
						
						endif;
							
					endif;
								
						if($valor_campo["acao"] == "atualizar"):
								
							set_msg(self::setMgsSuccess("Agenda de cliente [ NÃO CADASTRADO ] foi atualizada !"));
								
						endif;
								
					endif;
						
				endif; // FIM CLIENTE NAO CADASTRADO
			
			endif;	//FIM CADASTRO E ATUALIZAÇÃO	
	
			
			if(isset($_GET["acao"])): // VERIFICA SE HÁ UMA ACAO
			
				$id = (int)$_GET["id"];
				
				if($_GET["acao"] == "editar"):
				
					if($_GET["TipoCli"] == "CliCadastrado"): // EDITA AGENDA DE CLIENTES CADASTRADOS
							
					   $getInfoAg = $this->m_agenda->getInfoAgenda($_GET["TipoCli"],$id);
						
						$cliente = $getInfoAg->cpNomeCliente;
						$sobreNome = $getInfoAg->cpSobreNomeCliente;
						$serv = $getInfoAg->cpNomeServico;
						$prof = $getInfoAg->cpNomeProfissional;
						$espec =$getInfoAg->cpEspecilidadeProfissional;
						
						set_msg(self::setMsgEdicao($cliente, "CADASTRADO", $prof, $espec, $serv));
							
						return array (	
										'id' => $getInfoAg->idAgenda,
										'cliente' => $getInfoAg->cpNomeCliente,
										'prof' => $getInfoAg->cpNomeProfissional,
								        'serv' => $getInfoAg->cpNomeServico,
								     	'data' => $getInfoAg->cpDataAgendamento,
										'hora' => $getInfoAg->cpHoraAgendamento,
										'obs' => $getInfoAg->cpObservacaoAgenda
									);
						
					
					elseif($_GET["TipoCli"] == "Ncadastrado"): // EDITA AGENDA DE CLIENTES NÃO CADASTRADOS
					
					    $getInfoAg = $this->m_agenda->getInfoAgenda($_GET["TipoCli"], $id); 
						$cliente = $getInfoAg->cpClienteNaoCadastrado;
						$serv = $getInfoAg->cpNomeServico;
						$prof = $getInfoAg->cpNomeProfissional;
						$espec= $getInfoAg->cpEspecilidadeProfissional;
																	
						set_msg(self::setMsgEdicao($cliente, "NÃO CADASTRADO", $prof, $espec, $serv));
							
						return array (  'id' => $getInfoAg->idAgenda,
										'cliente'=> $getInfoAg->cpClienteNaoCadastrado,
										'prof' => $getInfoAg->cpNomeProfissional,
										'serv' => $getInfoAg->cpNomeServico,
										'data' => $getInfoAg->cpDataAgendamento,
										'hora' => $getInfoAg->cpHoraAgendamento,
								   		'obs' => $getInfoAg->cpObservacaoAgenda
									);
					endif;
			
				endif;

			endif;
		
		}
				
		public function excluir() {
			
			if(isset($_GET["acao"])):
			
			$id = (int)$_GET["id"];
			
				if($_GET["acao"] == "excluir"):
					
					$this->agenda->excluiAgendamento($id);
					set_msg(self::setMsgDanger("O registro [ $id ] foi excluído com sucesso !"));
						
				endif;
				
			endif;
		}
		
	}