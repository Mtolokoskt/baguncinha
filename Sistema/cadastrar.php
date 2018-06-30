<?php 
	$nome = $_POST['name'];
	$especialidade = $_POST['esp'];
	$custo = $_POST['cost'];
	$horastrab = $_POST['time'];
	$tipo = $_POST['type'];
	$localidade = $_POST['place'];
	
	$conexao = mysqli_connect('localhost','root','','baguncinha');
	
	$query = "INSERT INTO produto (nome_produto, id_especialidade, custo, qtd_hora, id_tipo, id_status, id_localidade)
				VALUES ('$nome', '$especialidade', '$custo', '$horastrab', '$tipo', 2, '$localidade');			
				";
	$res = mysqli_query($conexao, $query);
	mysqli_close($conexao);

	header("Location: cadastrarProduto.php");

?>	