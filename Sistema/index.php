
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

			<nav class="menu">
				<a class="btn-close"> x </a>
				<ul>
					<li> <a href="index.php"> INICIO                 </a> </li>
					<li> <a href="contato.php"> CONTATO               </a> </li>
					<li> <a href="casa.php"> SOBRE A CASA           </a> </li>
					<li> <a href="trabalhe.php"> TRABALHE CONOCO                 </a> </li>
					<?php if($menu){
						echo "<li> <a href='dash.php'> CADASTRAR  </a> </li>";
						echo "<li> <a href='logoff.php'> 	SAIR                 	</a> </li>";

					}?>

			</nav>
		</header>
		<div class="banner">
			<div class="title">
				<h5> BAGUNCINHA </h5>
				<h2> Os conteúdos que você pretende vizualizar podem incluir<br> texto, imagens ou outros materiais para adultos </h2>
        <h3> Esses conteúdos são dirigidos especificamente para pessoas maiores de idade e que, segundo a <br> legislação aplicável, tenham plena capacidade para acessar produtos
        relacionados a sexo e outros.<br> Fica terminantimente proibido o acesso a esses materiais por aqueles que não cumpram <br>tais requisitos. Caso você não atenda a algum dos requesitos anteriormente
      expostos fica obrigado a clicar <br>em Sair. Para acessar o conteudo, é obrigatorio fazer o login. </h3> <br>
		<button class="btn-sim" onclick="window.location.href='inicio.php'">SIM</button>
		<button class="btn-nao" onclick="window.location.href='http://www.google.com'">NÃO</button>
		<div style="margin-left: -40px;" class="vtem-block-inside clearfix rodape">Baguncinha © 2018. Todos os direitos Reservados.</div>
			</div>

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
