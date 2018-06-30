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
		<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
		<link rel="icon" href="img/fire.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>

	</HEAD>

	<BODY>
		<header class="cabecalho">
			<a href="index.php"> <h1 class="logo"> BAGUNCINHA </h1> </a>
			<button class="btn-menu"> <img src="https://png.icons8.com/menu/ios7/25"> </button>

	<div class="bnv">
	<?php
				if (!isset($_SESSION)) session_start();

				if (isset($_SESSION['usuario'])) {
					$menu = true;
					echo "Bem vindo,   " . $_SESSION['usuario'];

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

			}?>
		</ul>
	</nav>
</header>

<div class="banner">


		 <form action="cadastrarProduto.php" method="POST">
 			<input class="btn-cad" type="submit" value="Cadastrar produto">
		</form> <br>

 		<form action="atualizarStatusProduto.php" method="POST">
 			<input class="btn-atu" type="submit" value="Atualizar Status Produto">
 		</form> <br>

 		<form action="relatorios.php" method="POST">
 			<input class="btn-rel" type="submit" value="Relatorios">
 		</form>


 </div>

 <script>
 $(".btn-menu").on('click', function(){
	 $('.menu').show();
 });
 $(".btn-close").on('click', function(){
	 $(".menu").hide();
 });
 </script>


	</BODY>
</HTML>
