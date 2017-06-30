<?php 
	defined("BASEPATH") OR exit("O acesso via url não é permitido !");
	$this->load->view('header');
	
	echo form_open('profissional/FormProfissional?panel=9&start=1');
?>

<div class="col-md-6">
	<div class="panel-group" id="panel-765330">
		<div class="panel panel-primary">
			<div class="panel-heading">
				 <div class="panel-title" data-toggle="collapse" data-parent="#panel-765330" href="#panel_9">Cadastrar profissional</div>
			</div>
			<div id="panel_9" class="panel-collapse collapse">
				<div class="panel-body">
				<?php  if($msg = get_msg()): echo $msg; endif; ?>
					<div class="col-md-3">
						<div class="form-group">
							<label for="Nome">Nome </label>
							<input type="text" name="cpNomeProfissonal" id="cpNomeProfissonal" value="<?php echo (isset($nome)) ? $nome : ""; ?>" class="form-control" autofocus="autofocus" />
						</div>					
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="Sobre nome">Sobre nome</label>
							<input type="text" name="cpSobreNomeProfissional" value="<?php echo (isset($sobreNm)) ? $sobreNm : ""; ?>" id="cpSobreNomeProfissional" class="form-control" />
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="Especilidade">Especilidade</label>
							<select name="cpEspecilidadeProfissional"id="cpEspecilidadeProfissional" class="form-control">
								<option value="">Selecione <?php echo (isset($espec)) ? " - ". $espec : "";?></option>
								<option value="Odontologia">Odontologia</option>
								<option value="Urologia">Urologia</option>
								<option value="Clínica médica">Clínica médica</option>
								<option value="Cirurgião geral">Cirurgião geral</option>
								<option value="Nutricionista">Nutricionista</option>
								<option value="Outro">Outro</option>
							</select>
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="RG">RG</label>
							<input type="text" name="cpRgProfissional" value="<?php echo (isset($rg))? $rg : ""; ?>" id="cpRgProfissional" class="form-control" />
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="Orgao expedidor">Orgão expedidor ( RG )</label>
							<input type="text" name="cpOrgaoExpedidorRgProfissional" value="<?php echo (isset($orgaoEX)) ? $orgaoEX: ""; ?>" id="cpOrgaoExpedidorRgProfissional" class="form-control" />
						</div>
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="Cep">Cep</label>
							<input type="text" name="cpCepProfissional" id="cpCepProfissional" value="<?php echo (isset($cep)) ? $cep: ""; ?>" class="form-control" />
						</div>					
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="Telefone">Telefone</label>
							<input type="text" name="cpTelefoneProfissional" value="<?php echo (isset($tel)) ? $tel : ""; ?>" id="cpTelefoneProfissional" class="form-control" />
						</div>					
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="Email">E-mail ( opcional )</label>
							<input type="text" name="cpEmailProfissional" id="cpEmailProfissional" value="<?php echo (isset($email)) ? $email : ""; ?>" class="form-control" />
						</div>					
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="Rua">Rua</label>
							<input type="text" name="cpRuaProfissional" readonly id="cpRuaProfissional" value="<?php echo (isset($rua)) ? $rua : ""; ?>" class="form-control loadingProfissional" />
						</div>					
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="Bairro">Bairro</label>
							<input type="text" name="cpBairroProfissional" readonly id="cpBairroProfissional" value="<?php echo (isset($bairro)) ? $bairro : ""; ?>" class="form-control loadingProfissional" />
						</div>					
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label for="Cidade">Cidade</label>
							<input type="text" name="cpCidadeProfissional" readonly id="cpCidadeProfissional" value="<?php echo (isset($cidade)) ? $cidade : ""; ?>" class="form-control loadingProfissional" />
						</div>					
					</div>
					<div class="col-md-2">
						<div class="form-group">
							<label for="Estado">Estado</label>
							<input type="text" name="cpEstadoProfissional" readonly id="cpEstadoProfissional" value="<?php echo (isset($estado)) ? $estado : ""; ?>" class="form-control loadingProfissional" />
						</div>					
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label for="Observacao">Obervação (opcional)</label>
							<textarea name="cpObservacaoProfissional" id="cpObservacaoProfissional" class="form-control"><?php echo(isset($obs)) ? $obs : ""; ?></textarea>
						</div>					
					</div>
					
					<div class="col-md-12">
						<div class="form-group">
						<input type="hidden" name="id" value="<?php echo (isset($id) ? $id : ""); ?>"/>
						<?php 
							echo form_submit("acao",(isset($_GET['id']) && $_GET['acao'] == 'editar') ? "atualizar" : "cadastrar",array("class"=>" form-control btn btn-info","id" => "btnCadastraProfissonal"));
						?>					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-md-6">
	<div class="panel-group" id="panel-577971">
		<div class="panel panel-info">
			<div class="panel-heading">
				 <div class="panel-title" data-toggle="collapse" data-parent="#panel-577971" href="#panel_10">Lista profissinais</div>
			</div>
			<div id="panel_10" class="panel-collapse collapse in">
				<div class="panel-body">
				<h4 class="tableProfissional"></h4>
				<div class="rolagem">
					<table class="table table-hover" id="tableProfissional">
						<thead>
							<tr class="warning">
								<th>Id</th>
								<th>Profissonal</th>
								<th>Tel</th>
								<th>E-mail</th>
								<th class="info">Detalhes</th>
								<th>Especialidade</th>
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


<?php $this->load->view('footer'); ?>
