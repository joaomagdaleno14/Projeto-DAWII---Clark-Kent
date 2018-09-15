<?php
	include_once("../../class/Carregar.class.php");
	$objDocumentos = new Documentos();
	
	$objDocumentos->Nome = $_POST["Nome"];
	$objDocumentos->ID_prc = $_POST["Processo"];
	$objDocumentos->Descricao = $_POST["Descricao"];
	
	$retorno = $objDocumentos->inserir();
	
	if($retorno)
		echo "Não sei como, mas funcionou";
	else
		echo "Sabia que não ia funcionar";
?>