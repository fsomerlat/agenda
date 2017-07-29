<?php /*ARQUIVO CRIADO PARA UTILIZAR UM SERVIDOR DE E-MAIL PERSONALIZADO*/

defined("BASEPATH") OR exit("O acesso via url não é permito !");


//CONFIGURANDO SERVIDOR DE E-MAIL PARA O GMAIL
$config['protocol']='smtp';
$config['smtp_host']='ssl://smtp.gmail.com';
$config['smtp_port']= 465;
//$config['smtp_timeout']='2';
$config['smtp_user']= 'gecsistemasparainternet@gmail.com';
$config['smtp_pass']='F26154879';
$config['mailtype'] = 'html';
$config['charset']='utf-8';
$config['newline']="\r\n";
