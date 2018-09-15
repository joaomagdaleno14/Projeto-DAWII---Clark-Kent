<?php
	include_once("../Class/Carregar.class.php");
	if(!$_GET["ID"]){
		header("location:Listar_Prc.php");
	}
	else{
		$ID=$_GET["ID"];
		$objCategorias = new Processos();
		$objCategorias->ID = $ID;
		$retorno = $objCategorias->excluir();
		if($retorno){
			echo "Exluido com sucesso!!!";
		}
			
		else{
			echo "PARABENS!!! não foi excluido <3";
		}
			
	}
?>