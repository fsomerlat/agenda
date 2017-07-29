<?php 
	defined("BASEPATH") OR exit ("Não é permitido o acesso  via url !");


	class EnvioEmail extends CI_Controller{

		public function __construct() {

			parent::__construct();

			$this->load->helper('form');
			$this->load->library('form_validation');

		}

		public function  index() {

			$this->load->view('admin/administrador', self::FormAcaoAdmin());
		}

		public function FormAcaoAdmin() {


			$this->load->library('email');

			$this->form_validation->set_rules("cpNomeEmailAdmin", "Nome" , "required"); 
			$this->form_validation->set_rules("cpEmailAdmin", "E-mail", "required");
			$this->form_validation->set_rules("cpAssuntoEmail", "Assunto", "required");
			$this->form_validation->set_rules("cpMessagemEmail", "Messagem", "required");


			if($this->form_validation->run() == FALSE):

				if(isset($_GET["start"])):

					set_msg("<div class='alert alert-danger'>".validation_errors()."</div>");
				
				endif;
			else:

			//RECUPERA VALOR DOS CAMPOS DO FORMULÁRIO
			$valor_campo = $this->input->post();

			$upl['upload_path'] = '/';  // LOCAL -> Raiz onde o upload deve ser colocado. gif|jpg|png|doc|docx|txt|pdf
			$upl['allowed_types'] = array('gif|jpg|png|doc|docx|txt|pdf');
			$upl['max_size'] =   1024 * 1024 * 2;
			$upl['max_width'] =  1024;
			$upl['max_height'] = 768;


			$this->load->library('upload', $upl);
			$this->upload->do_upload("cpArquivoAdmin");
			$upload_data = $this->upload->data();
		    $this->email->attach($upload_data["full_path"],'',$valor_campo["cpArquivoAdmin"]);


				$this->email->from($valor_campo["cpEmailAdmin"],'E-mail de '.$valor_campo["cpNomeEmailAdmin"]); // REMETENDE
				$this->email->to('gecsistemasparainternet@gmail.com'); // DESTINATÁRIO
				$this->email->subject($valor_campo["cpAssuntoEmail"]);
				$this->email->message(
										"<h3>Enviado por '".$valor_campo["cpNomeEmailAdmin"]."'</h3>"
										."<p>Assunto: ".$valor_campo['cpAssuntoEmail']."</p>".
										 "<p>Remetente: ".$valor_campo["cpEmailAdmin"]."</p>".
										 "<p>Messagem: <br/><br/>".$valor_campo["cpMessagemEmail"]."<br/></p>"
										
									);


			     if($this->email->send()):


						redirect("EnvioEmail/FormAdmin",set_msg("<div class='alert alert-success'>E-mail enviado com sucesso para o administrador do sistema.</div>"));
						
					else:
						
						set_msg("Falha ao envar e-mail !");
						print_r($this->email->print_debugger());
						
				endif;
				
			endif;

		}
	}