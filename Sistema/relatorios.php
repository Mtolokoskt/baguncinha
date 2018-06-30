<?php
	if (!isset($_SESSION)) session_start();
	if (!isset($_SESSION['usuario'])) {
		header("Location: index.php"); 
		exit;
	}
?>
<HTML>
	<HEAD>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> BAGUNCINHA </title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
		<link rel="icon" href="img/fire.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>
	</HEAD>
	
	<BODY>
		<form action="relatorioProduto.php" method="POST" target="_blank">
			<input type="submit" value="Produtos">
		</form>
		
		<form action="relatorioQuarto.php" method="POST" target="_blank">
			<input type="submit" value="Quartos">
		</form>
		
		<form action="relatorio_frequencia.php" method="POST" target="_blank">
			<input type="submit" value="Frequência de uso de Quartos">
		</form>
		
		<script>
		
			/*function puxarRelatorio(){
				
				
				$.ajax({
					method: "POST",
					url: "relatorioQuarto.php",
					success: function(response){
					
						console.log(response);
						
					},
					error: function(response){
						
						console.log('erro');
					}					
				});
				
			}*/
		
		</script>
		
	</BODY>
</HTML>