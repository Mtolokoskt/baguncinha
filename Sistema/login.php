<?php 
	$nome = $_POST['usuario'];
	$senha = $_POST['senha'];
	
	$conexao = mysqli_connect('localhost','root','','baguncinha');
	
	$query = "SELECT * FROM funcionario WHERE usuario = '".$nome."' AND senha = '".$senha."'";
	$res = mysqli_query($conexao, $query);
	
	if (mysqli_num_rows($res) > 0){
		echo "Login efetuado com sucesso!";
		
		$usuario = mysqli_fetch_assoc($res);
				 
				 // Se a sessão não existir, inicia uma
				if (!isset($_SESSION)) session_start();
				
				// Salva os dados encontrados na sessão
                $_SESSION['usuario'] = $usuario['usuario'];	              
		
		header("Location: inicio.php"); exit;
		mysqli_close($conexao);
	}else{
		echo "Usuário ou senha inválidos";
	}