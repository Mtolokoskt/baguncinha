<?php
	if (!isset($_SESSION)) session_start();
	if (!isset($_SESSION['usuario'])) {
	header("Location: index.php");
	exit;
	}
?>
<HTML>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> BAGUNCINHA </title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
		<link rel="icon" href="img/fire.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>
	</head>

	<body>

		<header class="cabecalho">
			<a href="index.php"> <h1 class="logo"> BAGUNCINHA </h1> </a>
			<button class="btn-menu"> <img src="https://png.icons8.com/menu/ios7/25"> </button>

	<div class="bnv">
	<?php
				if (!isset($_SESSION)) session_start();

				if (isset($_SESSION['usuario'])) {
					$menu = true;
					echo "Bem vindo, " . $_SESSION['usuario'];

					echo
						'<form method="post" action="logoff.php">
						<input value="Logoff" type="submit" id="cadastro2	">
						</form>';
				}
				else{
					echo
						' <form class="login" method="POST" action="login.php">
							<label>Usuário:</label>
							<input type="text" name="usuario">

							<label>Senha:</label>
							<input type="password" name="senha">

							<input type="submit" id="cadastro">
						</form>
						';

				}
			?>
	</div>
	<nav class="menu">
		<a class="btn-close"> x </a>
		<ul>
			<li> <a href="index.php"> 	 INICIO             </a> </li>
			<li> <a href="contato.php">  CONTATO            </a> </li>
			<li> <a href="casa.php"> 	 SOBRE A CASA       </a> </li>
			<li> <a href="trabalhe.php"> TRABALHE CONOCO    </a> </li>
			<?php if($menu){
				echo "<li> <a href='dash.php'> GERENCIAR  </a> </li>";
				echo "<li> <a href='logoff.php'> 	SAIR                 	</a> </li>";

			}
			?>
		</ul>
	</nav>
</header>

		<div class="banner">
		<form action="atualizar.php" method="POST" id="atualizar">
			<?php

				$conexao = mysqli_connect('localhost','root','','baguncinha');
					
				$query = "SELECT * FROM produto where nome_produto <> ''";

				$res = mysqli_query($conexao, $query);

				$resultado = mysqli_fetch_all($res);

			?>
			<p>Produto:</p>
			<select class="prod" name="produto" form="atualizar" required="true">
			<option disabled selected value></option>
				<?php

			    $max = sizeof($resultado);
				
				for($i=0; $i<=$max-1;$i++){

					echo "<option value=".$resultado[$i][0].">".$resultado[$i][1]."</option>";

				}
				?>
			</select>

			<?php
				$quer = "SELECT * FROM status";

				$resu = mysqli_query($conexao, $quer);

				$resultad = mysqli_fetch_all($resu);
				?>
			

			<p>Status:</p>
			<select class="status" name="status" form="atualizar" required="true">
			    <option disabled selected value></option>
			
				<?php 
				
				$max = sizeof($resultad);
				
				for($i=0; $i<=$max-1;$i++){

					echo "<option value=".$resultad[$i][0].">".$resultad[$i][1]."</option>";

				}
				?>>
			</select> <br> <br>

			<input class="btn-cadfunc" type="submit" value="Atualizar Status">
		</form>
		<div class="banner">

			<script>
			$(".btn-menu").on('click', function(){
				$('.menu').show();
			});
			$(".btn-close").on('click', function(){
				$(".menu").hide();
			});
			</script>
	</div>
	</body>
</HTML>
