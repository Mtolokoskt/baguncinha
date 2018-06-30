<?php
			//if (!isset($_SESSION)) session_start();
			//if (!isset($_SESSION['usuario'])) {

				//header("Location: index.php"); exit;

			//}

		?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> BAGUNCINHA </title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
		<link rel="icon" href="img/logo.jpg">
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
								<input value="Logoff" type="submit" id="cadastro2">
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

					}?>
				</ul>
			</nav>
		</header>
		<div class="banner">
			<div class="title">
				<h5> BAGUNCINHA </h5>
				<h2> AS MELHORES GAROTAS VOCÊ SÓ ENCONTRA AQUI ! </h2>
				<h3> VARIADOS TIPOS E GOSTOS !</h3>
				<h4> SUGESTÕES </h4>
				<div id="galeria">
					<a href="pages/asiatica1.php"> <img src="img/asiatica1.jpg" alt="teste"></img> </a>
					<a href="pages/asiatica2.php"> <img src="img/asiatica2.jpg" alt="teste"></img> </a>
					<a href="pages/loira.php"> <img src="img/loira.jpg" alt="teste"></img> </a>
					<a href="pages/morena1.php"> <img src="img/morena1.jpg" alt="teste"></img> </a>
					<a href="pages/morena2.php"> <img src="img/morena2.jpg" alt="teste"></img> </a>

				</div>

			</div>

				<div style="margin-left: 40%; margin-top: 250px; float: left;" class="vtem-block-inside clearfix"><h3 class="custom-html-title clearfix">INFORMAÇÕES BAGUNCINHA</h3>
						<div class="custom-html-content clearfix">
						<ul class="list-link">
							<ul class="list-link">
								<li><a href="#"> Aberto de Segunda à Sábado das 20h às 04h.</a></li>
								<li><a href="#"> Amplo Estacionamento Gratuito.</a></li>
								<li><a href="#"> WhatsApp: <img src="img/whatz.png" width="16" height="16"> (16) 9-9999.8989</a></li>
								<li><a href="#"> Entrada permitida somente para maiores de 18 anos.</a></li>
								<li><a href="#"> Wifi.</a></li> <br>
							</ul>
						</ul>

						<ul class="list-link">
							<li><img style="display: block; margin-left: auto; margin-right: auto;" src="img/cartoes.png"></li> <br>
						</ul>
					</div>
					<div  style="float: left;" class="vtem-block-inside clearfix">Baguncinha Palace © 2018. Todos os direitos Reservados.</div>
					</div>
				</div>





	</div>

			</div>
		</div>

	<script src="js/script.js"></script>


	</body>
</html>
