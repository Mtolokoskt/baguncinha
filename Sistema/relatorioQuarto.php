<table>
	<tr>
		<th>Nome</th>
		<th>Status</th>
		<th>Preço_hora</th>
	</tr>

	<?php
		$conexao = mysqli_connect('localhost','root','','baguncinha');
		$query ="SELECT nome, statusquarto.statusquarto, precohora FROM quarto
					INNER JOIN statusquarto ON quarto.id_statusquarto = statusquarto.id_statusquarto;";
	
		$resultado = mysqli_query($conexao, $query);
		$res = mysqli_fetch_all($resultado);
		$max = sizeof($res);

		for($i=0; $i<$max; $i++){

			echo "<tr>
					<td> ".$res[$i][0]." </td>
					<td> ".$res[$i][1]." </td>
					<td> ".$res[$i][2]." </td>
			     </tr>";
		}
		
		mysqli_close($conexao)
	?>
</table>