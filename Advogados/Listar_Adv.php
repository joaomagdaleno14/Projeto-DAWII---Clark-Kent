<?php
	include_once("../Class/Carregar.class.php");
	$objUsuarios = new Advogados();
	$resultado = $objUsuarios->listar();
	
	
?>
	<h4> Advogados</h4>
	<hr>
	<thead>
		<th>ID</th>
		<th>Nome</th>
		<th>Email</th>
		<th>CNA</th>
		<th>Endereco</th>
		<th>Telefone</th>
		<th>Especialização</th>
		<th>Tipo</th>
		<th>Senha</th>
		</thead>
		<tbody>
		<?php
			foreach($resultado as $dados){
				echo "<tr>
					<td>$dados->ID</td>
					<td>$dados->Nome</td>
					<td>$dados->Email</td>
					<td>$dados->CNA</td>
					<td>$dados->Endereco</td>
					<td>$dados->Telefone</td>
					<td>$dados->Especializacao</td>
					<td>$dados->Tipo</td>
					<td>$dados->Senha</td>
					<td><a href='Editar_Adv.php?ID=$dados->ID'></a></td>
					<td><a href='Excluir_Adv.php?ID=$dados->ID'></a></td>
					</tr>";
			}
		?>
		<tbody>
	</table>
