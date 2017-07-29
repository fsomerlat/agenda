<?php $caminho = '../../'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Agenda</title>
	<meta charset="utf=8" />
	<link rel="stylesheet" type="text/css" href="<?php echo $caminho .'lib/css/bootstrap.css'; ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
</head>
<body>
<div class="container-fluid">
	<div class="row">
    	<div class="col-md-4"></div>
    
    	<div class="col-md-4 isLogin">
          	<?php
        
        		if($msg = get_msg()):
        
        			echo "<div class='msgErrorsLogin'>".$msg."</div>";
        
        		endif;
        	?>	  	
			<blockquote>
				<p>
					<span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Login
				</p> <small>Preencha os campos para entrar<cite> no sistema !</cite></small>
			</blockquote>
        	<form action="<?php echo base_url('login');?>" method="POST" >
            	<div class="form-group">
            		<label for="Usuario">Usuário</label>
            		<input type="text" name="cpNome" class="form-control" id="cpNome" autofocus="autofocus" />
            	</div>
            	<div class="form-group">
            		<label for="Senha">Senha</label>
            		<input type="password" name="cpSenha" class="form-control" id="cpSenha"/>	
            	</div>
            	<div class="form-group">
            		<input type="submit" name="acao" class="btn btn-info form-control" value="entrar" id="btnLogin"/>
            	</div>	
        	</form>
    
    		<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>
    		<script type="text/javascript" src="<?php echo base_url('assets/js/boostratp.min.js'); ?>"></script>
    		<!--script type="text/javascript" src="<?php echo base_url('assets/js/validateFormLogin.js'); ?>"></script-->
    		</div>
		</div>
	</body>
</html>