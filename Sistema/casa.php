<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
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
										<input value="Logoff" type="submit" id="cadastro2">
										</form>';
								}

							?>
						</div>

			<nav class="menu">
				<a class="btn-close"> x </a>
				<ul>
					<li> <a href="index.php"> INICIO                 </a> </li>
					<li> <a href="contato.php"> CONTATO               </a> </li>
					<li> <a href="casa.php"> SOBRE A CASA           </a> </li>
					<li> <a href="trabalhe.php"> TRABALHE CONOCO    </a> </li>
					<?php if($menu){
						echo "<li> <a href='dash.php'> CADASTRAR  </a> </li>";
						echo "<li> <a href='logoff.php'> 	SAIR                 	</a> </li>";

					}?>
			</nav>
		</header>
		<div class="banner">
			<div class="title">
				<h5> SOBRE A CASA </h5>
        <h3> O Baguncinha Palace é uma casa de entretenimento localizada na cidade de Araraquara, no interior <br>de São Paulo. Possuimos as melhores garotas do interior,
          em variados generos e que fazem variados tipos <br>de serviços de acordo com que o cliente deseja. Contamos com variados tipos de quartos, de <br> acordo com o gosto de cada cliente,
        além de um bar ao ar livre e palco para shows. </h3>
        <h2> <br>A MELHOR CASA DO INTERIOR DE SÃO PAULO </h2>
        <h2> VENHA NOS VISITAR <br></h2>
				<div id="galeria2">
				  <img src="img/noite-sem-pressa-1.jpg" alt="teste"></img>
          <img src="img/noite-sem-pressa-2.jpg" alt="teste"></img>
          <img src="img/noite-sem-pressa-3.jpg" alt="teste"></img>
				</div>

			</div>
			<div class="vtem-block-inside clearfix"><h3 class="custom-html-title clearfix">INFORMAÇÕES BAGUNCINHA</h3>
			<div class="custom-html-content clearfix"><ul class="list-link">
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
</ul></div></div>
<div class="vtem-block-inside clearfix">Baguncinha © 2018. Todos os direitos Reservados.</div>
		</div>



	<script>
	$(".btn-menu").on('click', function(){
		$('.menu').show();
	});
	$(".btn-close").on('click', function(){
		$(".menu").hide();
	});
	</script>
	</body>
</html>
