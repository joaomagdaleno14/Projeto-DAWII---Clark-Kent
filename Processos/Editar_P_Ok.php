<?php
	include_once("../Class/Carregar.class.php");

	$objCategorias = new Processos();
	
	$objCategorias->Nome = $_POST["Nome"];
	$objCategorias->ID = $_POST["ID"];
	
	$retorno = $objCategorias->editar();
	if($retorno)
		echo "Editado com sucesso";
	else
		echo "Não foi com sucesso";
?>
