<?php
      
  //SEPARA BLOCOS DE ARQUIVOS 'JS' PARA SEREM RETORNADOS DE ACORDO COM O NOME DA PÁGINA QUE SERÁ INFORMADA NA CONTROLLER COMO PARÂMETRO DESSA FUNÇÃO
  if(!function_exists('carregaArquivos')):
            
    function carregaArquivos($nomeArquivo) {
        
        $js = array(
            
            'usuario' => array(
                
                'assets/js/usuario/validateFormUsuario.js',
                'assets/js/usuario/loadServiceUsuario.js',
                'assets/js/usuario/formHelperUsuario.js'
            ),
            
            'cliente' => array(
                
                'assets/js/cliente/validateFormCliente.js',
                'assets/js/cliente/formHelperCliente.js',
                'assets/js/cliente/loadServiceCliente.js'
            ),
            
            'agenda' => array(
                
                'assets/js/agenda/validateFormAgenda.js',
                'assets/js/agenda/formHelperAgenda.js',
                'assets/js/agenda/loadServiceAgenda.js'
            ),
            
            'servico' => array (
                
                'assets/js/servico/validateFormServico.js',
                'assets/js/servico/formHelperServico.js',
                'assets/js/servico/loadServiceServico.js'
            ),
            
            'profissional' => array (
                
                'assets/js/profissional/formHeperProfissional.js',
                'assets/js/profissional/loadServiceProfissional.js'
            )
        );
        
        switch($nomeArquivo):
        
            case 'usuario': return $js['usuario']; break;
            case 'cliente': return $js['cliente']; break;
            case 'agenda': return $js['agenda']; break;
            case 'servico': return $js['servico']; break;
            case 'profissional': return $js['profissional']; break;
            
        endswitch;
    }
    
  endif;

  if(!function_exists('incluirJS')):
    
    function incluirJS($arquivos) {

        $js = [$arquivos];
        $script =  '';
        
        foreach($js as $key => $res):
            
            for($i=0; $i < count($arquivos); $i++) {
                
                $script .= '<script type="text/javascript" src="'.base_url($res[$i]).'"></script>';
            }
             
        endforeach;
        
        return $script;
    }
    
  endif;
  
  //SERÁ CHAMANDA NA  CONTROLLER QUE SE REFERE OS ARQUIVOS - RECEBER COMO PARAMETRO O NOME DA PÁGINA ESPECÍFICA DE CADA ARQUIVO
  if(!function_exists('carregaJS')):
  
    function carregaJS($nomeArquivo) {
        
        return incluirJS(carregaArquivos($nomeArquivo));
    }
    
  endif;
  
  