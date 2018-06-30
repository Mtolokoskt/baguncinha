<!doctype html>
<html>

<head>
	<meta charset="UTF-8-BOM">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> BAGUNCINHA </title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link rel="icon" href="img/fire.png">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>

</head>

<body>
<div class="banner">
		<div class="title">
			<h5> BAGUNCINHA </h5>
			<h2> AS MELHORES GAROTAS VOCÊ SÓ ENCONTRA AQUI ! </h2>
		</div>
	
	<!-- <img src="../img/asiatica2.jpg" alt="asiatica2" width="800" height="800"> -->
	<?php
		$conexao = mysqli_connect('localhost','root','','baguncinha');
		
		$query = "select * from produto p 
				inner join tipo t on t.id_tipo = p.id_tipo
				inner join especialidade e on e.id_especialidade = p.id_especialidade
				inner join status s on s.id_status = p.id_status
				where nome_produto = 'Pamela Rodrigues'
				order by p.nome_produto asc;";
			
		$res = mysqli_query($conexao, $query);
		
	
		$dados = mysqli_fetch_assoc($res);
		
		
		mysqli_close($conexao);
	?>
	
	<table class="banner">
		<tr>
			<td>Nome</td>
			<td>Custo</td>
			<td>Quantidade</td>
			<td>Tipo</td>
		</tr>
		<tr>
			<td><?= $dados['nome_produto'] ?></td>
			<td><?= $dados['custo'] ?></td>
			<td><?= $dados['qtd_hora'] ?></td>
			<td><?= $dados['tipo'] ?></td>
		</tr>
	</table>


</body>

</html>