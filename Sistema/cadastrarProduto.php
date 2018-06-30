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
						<input value="Logoff" type="submit" id="cadastro">
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
		<form action="cadastrar.php" method="POST" id="cadastro3">

			<?php
				$conexao = mysqli_connect('localhost','root','','baguncinha');
					
				$querie = "SELECT * FROM especialidade";

				$resut = mysqli_query($conexao, $querie);

				$resulta = mysqli_fetch_all($resut);
				
			?>
			
			<p>Nome:</p>
			<input class="nome" type="text" name="name" required="true">

			

			<p>Especialidade:</p>
			<select class="esp" name="esp" form="cadastro" required="true">
			    <option disabled selected value></option>

				<?php 
				
				$max = sizeof($resulta);
				
				for($i=0; $i<=$max-1;$i++){


					echo "<option value=".$resulta[$i][0].">".$resulta[$i][1]."</option>";

				}
				?>		
			</select>

			<p>Custo:</p>
			<input class="custo" type="number" name="cost" required="true" min="1">

			<p>Horas de Trabalho:</p>
			<input class="ht" type="number" name="time" required="true" min="1">

			<?php
								
				$querie = "SELECT * FROM tipo";
				
				$resuti = mysqli_query($conexao, $querie);
				
				$resolt = mysqli_fetch_all($resuti);
							
			?>

			<p>Tipo:</p>
			<select class="tipo" name="type" form="cadastro" required="true">
			<option disabled selected value></option>
			<?php 
				
				$max = sizeof($resolt);
				
				for($i=0; $i<=$max-1;$i++){

					echo "<option value=".$resolt[$i][0].">".$resolt[$i][1]."</option>";

				}
				?>	
			</select>

			<?php

				$querie = "SELECT * FROM localidade";

				$resutia = mysqli_query($conexao, $querie);

				$resilt = mysqli_fetch_all($resutia);

			?>

			<p>Localidade:</p>
			<select class="local" name="place" form="cadastro" required="true">
			<option disabled selected value></option>
			<?php 
				
				$max = sizeof($resilt);
				
				for($i=0; $i<=$max-1;$i++){

					echo "<option value=".$resilt[$i][0].">".$resilt[$i][1]."</option>";

				}				
				?>
			</select> <br> <br>
			<input class="btn-cadfunc" type="submit" value="Cadastrar funcionário">
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
	</body>
</HTML>
