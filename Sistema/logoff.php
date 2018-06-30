<HTML>
	<HEAD>
		<title>Login</title>
	</HEAD>
	
	<BODY>
		
		<?php
		
			if (!isset($_SESSION)) session_start();
			
			session_destroy();
			
			header("Location: index.php"); exit;
			
		?>
		
		
	</BODY>


</HTML>