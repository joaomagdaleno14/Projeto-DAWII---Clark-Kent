<?php

class Documentos{
	private $ID;
	private $Nome;
	private $ID_prc;
	private $Descricao;
	
	private $tabela;
	private $conexao;
	
	
	public function __construct(){
		$this->conexao = mysqli_connect("127.0.0.1","root","","banquinho2")
		or die ("Erro ao conectar");
		$this->tabela = "documentos";
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
		$sql = "INSERT INTO $this->tabela (Nome, ID_prc, Descricao) values('$this->Nome',$this->ID_prc,'$this->Descricao')";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
	}
	
	public function listar(){
		$sql = "SELECT $this->tabela.*, Processo.Nome as Processo FROM $this->tabela INNER JOIN Processos ON $this->tabela.ID_prc = Processos.ID";
		$retorno = mysqli_query($this->conexao, $sql);
		
		$arrayObj=NULL;
		while($res = mysqli_fetch_assoc($retorno)){
			$obj = new Documentos();
			$obj->ID=$res["ID"];
			$obj->Nome=$res["Nome"];
			$obj->ID-prc=$res["Processo"];
			$obj->Descricao=$res["Descricao"];
			
			$arrayObj [] = $obj;
		}
		return $arrayObj;
	}
	
			public function retornarUnico(){
		$sql = "SELECT * FROM $this->tabela WHERE ID=$this->ID";
		$retorno = mysqli_query($this->conexao, $sql);
		$resultado = mysqli_fetch_assoc($retorno);
		if($resultado){
			$objCategorias = new Produtos();
			$objCategorias->ID = $resultado['ID'];
			$objCategorias->Nome = $resultado['Nome'];
			$objCategorias->ID_prc = $resultado['ID_prc'];
			$objCategorias->Descricao = $resultado['Descricao'];
			
			
			$retornito = $objCategorias;
		}
		else{
			$retornito = NULL;
		}
		return $retornito;
	}
	
	public function editar(){
		$sql = "UPDATE $this->tabela SET Nome = '$this->Nome', ID_prc = $this->ID_prc, Descricao = '$this->Descricao' WHERE ID = $this->ID";
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