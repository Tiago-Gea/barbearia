<html lang="pt-BR">
	<head>
		<head>
		<meta charset="utf-8">
		<title>IFSP-Barbearia - Listagem de Agendamentos</title>
		<link rel="stylesheet" href="estilos.css">
	</head>
	</head>
	<body>
		<div class="container">
			
			<?php
				include "funcoes.inc";
				include "cabecalho.inc";
				include "menu.inc";
				if(file_exists("agendas.xml")){
					include "tabela_agenda.inc";
				}else{
					echo "<section>
							<h2>Nenhum agendamento cadastrado.</h2>
						</section>";
				}
				include "rodape.inc";
			?>	
		</div>
	</body>
</html>		
		
		
		