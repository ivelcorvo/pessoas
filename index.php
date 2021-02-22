<?php
	require_once("funcoes.php");
?>

<!DOCTYPE html>
<html lang = 'pt-br'>
	<head>
		<meta charset="utf-8">
		<meta name='author' content='Levi Alves'>
		<meta name='description' content='aprendendo php'>
		<meta name='robots' content='index, nofollow'>
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<meta http-equiv='X-UA-Compatible' name='ie=edige'>		
		<title>php</title>
		<link rel='stylesheet' type='text/css' href='_css/estilo.css'>		
	</head>
	<body>
		<div class='header'>
			<h1> PHP </h1>
		</div>

		<div class='conteiner'>
			<section class='principal'>
				
				<?php

					adicionarPessoa($pessoas, 'Levi', 24, 'Sertãozinho');
					adicionarPessoa($pessoas, 'Mariana', 18, 'Sertãozinho');
					adicionarPessoa($pessoas, 'Caio', 20, 'Sertãozinho');			
					echo'</br>';
					echo'Total de pessoas: '.getQuantidade($pessoas).'</br>';
					imprimir($pessoas);

					for($x=1; $x<=213; $x++){
						echo'|';
					}
													
					echo'</br>';
					remover($pessoas,'Caio');
					echo'Total de pessoas: '.getQuantidade($pessoas).'</br>';					
					imprimir($pessoas);
				?>
	
			</section>
		</div>
		<footer>			
		</footer>			
	</body>
</html>