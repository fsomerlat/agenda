<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-07-27 20:55:27 --> 404 Page Not Found: /index
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-07-27 20:55:27 --> 404 Page Not Found: /index
ERROR - 2017-07-27 20:55:30 --> 404 Page Not Found: /index
ERROR - 2017-07-27 20:55:30 --> 404 Page Not Found: /index
ERROR - 2017-07-27 20:55:30 --> 404 Page Not Found: /index
ERROR - 2017-07-27 20:55:37 --> 404 Page Not Found: /index
ERROR - 2017-07-27 20:55:37 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:10:48 --> Severity: Warning --> mysqli::real_connect(): (HY000/1049): Unknown database 'CodIgniter' /var/www/agenda/system/database/drivers/mysqli/mysqli_driver.php 201
ERROR - 2017-07-27 21:10:48 --> Unable to connect to the database
ERROR - 2017-07-27 21:11:10 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:11:10 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:11:10 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:11:12 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:11:12 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:11:12 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:20:03 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:20:03 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:20:03 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:28:00 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:28:00 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:28:00 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:28:03 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:28:03 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:28:06 --> Query error: Table 'agenda.tsUsuario' doesn't exist - Invalid query: SELECT 
						idUsuario,cpNome,cpSenha,cpStatus,cpNivelAcesso
				   FROM
				   		tsUsuario
				   WHERE
				   	cpNome = 'Fabio' AND cpSenha = '40bd001563085fc35165329ea1ff5c5ecbdbbeef' 
ERROR - 2017-07-27 21:30:17 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:30:17 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:30:17 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:30:26 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:30:26 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:30:35 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:30:35 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:30:42 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:30:42 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:30:42 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:30:48 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:30:48 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:30:48 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:31:00 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:31:00 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:31:00 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:31:02 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:31:02 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:31:02 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:31:13 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:31:13 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:31:13 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:31:15 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:31:15 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:31:15 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:31:16 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:31:16 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:31:16 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:31:17 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:31:17 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:31:17 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:32:03 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:32:03 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:32:03 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:32:05 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:32:05 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:32:05 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:32:11 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:32:11 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:32:11 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:33:52 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:33:52 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:33:52 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:33:52 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:33:52 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:33:52 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:33:53 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:33:53 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:33:53 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:33:53 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:33:53 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:33:53 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:33:54 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:33:54 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:33:54 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:33:54 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:33:54 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:33:54 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:33:55 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:33:55 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:33:55 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:33:55 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:33:55 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:33:55 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:33:56 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:33:56 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:33:56 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:33:56 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:33:56 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:33:56 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:33:56 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:33:56 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:33:56 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:36:45 --> 404 Page Not Found: ../modules/email/controllers//index
ERROR - 2017-07-27 21:36:57 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:36:57 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:36:57 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:37:03 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:37:03 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:37:04 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:37:19 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:37:19 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:37:19 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:37:23 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:37:23 --> Query error: Table 'agenda.teCliente' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,prof.cpEspecilidadeProfissional,serv.cpValorServico,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
				   FROM
						Agenda as ag
						
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
					
					GROUP BY
						
						prof.cpNomeProfissional ,ag.idAgenda
						
					ORDER BY
					
						ag.cpHoraAgendamento ASC
			
					 
ERROR - 2017-07-27 21:37:23 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:37:36 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT
						ag.idAgenda,prof.cpEspecilidadeProfissional,ag.cpClienteNaoCadastrado,serv.cpValorServico,prof.cpNomeProfissional,
						serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,cpDataCancelamento,ag.cpObservacaoAgenda
				FROM
				
	 				Agenda as ag 
				
				INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
				INNER JOIN teProfissional as prof ON prof.idProfissional =  ag.teProfissional_idProfissional	
				
				GROUP BY 
					
					prof.cpNomeProfissional,ag.idAgenda
					
				ORDER BY 
					
					ag.cpHoraAgendamento ASC
			
ERROR - 2017-07-27 21:40:03 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:40:16 --> Query error: Table 'agenda.teServico' doesn't exist - Invalid query: SELECT 
						
									ag.idAgenda,cli.cpNomeCliente,prof.cpNomeProfissional,serv.cpValorServico,cli.cpSobreNomeCliente,prof.cpEspecilidadeProfissional,
									serv.cpNomeServico,ag.cpDataAgendamento,ag.cpHoraAgendamento,ag.cpDataCancelamento,ag.cpObservacaoAgenda
								
								  FROM
									 Agenda as ag
								 
									 INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
									 INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente 
									 INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
								
								WHERE 
									ag.idAgenda = 1
ERROR - 2017-07-27 21:40:52 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:41:23 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:41:30 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:41:30 --> Query error: Table 'agenda.tuAgenda' doesn't exist - Invalid query: SELECT 
						ag.idAgenda,ag.cpDataAgendaMento,ag.cpHoraAgendamento,cli.cpNomeCliente,cli.cpSobreNomeCliente,
						serv.cpNomeServico		
						
					FROM	
						tuAgenda as ag
		
					INNER JOIN teCliente as cli ON cli.idCliente = ag.teCliente_idCliente
					INNER JOIN teServico as serv ON serv.idServico = ag.teServico_idServico
					INNER JOIN teProfissional as prof ON prof.idProfissional = ag.teProfissional_idProfissional
ERROR - 2017-07-27 21:41:36 --> 404 Page Not Found: ../modules/email/controllers//index
ERROR - 2017-07-27 21:41:47 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:41:47 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:41:47 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:41:50 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:41:50 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:41:50 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:41:57 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:41:57 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:42:05 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:42:11 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:42:11 --> 404 Page Not Found: /index
ERROR - 2017-07-27 21:42:11 --> 404 Page Not Found: /index
