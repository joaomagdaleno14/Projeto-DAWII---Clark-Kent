<?php

class Processos{
	private $ID;
	private $Nome;
	private $ID_User;
	private $ID_Adv;
	
	private $tabela;
	private $conexao;
	
	
	public function __construct(){
		$this->conexao = mysqli_connect("127.0.0.1","root","","banquinho2")
		or die ("Erro ao conectar");
		$this->tabela = "processos";
	}
	
	public function __destruct(){
		unset($this->link); 
	}
	
	public function __get($key){
		return $this->$key;
	}
	
	public function __set($key, $value){
		$this->$key = $value;
	}
	
	public function inserir(){
		$sql = "INSERT INTO $this->tabela (Nome) values('$this->Nome')";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
	}
	
	public function listar(){
		$sql = "SELECT * FROM $this->tabela ";
		$retorno = mysqli_query($this->conexao, $sql);
		
		$arrayObj=NULL;
		while($res = mysqli_fetch_assoc($retorno)){
			$obj = new Categorias();
			$obj->ID=$res["ID"];
			$obj->Nome=$res["Nome"];
			$obj->ID_User=$res["ID_User"];
			$obj->ID_Adv=$res["ID_Adv"];
			
			$arrayObj [] = $obj;
		}
		return $arrayObj;
	}
	
	public function retornarUnico(){
		$sql = "SELECT * FROM $this->tabela WHERE ID=$this->ID";
		$retorno = mysqli_query($this->conexao, $sql);
		$resultado = mysqli_fetch_assoc($retorno);
		if($resultado){
			$objCategorias = new Categorias();
			$objCategorias->Nome = $resultado['Nome'];
			$objCategorias->ID = $resultado['ID'];
			$objCategorias->ID_User=$resultado["ID_User"];
			$objCategorias->ID_Adv=$resultado["ID_Adv"];
			
			$retornito = $objCategorias;
		}
		else{
			$retornito = NULL;
		}
		return $retornito;
	}
	
	public function editar(){
		$sql = "UPDATE $this->tabela SET Nome = '$this->Nome' WHERE ID = $this->ID";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
	}
	
	public function excluir(){
		$sql = "DELETE FROM $this->tabela WHERE ID = $this->ID";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
		
	}
}



?>