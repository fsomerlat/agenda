<?php
	defined("BASEPATH")OR exit("O acesso via url não é permitido !");
	
	$this->load->view("header");
	echo form_open('cliente/FormCliente?panel=7&start=1');
?>

<div class="col-md-7">
	<div class="panel-group" id="panel-528436">
		<div class="panel panel-primary">
			<div class="panel-heading">
				 <div class="panel-title" data-toggle="collapse" data-parent="#panel-528436" href="#panel_7">Cadastrar cliente</div>
			</div>
			<div id="panel_7" class="panel-collapse collapse">
				<div class="panel-body">
				
					<?php if($msg = get_msg()): echo $msg; endif; ?>
					
					<div class="col-md-4">
						<div class="form-group">
							<label for="Cliente">Nome do cliente</label>
							<input type="text" name="cpNomeCliente" value="<?php echo (isset($nome)) ? $nome : set_value("cpNomeCliente") ;?>" autofocus="autofocus" id="cpNomeCliente" class="form-control" />
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="Sobre nome">Sobrenome</label>
							<input type="text" name="cpSobreNomeCliente" value="<?php echo (isset($sobreNm)) ? $sobreNm : ""; ?>" id="cpSobreNomeCliente" class="form-control" /> 
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="Cep">Cep</label>
							<input type="text" name="cpCep" id="cpCep" value="<?php echo (isset($cep)) ? $cep : set_value("cpCep") ;?>" class="form-control toClear" />
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="RG">RG</label>
							<input type="text" name="cpRgCliente" id="cpRgCliente" value="<?php echo (isset($rg)) ? $rg : ""; ?>" class="form-control" /> 
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="Orgão expedidor RG">Orgão expedidor( RG )</label>
							<input type="text" name="cpOrgaoExpedidorRgCliente" id="cpOrgaoExpedidorRgCliente" value="<?php echo (isset($orgaoEX)) ? $orgaoEX : ""; ?>" class="form-control" />
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						<label for="Telefone">Telefone</label>
							<input type="text" name="cpTelefone" id="cpTelefone" value=" <?php echo (isset($tel)) ? $tel : set_value("cpTelefone") ;?>"  class="form-control" />
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						<label for="Email">E-mail ( opcional )</label>
							<input type="text" name="cpEmail" id="cpEmail" value="<?php echo (isset($email)) ? $email : set_value("cpEmail") ;?>" class="form-control"/>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
						<label for="Rua">Rua</label>
							<input type="text" name="cpRua" id="cpRua" readonly value="<?php echo (isset($rua)) ? $rua : set_value("cpRua") ;?>"  class="form-control loading" />
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
						<label for="Bairro">Bairro</label>
							<input type="text" name="cpBairro" id="cpBairro" value="<?php echo (isset($bairro)) ? $bairro : set_value("cpBairro") ;?>" readonly class="form-control loading" />
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="Cidade">Cidade</label>
							<input type="text" name="cpCidade" id="cpCidade" value="<?php echo (isset($cidade)) ? $cidade : set_value("cpCidade") ;?>" readonly class="form-control loading" />
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="Cep">Estado</label>
							<input type="text" name="cpEstado" id="cpEstado" value="<?php echo (isset($estado)) ? $estado : set_value("cpEstado") ;?>" readonly class="form-control loading" />
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
						<label for="Observacao">Observação agenda ( opcional )</label>
							<textarea name="cpObservacao" id="cpObservacao" class="form-control" rows="3"><?php set_value("cpObservacao") ;?></textarea>
						</div>
					</div>	
					<div class="col-md-6">
						<div class="form-group">
						
						<input type="hidden" name="id" value="<?php echo (isset($id)) ? $id : ""; ?>"/>
						
							<?php echo form_submit("acao",(isset($_GET["acaoED"])) ? "atualizar":"cadastrar" ,array("class" => "form-control btn btn-info", "id" => "btnCadastrarCliente"));?>
						
							<?php echo form_close(); ?>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<input type="reset" class="form-control btn btn-warning" value="limpar" />
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="col-md-5">
		<div class="panel-group" id="panel-207623">
			<div class="panel panel-info">
				<div class="panel-heading">
					 <div class="panel-title" data-toggle="collapse" data-parent="#panel-207623" href="#panel_8">Lista de clientes</div>
				</div>
				<div id="panel_8" class="panel-collapse collapse in">
					<div class="panel-body">
					<h4 class="laodTableClientes"></h4>
					<div class="rolagem">
						<table class="table table-hover" id="tableCliente">
							<thead>
								<tr class="warning">
									<th>Id</th>
									<th>Nome</th>
									<th>Telefone</th>
									<th>E-mail</th>
									<th>Identidade</th>
									<th>Estado</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<!-- CARREGA VIA AJAX -->
							</tbody>
						</table>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php $this->load->view("footer"); ?>
