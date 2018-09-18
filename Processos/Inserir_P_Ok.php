<?php
	include_once("../class/Carregar.class.php");

	$objCategorias = new Processos();
	
	$objCategorias->Nome = $_POST["Nome"];
	
	$retorno = $objCategorias->inserir();
	
	if($retorno)
		echo "Não sei como, mas funcionou";
	else
		echo "Sabia que não ia funcionar";
?>