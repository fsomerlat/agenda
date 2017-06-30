<?php 	$this->load->view('notAccessUrl'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistema CI</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
</head>
<body class="pagAdmin">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h1 class="userBloqueado"> Envie um e-mail
					 <?php	echo form_open('EnvioEmail/FormAdmin?start=1');  ?> 
			</h1>
		</div>
		<div class="col-md-4"></div>
		<div class="col-md-4">
		<div class="msgEmail"><?php echo get_msg();?></div>
			<div class="form-group">
				<label for="Nome">Nome</label>
				<?php echo form_input("cpNomeEmailAdmin", set_value("cpNomeEmailAdmin"),array("class" => "form-control","autofocus" => "autofocus")); ?>
			</div>
			<div class="form-group">
				<label for="Email">Seu e-mail</label>
				<?php echo form_input("cpEmailAdmin",set_value("cpEmailAdmin"), array("class" => "form-control")); ?>
			</div>
			<div class="form-group">
			<label for="Assunto">Assunto</label>
				<?php echo form_dropdown("cpAssuntoEmail",array(""=>"selecione","Acesso bloqueado" => "Acesso bloqueado","Messagem de erro" => "Messagem de erro","Demora pra abrir" => "Demora pra abrir","Outro" => "Outro"),set_value("cpAssuntoEmail"),array("class" => "form-control"));?>
			</div>
			<div class="form-group">
				<label for="Arquivo">Arquivo</label>
				<?php echo form_upload("cpArquivoAdmin",set_value("cpArquivoAdmin"),array("class" => "form-control","id" => "uploadAdmin"));?>
			</div>
			<div class="form-group">
				<label for="Messagem">Mensagem</label>
				<?php echo form_textarea("cpMessagemEmail",set_value("cpMessagemEmail"), array("class" => "form-control file","placeholder" => "Deescreva qual é a sua necessidade...")); ?>
			</div>
			<div class="form-grouṕ">
				<?php  
					echo form_submit('enviarEmailAdmin','enviar', array('class'=>'form-control btn btn-info')); 
					echo form_close();
				?>
			</div>
		</div>
		<div class="col-md-4"></div>	
		<div class="col-md-12">
			<h1  class="userBloqueado">Voltar para página de <a href="<?php echo base_url('inicial'); ?>">login</a></h1>
		</div>
	</div>
</div>
</body>
</html>