<?php
	include_once("../Class/Carregar.class.php");
	$objCategorias = new Processos();
	$resultado = $objCategorias->listar();
	
	
?>
	<h4> Processos</h4>
	<hr>
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>ID_User</th>
				<th>ID_Adv</th>
			</tr>
        </thead>
		<tbody>
		<?php
			foreach($resultado as $dados){
				echo "<tr>
					<td class='hidden-phone'>$dados->ID</td>
					<td>$dados->Nome</td>
					<td>$dados->ID_Adv</td>
					<td>$dados->ID_User</td>
					<td ><a href='Editar_Prc.php?ID=$dados->ID'></a></td>
					<td	><a href='Excluir_Prc.php?ID=$dados->ID''></a></td>
					</tr>";
			}
		?>
		</tbody>
	</table>
</div>
</div>
