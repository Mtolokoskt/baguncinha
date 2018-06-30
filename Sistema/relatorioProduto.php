<table>
	<tr>
		<th>Nome</th>
		<th>Especialide</th>
		<th>Custo_hora</th>
		<th>Preço_hora</th>
		<th>Tipo</th>
		<th>Status</th>
		<th>Casa</th>
	</tr>

	<?php
		$conexao = mysqli_connect('localhost','root','','baguncinha');
		$query ="SELECT nome_produto, especialidade.especialidade, custo, qtd_hora , tipo.tipo, status.status, localidade.casa FROM produto
				INNER JOIN especialidade ON produto.id_especialidade = especialidade.id_especialidade
				INNER JOIN tipo ON produto.id_tipo = tipo.id_tipo
				INNER JOIN status ON produto.id_status = status.id_status
				INNER JOIN localidade ON produto.id_localidade = localidade.id_localidade;";
	
		$resultado = mysqli_query($conexao, $query);
		$res = mysqli_fetch_all($resultado);
		$max = sizeof($res);

		for($i=0; $i<$max; $i++){

			echo "<tr>
					<td> ".$res[$i][0]." </td>
					<td> ".$res[$i][1]." </td>
					<td> ".$res[$i][2]." </td>
					<td> ".$res[$i][3]." </td>
					<td> ".$res[$i][4]." </td>
					<td> ".$res[$i][5]." </td>
					<td> ".$res[$i][6]." </td>
			     </tr>";
		}
		
		mysqli_close($conexao)
	?>
</table>