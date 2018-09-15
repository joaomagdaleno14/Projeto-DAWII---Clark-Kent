<?php
	include_once("../Class/Carregar.class.php");
	if(!$_GET["ID"]){
		header("location:Listar_Usuarios.php");
	}
	else{
		$ID=$_GET["ID"];
		$objUsuarios = new Usuarios();
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