<?php defined('BASEPATH') OR exit('O acesso via url nõa é permitido !'); ?>
<div class="col-md-6">
	<div class="panel-group" id="panel-36020">
		<div class="panel panel-primary">
			<div class="panel-heading">
				 <div class="panel-title" data-toggle="collapse" data-parent="#panel-36020" href="#panel_1">Cadastra usuário</div>
			</div>
			<div id="panel_1" class="panel-collapse collapse in">
				<div class="panel-body">
    				<form action="<?php echo base_url('usuario'); ?>" id="formUsuario" method="POST">
    					<div class="col-md-2">
    						<div class="form-group">
    							<label for="Nome">Nome</label>
    							<input type="text" name="cpNome" id="cpNome" value="<?php echo (isset($nome)) ? $nome: set_value("cpNome"); ?>" class="form-control" />
    						</div>
    					</div>
    					<div class="col-md-2">
    						<div class="form-group">
    						<label for="senha">Senha</label>
    							<input type="password" name="cpSenha" id="cpSenha" class="form-control isSenha"  />
    						</div>
    					</div>
    					<div class="col-md-1 isVizualizaSenha">
    						<div class="form-group">
    							<a href="#" class="vizualizarSenha" title="Clique e vizualize sua senha !"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
    						</div>
    					</div>
    					<div class="col-md-2">
    						<div class="form-group">
    						<label for="Status">Status</label> 
    							<select name="cpStatus" id="cpStatus" class="form-control">
    								<option value=""><?php echo (isset($status)) ? " - ".$status : "Selecione" ; ?></option>
    								<option value="A">Ativo</option>
    								<option value="B">Bloqueado</option>
    							</select>
    						</div>
    					</div>						
    					<div class="col-md-3">
    						<div class="form-group">
    						<label for="Nivel de acesso">Nível acesso</label>	
    							<select name="cpNivelAcesso" id="cpNivelAcesso" class="form-control">
    								<option value="">Selecione <?php echo (isset($acesso)) ? " - ". $acesso :  false ; ?></option>
    								<option value="C">Comum</option>
    								<option value="S">Super</option>
    								<option value="A">Admin</option>
    							</select>
    						</div>						
    					</div>
    					<div class="col-md-2 isCadastraUsers">	
    						<div class="form-group">
    							<input type="hidden" name="id"  value="<?php echo (isset($id)) ? $id : ""; ?>"/>
    							<input type="submit" name="acao" value="<?php echo (isset($id)) ? 'atualizar' : 'cadastrar'; ?>" class="form-control btn btn-info" id="btnCadastraUser" />
    						</div>
    					</div>					
    				</form>
				</div>
			</div>
		</div>
	</div>
	<?php
		if($msg = get_msg()): // MENSAGEM NA SESSÃO

			echo $msg;

		endif;
	 ?>
</div>
<div class="col-md-6">
	<div class="panel-group" id="panel-264720">
		<div class="panel panel-primary">
			<div class="panel-heading">
				 <div class="panel-title" data-toggle="collapse" data-parent="#panel-264720" href="#panel_2">Lista usuários</div>
			</div>
			<div id="panel_2" class="panel-collapse collapse in">
				<div class="panel-body">
					<h4 class="titleTableUsers"></h4>
					<div class="rolagem">
					<table class="table table-hover" id="tableListUsers">
						<tbody>
							<thead>
								<tr class="info">
									<th>Id</th>
									<th>Nome</th>
									<th>Status</th>
									<th>Acesso</th>
									<th></th>
									<th></th>
								</tr>
							</thead>		
						</tbody>	
					</table>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
