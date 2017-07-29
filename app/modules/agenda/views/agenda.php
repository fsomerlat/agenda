<?php 
	defined("BASEPATH") OR exit ("O acesso via url não permitido ");
	 echo form_open('agenda?panel=5');
?>
	<?php 
		
		if($msg = get_msg()) {
			
			echo $msg;
		}
	?>	

<div class="col-md-5">
	<div class="panel-group" id="panel-528436">
		<div class="panel panel-primary">
			<div class="panel-heading">
				 <div class="panel-title" data-toggle="collapse" data-parent="#panel-528436" href="#panel_5">Agendar</div>
			</div>
			<div id="panel_5" class="panel-collapse collapse">
				<div class="panel-body">
				
				<form action="<?php echo base_url('agenda'); ?>" method="POST">
				
				<input type="hidden" name="edicaoTipoCliente" value="<?php echo(isset($_GET["TipoCli"])) ? $_GET["TipoCli"] : ""; ?>"/>
				
					<div class="col-md-3">
						<div class="form-group">
							<label for="Tipo cliente">Tipo de cliente ?</label>
											
							<select name="tipo_cliente" id="tipoCliente" class="form-control" autofocus="autofocus">
							
							<?php if(isset($id) && $_GET["TipoCli"] == "CliCadastrado"): ?>
								
								 <option value="Cadastrado">Cadastrado</option>
								
							<?php elseif(isset($id) && $_GET["TipoCli"] == "Ncadastrado"): ?>
									
								  <option value="Nao cadastrado">Não cadastrado</option>
								  		
							<?php else:?>
								
								<option value="">Selecione</option>
								<option value="Cadastrado">Cadastrado</option>
								<option value="Nao cadastrado">Não cadastrado</option>
							
							<?php endif;?>
							
							</select>
						</div>
					</div>					
					<div class="col-md-5"> 
						<div class="form-group">
								<div class="cliente"></div><!-- CARREGA TIPO DE CAMPO ( INPUT OU SELECT ) VIA AJAX -->
						</div>
					</div>
					<div class="col-md-4 isGlobal">
						<div class="form-group">
							<label for="Profissional">Profissional</label>
							<select name="teProfissional_idProfissional" id="teProfissional_idProfissional" class="form-control carregaProfissional">
								<!-- CARREGA AJAX -->
							</select>
						</div>
					</div>
					<div class="col-md-6 isGlobal">
						<div class="form-group">
							<label for="Servico">Serviço</label>
							<select name="teServico_idServico" id="teServico_idServicoAgenda" class="form-control">
								<!-- CARREGA VIA AJAX -->
							</select>
						</div>
					</div>
					<div class="col-md-3 isGlobal">
						<div class="form-group">
							<label for="Data">Data</label>
							<input type="text" name="cpDataAgendamento" value="<?php echo (isset($data)) ? $data : ""; ?>" id="cpDataAgendamento" readonly placeholder="click..." class="form-control" />
						</div>
					</div>
					<div class="col-md-3 isGlobal">
						<div class="form-group">
							<label for="Hora">Hora</label>
							<input type="time" name="cpHoraAgendamento" value="<?php echo (isset($hora)) ? $hora : ""; ?>" id="cpHoraAgendamento" class="form-control" />
						</div>
					</div>
					
					<div class="col-md-12">
						<div class="form-group">
						<label for="Observacao">Observação do agendamento ( opcional )</label>
							<textarea name="cpObservacaoAgenda" id="cpObservacaoAgenda" class="form-control" rows="3"><?php echo (isset($obs)) ? $obs : "";?></textarea>
						</div>
					</div>	
					<div class="col-md-6 btnAgenda">
						<div class="form-group">
						<input type="hidden" name="id" value="<?php echo (isset($id)) ? $id : "" ;?>" />
							<input type="submit" name="acao" value="<?php echo (isset($_GET["id"])) ? "atualizar":"agendar"; ?>" class="btn btn-info form-control" id="btnAgenda"/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="reset" class="form-control btn btn-warning" value="limpar" />
						</div>
					</div>					
				
				</form>
			
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-7">
	<div class="panel-group" id="panel-207623">
		<div class="panel panel-success">
			<div class="panel-heading">
				 <div class="panel-title" data-toggle="collapse" data-parent="#panel-207623" href="#panel_6">Lista de agendamentos - Clientes cadastrados</div>
			</div>
			<div id="panel_6" class="panel-collapse collapse in">
				<div class="panel-body">
					<h4 class="tableAgenda"></h4>
						<div class="rolagem_2">
						<table class="table table-hover" id="tableAgenda">
							<thead>
								<tr class="warning">
									<th>Id</th>
									<th>Cliente</th>
									<th>Profissional</th>
									<th>Serviço</th>
									<th>detalhes</th>
									<th>Valor</th>
									<th>Data</th>
									<th>Hora</th>
									<th>Obs</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<!-- CARREGA VIA AJAX CLIENTES CADASTRADOS-->
							</tbody>
						</table>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="panel-group" id="panel-207623">
		<div class="panel panel-info">
			<div class="panel-heading">
				 <div class="panel-title" data-toggle="collapse" data-parent="#panel-207623" href="#panel_6">Lista de agendamentos - Clientes não cadastrados</div>
			</div>
			<div id="panel_6" class="panel-collapse collapse in">
				<div class="panel-body">
					<h4 class="tableAgenda"></h4>
						<div class="rolagem_2">
						<table class="table table-hover" id="tableAgendaN">
							<thead>
								<tr class="warning">
									<th>Id</th>
									<th>Cliente</th>
									<th>Profissional</th>
									<th>Serviço</th>
									<th>detalhes</th>
									<th>Valor</th>
									<th>Data</th>
									<th>Hora</th>
									<th>Obs</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<!-- CARREGA VIA AJAX CLIENTES CADASTRADOS-->
							</tbody>
						</table>
					
					</div>
				</div>
			</div>
		</div>
	</div>	
	
</div>
