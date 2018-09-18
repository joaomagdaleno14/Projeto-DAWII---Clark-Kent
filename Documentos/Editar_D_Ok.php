<?php
	include_once("../Class/Carregar.class.php");
	$objDocumentos = new Documentos();
	
	
	$objDocumentos->Nome = $_POST["Nome"];
	$objDocumentos->ID_prc = $_POST["ID_prc"];
	$objDocumentos->Descricao = $_POST["Descricao"];
	$objDocumentos->ID = $_POST["ID"];
	
	$retorno = $objDocumentos->editar();
	if($retorno)
		echo "Editado com sucesso";
	else
		echo "Não foi com sucesso";
?>