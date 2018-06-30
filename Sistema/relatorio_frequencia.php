<table>
	<tr>
		<th>Nome</th>
		<th>Quarto</th>
		
	</tr>

	<?php
		$conexao = mysqli_connect('localhost','root','','baguncinha');
		$query ="SELECT p.nome_produto AS 'Nome', q.nome AS 'Quarto' FROM servico s
        INNER JOIN produto p ON p.id_produto = s.id_produto
        INNER JOIN quarto q ON q.id_quarto = s.id_quarto";
	
		$resultado = mysqli_query($conexao, $query);
		$res = mysqli_fetch_all($resultado);
		$max = sizeof($res);

		for($i=0; $i<$max; $i++){

			echo "<tr>
					<td> ".$res[$i][0]." </td>
					<td> ".$res[$i][1]." </td>
					
			     </tr>";
		}
		
		mysqli_close($conexao)
	?>
</table>