<?php
	include_once("../Class/Carregar.class.php");
	$objUsuarios = new Advogados();
	
	$objUsuarios->Nome = $_POST["Nome"];
	$objUsuarios->Email = $_POST["Email"];
	$objUsuarios->CNA= $_POST["CNA"];
	$objUsuarios->Endereco = $_POST["Endereco"];
	$objUsuarios->Telefone = $_POST["Telefone"];
	$objUsuarios->Especializacao = $_POST["Especializacao"];
	$objUsuarios->Tipo = $_POST["Tipo"];
	$objUsuarios->Senha = $_POST["Senha"];
	
	$retorno = $objUsuarios->inserir();
	
	if($retorno)
		echo "Não sei como, mas funcionou";
	else
		echo "Sabia que não ia funcionar";
?>
