<?php
	include_once("../Class/Carregar.class.php");
	$objUsuarios = new Usuarios();
	$resultado = $objUsuarios->listar();
	
	
?>
	<h4> Usuarios</h4>
	<hr>
	<thead>
		<th>ID</th>
		<th>Nome</th>
		<th>Email</th>
		<th>CPF</th>
		<th>Endereco</th>
		<th>Telefone</th>
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
					<td>$dados->CPF</td>
					<td>$dados->Endereco</td>
					<td>$dados->Telefone</td>
					<td>$dados->Tipo</td>
					<td>$dados->Senha</td>
					<td><a href='Editar_Usuarios.php?ID=$dados->ID'></a></td>
					<td><a href='Excluir_Usuarios.php?ID=$dados->ID'></a></td>
					</tr>";
			}
		?>
		<tbody>
	</table>
