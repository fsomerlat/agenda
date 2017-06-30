<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo;?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
</head>
<body>
<div class="container-fluid">
	<div class="row">
	<div class="col-md-4"></div>


	<div class="col-md-4">
	<div class="page-header">
		<h1 class="login"><?php echo $titleLogin .form_open();  ?></h1>	
	</div>

		<?php

			if($msgFormLogin) {

				echo $msgFormLogin;
			}
		?>	
	
	<div class="form-group">
		<?php 
			echo form_label('Usuário');
			echo form_input('cpNome',set_value('cpNome'),array('class' => ' form-control','id'=>'cpNome','autofocus' => 'autofocus'));
		?>
	</div>
	<div class="form-group">
		<?php 
			echo form_label('Senha');
			echo form_password('cpSenha',set_value('cpSenha'),array('class' => 'form-control','id'=>'cpSenha'));	
		?>
	</div>
	<div class="form-group">
		<?php
			echo form_submit('acao','entrar',array('class' => 'form-control btn btn-info','id' => 'btnLogin'));
			echo form_close();
		 ?>
	</div>

		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/boostratp.min.js'); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url('assets/js/validateFormLogin.js'); ?>"></script>
		</div>
		</div>
	</body>
</html>