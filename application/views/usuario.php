<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view('header');

echo form_open('usuario/FormUsers?panel=1&start=1');


?>

<div class="col-md-6">
	<div class="panel-group" id="panel-36020">
		<div class="panel panel-primary">
			<div class="panel-heading">
				 <div class="panel-title" data-toggle="collapse" data-parent="#panel-36020" href="#panel_1">Cadastra usuário</div>
			</div>
			<div id="panel_1" class="panel-collapse collapse">
				<div class="panel-body">
					<div class="col-md-2">
						<div class="form-group">
							<label for="Nome">Nome</label>
							<input type="text" name="cpNome" id="cpNome" value="<?php echo (isset($nome)) ? $nome: set_value("cpNome"); ?>" class="form-control" autofocus="autofocus" />
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
						<label for="Senha">Senha</label>
							<input type="password" name="cpSenha" id="cpSenha" class="form-control" />
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						<label for="Status">Status</label> 
							<select name="cpStatus" id="cpStatus" class="form-control">
								<option value="">Selecione <?php echo (isset($status)) ? " - ".$status : false ; ?></option>
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
							<input type="hidden" name="id" value="<?php echo (isset($id)) ? $id : ""; ?>"/>
							
							<?php 
								echo form_submit('acao',(isset($id)) ? 'atualizar' : 'cadastrar', array('class'=>'btn btn-info','id'=>'btnCadastraUser'));
							?>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<?php
		if($msg = get_msg()): // MENSAGEM NA SESSÃO

			echo $msg;

		endif;
		echo form_close();
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
								<tbody>
									</tbody>
	
									<!-- CARREGA VIA AJAX-->
	
									<!--?php   CARREGA PELO CODEIGNITER PHP
	
										foreach($arryUsuarios as $key => $res):
	
											($res->cpStatus == "A") ? $status = "Ativo" : $status = "Bloqueado";
											($res->cpNivelAcesso == "C") ? $nivelAcesso = "Comum" : "";
											($res->cpNivelAcesso == "S") ? $nivelAcesso = "Super" : "";
											($res->cpNivelAcesso == "A") ? $nivelAcesso = "Admin" : "";
	
											echo "<tr>";
											echo "<td>".$res->idUsuario."</td>";
											echo "<td>".$res->cpNome."</td>";
											echo "<td>".$status."</td>";
											echo "<td>".$nivelAcesso."</td>";
											echo "<td><a href='FormAcao?panel=1&acao=editar&id=".$res->idUsuario."'>editar</a></td>";
											echo "<td><a href='FormAcao?panel=2&acao=excluir&id=".$res->idUsuario."' class='excluiUser'>excluir</a></td>";
											echo "</tr>";
											
										endforeach;
									?-->
	
								</tbody>
						</table>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('footer');?>