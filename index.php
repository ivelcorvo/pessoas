<?php
	$pessoas = [];

	function adicionarPessoa(&$p, $nome, $idade, $cidade){
		$p[] = ['nome'=>$nome, 'idade'=>$idade, 'cidade'=>$cidade];
	}

	function imprimir($p){
		$i = count($p);
		for ($e = 0; $e <= $i-1; $e++){
			var_dump($p[$e]);
			echo'<hr>';
		}		
	}

	function getQuantidade($p){
		return count($p);
	}

	function remover(&$p,$nome){
		$i = array_search($nome, array_column($p,'nome')); // array_column seleciona uma coluna de um array associativo
		if(is_integer($i)){
			array_splice($p, $i, 1); // revome do array / apartir do indice / quantidade que será removida	
		}else
			echo'Nome não encontrado';
	}

?>


<!DOCTYPE html>
<html lang = 'pt-br'>
	<head>
		<title>php</title>
		<link rel='stylesheet' href='_css/estilo.css'>
		<meta charset="utf-8">
	</head>
	<body>
		<div class='header'>
			<h1> PHP </h1>
		</div>

		<div class='conteiner'>
			<div class='principal'>
				
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
	
			</div>
		</div>
		<div class='footer'>			
		</div>	
	</body>
</html>