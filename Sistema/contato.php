<html>
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
					<li> <a href="index.php"> INICIO                 </a> </li>
					<li> <a href="contato.php"> CONTATO               </a> </li>
					<li> <a href="casa.php"> SOBRE A CASA           </a> </li>
					<li> <a href="trabalhe.php"> TRABALHE CONOCO    </a> </li>
					<?php if($menu){
						echo "<li> <a href='dash.php'> CADASTRAR  </a> </li>";
						echo "<li> <a href='logoff.php'> 	SAIR                 	</a> </li>";

					}?>
				</ul>
			</nav>

		</header>

		<div class="banner">
			<div class="title">

		<form action="cadastro_contato.php" method="POST">

			<div class="banner">
			<form action="cadastrar.php" method="POST" id="cadastro3">
				<p>Nome:</p>
				<input class="nome" type="text" name="nome" required="true">

				<p>Email:</p>
				<input class="email" type="text" name="email" required="true">

				<p>Telefone:</p>
				<input class="custo" type="number" name="custo" required="true" min="1">

				<p>Tipo de contato:</p>
				<select class="tipo" name="tipo" required="true">
				<option disabled selected value></option>
					<option value="reclamacao">Reclamações</option>
					<option value="informacao">Informações</option>
					<option value="sugestao">Sugestões</option>
				</select>

				<p>Mensagem:</p>
				<input class="msg" type="text" name="msg" required="true"> <br> <br>
				<input class="btn-cadfunc" type="submit">
			</form>
			<div class="banner">

			  <div class="vtem-block-inside clearfix"> Baguncinha Palace © 2018. Todos os direitos Reservados. </div> <br>
</form>

				</div>
			</div>
			<script src="js/script.js"></script>
		</body>
</html>
