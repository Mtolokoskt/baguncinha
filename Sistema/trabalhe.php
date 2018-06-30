<html>

<head>

	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trabalhe Conosco</title>


	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>jQuery UI Accordion - Default functionality</title>
		<link rel="stylesheet" href="css/style.css">
	  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  <link rel="stylesheet" href="/resources/demos/style.css">
	  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	  <script>
	  $( function() {
		$( "#accordion" ).accordion();
	  } );
	  </script>

</head>
<body>
<header class="cabecalho">
          <a href="inicio.php"> <h1 class="logo"> BAGUNCINHA </h1> </a>
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
				<li> <a href="trabalhe.php"> TRABALHE CONOCO                 </a> </li>
				<?php if($menu){
					echo "<li> <a href='dash.php'> CADASTRAR  </a> </li>";
					echo "<li> <a href='logoff.php'> 	SAIR                 	</a> </li>";

				}?>

			</nav>
		</header>

	<div class="banner">

	<div class="container">
	<br>

	<div id="accordion">
  <h3>Auxiliar de Limpeza</h3>
  <div>
    <p>
		Área e especialização profissional: Serviços Gerais - Limpeza <br>
		Nível hierárquico: Auxiliar <br>
		Local de trabalho: Araraquara - SP <br>
		Irá trabalhar em casa noturna das 19hs às 07hs de segunda á sexta. <br>
		Responsável por manter a limpeza do local.<br>

    </p>
  </div>
  <h3>Auxiliar de Limpeza</h3>
  <div>
    <p>
		Área e especialização profissional: Serviços Gerais - Limpeza <br>
		Nível hierárquico: Auxiliar <br>
		Local de trabalho: Araraquara - SP <br>
		Irá trabalhar em casa noturna das 07hs às 19hs de segunda á sexta. <br>
		Responsável por manter a limpeza do local.<br>
    </p>
  </div>
  <h3>Segurança</h3>
  <div>
    <p>
		Área e especialização profissional: Segurança <br>
		Nível hierárquico: Operacional <br>
		Local de trabalho: São Paulo, SP <br>
		Atuar como segurança patrimonial, realizar rondas nas imediações, relatar ocorrências, entre demais atividades. <br>
		Desejável experiência como segurança. <br>

    </p>
  </div>
  <h3>Recepcionista</h3>
  <div>
    <p>
    Área e especialização profissional: Hotelaria, Turismo - Recepção <br>
	Nível hierárquico: Operacional <br>
	Local de trabalho: Araraquara, SP <br>
	Recepciona, identifica e orienta hóspedes sobre os serviços de "hospedagem", "realiza check-in" e "check-out" <br>
    </p>
  </div>
</div>

		<form class="form-horizontal" method="POST" action="enviar_trabalhe.php" enctype="multipart/form-data">
		  <fieldset>


			<legend class="contrata">Baguncinha Contrata</legend>




			<div class="form-group">
			  <label class="col-md-4 control-label" for="nome">Nome</label>
				<div class="col-md-4">
				  <input id="nome" name="nome" placeholder="Informe seu nome" class="form-control input-md" required="" type="text">
				</div>
			</div>


			<div class="form-group">
			  <label class="col-md-4 control-label" for="nome">Email</label>
				<div class="col-md-4">
				  <input id="replyto" name="replyto" placeholder="Informe seu email" class="form-control input-md" required="" type="text">
				</div>
			</div>


			<div class="form-group">
			  <label class="col-md-4 control-label" for="nome">Assunto</label>
				<div class="col-md-4">
				  <input id="assunto" name="assunto" placeholder="Informe o assunto da mensagem" class="form-control input-md" required="" type="text">
				</div>
			</div>


			<div class="form-group">
			  <label class="col-md-4 control-label" for="mensagem">Mensagem</label>
				<div class="col-md-4">
				  <textarea class="form-control" id="mensagem" name="mensagem"></textarea>
				</div>
			</div>


			<center>
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
				<div class="col-md-4">
				  <button type="submit" class="btn btn-inverse">Enviar</button>
				</div>
			</div>

		  </fieldset>
		</form>

		<div class="vtem-block-inside clearfix rodape">Baguncinha © 2018. Todos os direitos Reservados.</div>

		<script src="js/script.js"></script>
	</div>

</div>



  </body>






































</html>
