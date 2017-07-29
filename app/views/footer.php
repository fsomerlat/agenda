	

		</div>
	</div>
	
	
	<?php $caminho = '../../'; ?>
	
	<script type="text/javascript" src="<?php echo $caminho .'lib/js/jquery-1.11.3.min.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo $caminho .'lib/js/bootstrap.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo $caminho .'lib/js/jquery-ui.js'; ?>"></script>
	<script type="text/javascript" src="<?php echo $caminho .'lib/js/maskinput.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/Utils.js'); ?>"></script>
    	
    <!-- CARREGA ARQUIVOS JS POR PÁGINA EM EXIBIÇÃO --> 		
	<?php echo (!empty($js)) ? $js : 'HOUVE UM ERRO NO CARREGAMENTO DE ARQUIVOS JS !'; ?>

	<script type="text/javascript" src="<?php echo base_url('assets/js/FileServiceCorreios.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/view.js'); ?>"></script>
	
	</body>
</html>