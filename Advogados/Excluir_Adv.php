<?php
	include_once("../Class/Carregar.class.php");
	if(!$_GET["ID"]){
		header("location:Listar_Adv.php");
	}
	else{
		$ID=$_GET["ID"];
		$objUsuarios = new Advogados();
		$objUsuarios->ID = $ID;
		$retorno = $objUsuarios->excluir();
		if($retorno){
			echo "Exluido com sucesso!!!";
		}
			
		else{
			echo "PARABENS!!! não foi excluido <3";
		}
			
	}
?>