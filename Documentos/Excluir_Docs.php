<?php
	include_once("../../Class/Carregar.class.php");
	if(!$_GET["ID"]){
		header("location:Listar_Docs.php");
	}
	else{
		$ID=$_GET["ID"];
		$objDocumentos = new Produtos();
		$objDocumentos->ID = $ID;
		$retorno = $objDocumentos->excluir();
		if($retorno){
			echo "Exluido com sucesso!!!";
		}
			
		else{
			echo "PARABENS!!! não foi excluido <3";
		}
			
	}
?>
