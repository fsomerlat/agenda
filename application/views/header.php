<?php   $this->load->view('notAccessUrl'); ?>

<!DOCTYPE html>
<head>
	<title>Sistema CI</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.css'); ?>"/>
	<link rel="styleshher" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css')?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery-ui.css'); ?>" />

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 menuSuperior">
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
								<a href="<?php echo base_url('Agenda/FormAgenda'); ?>">agenda</a>
							</li>
							<li>
								<a href="<?php echo base_url('EnvioEmail/FormAdmin');?>" target="_blank">email</a>
							</li>
							<li class="divider">
							</li>
							<li>
								<a href="<?php echo base_url('inicial/destroySessionUsers'); ?>"><span class="glyphicon glyphicon-off" title="Home" aria-hidden="true"></span> logout</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<div class="col-md-6">
			<blockquote class="pull-right">
				Sistema para agendamento - Hoje é dia <i class="dataAtual"></i> - 
				Usuário logado: <b><?php echo (isset($_SESSION['logado'])) ? $_SESSION['logado']  : " - Não há sessão !" ;?> </b> 
			
			</blockquote>
		</div>	
		<br/><br/>				
		<div class="col-md-12 menuInferior">
			<div class="form-group">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="<?php echo base_url('usuario/FormUsers?panel=1'); ?>">usuários</a>
					</li>
					<li>
						<a href="<?php echo base_url('profissional/FormProfissional?panel=9'); ?>">profissional</a>
					</li>
					<li>
						<a href="<?php echo base_url("cliente/FormCliente?panel=7"); ?>">cliente</a>
					</li>
					<li>
						<a href="<?php echo base_url('servico/FormService?panel=3'); ?>">serviços</a>
					</li>
					<li>
						<a href="<?php echo base_url('agenda/FormAgenda?panel=5'); ?>">agenda</a>
					</li>
					<li>
						<a href="<?php echo base_url('agenda/painelAgendamentos'); ?>">painel de controle</a>
					</li>					
				</ul>			
			</div>
		</div>
		
		
		