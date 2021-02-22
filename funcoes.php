<?php
	$pessoas = [];

	function adicionarPessoa(&$p, $nome, $idade, $cidade){
		$p[] = ['nome'=>$nome, 'idade'=>$idade, 'cidade'=>$cidade];
	}
	//===============================================================
	function imprimir($p){
		$i = count($p);
		for ($e = 0; $e <= $i-1; $e++){
			var_dump($p[$e]);
			echo'<hr>';
		}		
	}
	//===============================================================
	function getQuantidade($p){
		return count($p);
	}
	//===============================================================
	function remover(&$p,$nome){
		$i = array_search($nome, array_column($p,'nome')); // array_column seleciona uma coluna de um array associativo
		if(is_integer($i)){
			array_splice($p, $i, 1); // revome do array / apartir do indice / quantidade que será removida	
		}else
			echo'Nome não encontrado';
	}
?>