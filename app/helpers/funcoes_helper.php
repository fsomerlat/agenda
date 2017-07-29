<?php 
	defined("BASEPATH") OR exit ("Não é possível o acesso via url !");

	
	if(!function_exists("set_msg")):
		
		function set_msg($msg = NULL) {

			$ci = & get_instance();
			$ci->session->set_userdata("notifica", $msg);
		}

	endif;

	if(!function_exists("get_msg")):

		function get_msg($destroy = TRUE) {

			$ci = & get_instance();

			$retorno =  $ci->session->userdata("notifica");

			if($destroy) $ci->session->unset_userdata("notifica", $destroy); 
			
			return $retorno;
		}

	endif;


	if(!function_exists('set_attr_session')):

		function set_attr_session ($attr =  NULL) {

			$ci = & get_instance();
			$ci->session->set_userdata('sessao_criada', $attr);	
		}

	endif;

	if(!function_exists('get_attr_session')):

		function get_attr_session($attr = TRUE) {


			$ci = & get_instance();
			$getAttr = $ci->session->userdata('sessao_criada');

			if($attr) $ci->session->unset_userdata('sessao_criada', $attr);

			return $getAttr;
		}

	endif;