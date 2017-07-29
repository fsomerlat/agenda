<?php
	$this->load->view('header');
?>
<div class="col-md-3">
	<div class="form-group">
		<label for="Profissional">Profissional</label>
		<select name="cpNomeProfssionalAgendamento" id="cpNomeProfssionalAgendamento" class="form-control">
			<!-- CARREGA VIA AJAX -->
		</select>
	</div>
</div>
<div class="col-md-2">
	<div class="form-group">
		<label for="Sitiuacao">Situação</label>
		<select name="cpSituacaoAgendamento" id="cpSituacaoAgendamento" class="form-control">
			<option value="">Selecione</option>
			<option value="A">Em andamento</option>
			<option value="C">Cancelado</option>
			<option value="F">Finalizado</option>
		</select>
	</div>
</div>
<div class="col-md-2">
	<div class="form-group">
		<label for="Data inicio">De...</label>
		<input type="text" name="cpDataInicioAgendamento" id="cpDataInicioAgendamento" readonly class="form-control" />
	</div>
</div>
<div class="col-md-2">
	<div class="form-group">
		<label for="Data final">Até...</label>
		<input type="text" name="cpDataFinalAgendamento" id="cpDataFinalAgendamento" readonly class="form-control" />
	</div>
</div>
<div class="col-md-4">
	<div class="form-group">
		
	</div>
</div>
<div class="col-md-12">
	<div class="list-group">

		<div class="list-group-item">
			<h4 class="tableAPainelgendamento"></h4>
		</div>
		<div class="list-group-item">
			
			<table class="table table-hover" id="tablePainelAgendamento">
				<thead>
					<tr class="info">
						<th>Id</th>
						<th>Profissional</th>
						<th>Cliente</th>
						<th></th>
						<th>Serviço</th>
						<th>Data agendamento</th>
						<th>Hora agendamento</th>
						<th></th>
						<th></th>
					</tr>
				</thead>
			</table>
		</div>
		<div class="list-group-item">
			<span class="badge">14</span>Help
		</div> 
	</div>
</div>

<?php $this->load->view('footer'); ?>