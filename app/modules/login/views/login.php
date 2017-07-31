<?php $caminho = '../../'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Agenda</title>
	<meta charset="utf=8" />
	<link rel="stylesheet" type="text/css" href="<?php echo $caminho .'lib/css/bootstrap.css'; ?>"/>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo $caminho .'lib/css/font-awesome.css'; ?>" /> 
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
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                      <input type="text" name="cpNome" class="form-control" id="cpNome" autofocus="autofocus" />
                </div>	           		
            	</div>
            	<div class="form-group">
                   <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                      <input type="password" class="form-control" name="cpSenha" id="cpSenha" placeholder="Password">
                </div>	
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