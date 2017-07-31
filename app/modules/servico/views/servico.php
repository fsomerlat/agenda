<?php defined("BASEPATH") OR exit ("Não é permitido o acesso via url !"); ?>	
<div class="col-md-6">
	<div class="panel-group" id="panel-765344">
		<div class="panel panel-primary">
			<div class="panel-heading">
				 <div class="panel-title" data-toggle="collapse" data-parent="#panel-765344" href="#panel_3">Cadastrar serviço</div>
			</div>
			<div id="panel_3" class="panel-collapse collapse in">
				<div class="panel-body">
    				<form action="<?php echo base_url('servico');?>" method="POST">
    					<div class="col-md-4">
    						<div class="form-group">
    						<label for="Nome Servico">Nome do servico</label>
    							<?php echo form_input("cpNomeServico", (isset($servico)) ?  $servico : set_value("cpNomeServico") ,array("class" => "form-control","autofocus" => "autofocus","id" => "cpNomeServico")); ?>
    						</div>				
    					</div>
    					<div class="col-md-4">
    						<div class="form-group">
    							<label for="valor servico">Valor serviço</label>
    							<?php echo form_input("cpValorServico", (isset($valorServico)) ? $valorServico : set_value("cpValorServico") ,array("class" => "form-control","id" => "cpValorServico")); ?>
    						</div>							
    					</div>
    					<div class="col-md-4 cadastrarServico">
    						<input type="hidden" name="id" value="<?php  echo (isset($id)) ? $id : ""; ?>" />
    						<input type="subnmit" name="acao" value="<?php echo (isset($_GET["acao"]) && $_GET["acao"] == "editar") ? "atualizar" : "cadastrar";?>" class="form-control btn btn-info" id="btnCadastrarServico" />			
    					</div>				
    				</form>
				</div>
			</div>
		</div>
	</div>
	<?php 
		if($msg = get_msg()):
		
			echo $msg;

		endif;
	?>
</div>

<div class="col-md-6">
	<div class="panel-group" id="panel-754590">
		<div class="panel panel-primary">
			<div class="panel-heading">
				 <div class="panel-title" data-toggle="collapse" data-parent="#panel-754590" href="#panel_4">Listar serviço</div>
			</div>
			<div id="panel_4" class="panel-collapse collapse in">
				<div class="panel-body">
				<h4 class="tableServico"></h4>
					<div class="rolagem">
						<table class="table table-hover" id="tableListServico">
							<thead>
								<tr class="info">
									<th>Id</th>
									<th>Serviço</th>
									<th>Valor</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<!--CARREGA VIA AJAX-->
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

