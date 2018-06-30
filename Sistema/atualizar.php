<?php 
	$idproduto = $_POST['produto'];
	$status = $_POST['status'];
	
	$conexao = mysqli_connect('localhost','root','','baguncinha');
	
	$query = "UPDATE produto 
				SET id_status ='$status' 
				WHERE id_produto = '$idproduto'		
				";
	$res = mysqli_query($conexao, $query);
	mysqli_close($conexao);
	header("Location: atualizarStatusProduto.php");
?>