<?php   $this->load->view('notAccessUrl'); $caminho = '../../'; ?>

<!DOCTYPE html>
<head>
	<title>Agenda</title>
	<meta charset="UTF-8"/>  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo $caminho .'lib/css/bootstrap.css'; ?>"/>
	<link rel="styleshher" type="text/css" href="<?php echo $caminho .'lib/css/bootstrap-theme.min.css'?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $caminho .'lib/css/ui_1.12.1_themes_base_jquery-ui.css'?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $caminho .'lib/css/jquery-ui.css'; ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo $caminho .'lib/css/font-awesome.css'; ?>" /> 

</head>
<body>

<div id="dialog-message" title="Erro">
  <p>
    <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
    <p class="mensagem"></p>
  </p>
</div>

<input type="hidden" class="baseUrl" value="<?php echo base_url(); ?>" />
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 menuSuperior">
			<nav class="navbar navbar-default navbar-statc-top navbar-inverse" role="navigation">
				<div class="navbar-header"> 
					<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-home" title="Home" aria-hidden="true"></span></a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						 <a href="#" class="dropdown-toggle" data-toggle="dropdown">config<strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li>
								<a href="http://www.gecsistemas.hol.es" target="_blank">site</a>
							</li>
							<li>
								<a href="<?php echo base_url('agenda'); ?>">agenda</a>
							</li>
							<li>
								<a href="<?php echo base_url('email');?>" target="_blank">email</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="<?php echo base_url('login/destroySessionUsers'); ?>"><span class="glyphicon glyphicon-off" title="Home" aria-hidden="true"></span> logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<div class="col-md-12">
			<blockquote class="pull-right">
				<p>Sistema para agendamento - Hoje é dia <i class="dataAtual"></i> -</p> 
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>	Usuário logado: <b><?php echo (isset($_SESSION['logado'])) ? $_SESSION['logado']  : " - Não há sessão !" ;?> </b> 
			
			</blockquote>
		</div>					
		<div class="col-md-12 menuInferior">
			<div class="form-group">
				<ul class="nav nav-tabs">
					<li>
						<a href="<?php echo base_url('usuario'); ?>">Usuários</a>
					</li>
					<li>
						<a href="<?php echo base_url('profissional'); ?>">Profissional</a>
					</li>
					<li>
						<a href="<?php echo base_url("cliente"); ?>">Cliente</a>
					</li>
					<li>
						<a href="<?php echo base_url('servico'); ?>">Serviços</a>
					</li>
					<li>
						<a href="<?php echo base_url('agenda'); ?>">Agenda</a>
					</li>
					<li>
						<a href="<?php echo base_url('agenda/painelAgendamentos'); ?>">Painel de controle</a>
					</li>					
				</ul>			
			</div>
		</div>
		
		
		