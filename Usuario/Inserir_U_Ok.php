<?php
	include_once("../Class/Carregar.class.php");
	$objUsuarios = new Usuarios();
	
	$objUsuarios->Nome = $_POST["Nome"];
	$objUsuarios->Email = $_POST["Email"];
	$objUsuarios->CPF = $_POST["CPF"];
	$objUsuarios->Endereco = $_POST["Endereco"];
	$objUsuarios->Telefone = $_POST["Telefone"];
	$objUsuarios->Tipo = $_POST["Tipo"];
	$objUsuarios->Senha = $_POST["Senha"];
	
	$retorno = $objUsuarios->inserir();
	
	if($retorno)
		echo "Não sei como, mas funcionou";
	else
		echo "Sabia que não ia funcionar";
?>
