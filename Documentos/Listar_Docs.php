<?php
	include_once("../Class/Carregar.class.php");
	$objProdutos = new Documentos();
	$resultado = $objProdutos->listar();


?>

	<table>
	<h4> Produtos</h4>
	<hr>
	<thead>
		<th>ID</th>
		<th >Nome</th>
		<th >Processo</th>
		<th >Descrição</th>
		<th colspan="4">Ações</th>
		</thead>
		<tbody>
		<?php
			foreach($resultado as $dados){
				echo "<tr>
					<td>$dados->ID</td>
					<td>$dados->Nome</td>
					<td>$dados->ID_prc</td>
					<td>$dados->Descricao</td>
					<td><a href='Editar_Docs.php?ID=$dados->ID'></a></td>
					<td><a href='Excluir_Docs.php?ID=$dados->ID''></a></td>
					</tr>";
			}
		?>
		<tbody>
	</thead>
	</table>
</div>
</div>
