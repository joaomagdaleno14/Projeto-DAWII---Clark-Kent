<?php
class Usuarios {
	private $ID;
	private $Nome;
	private $Email;
	private $CPF;
	private $Endereco;
	private $Telefone;
	private $Tipo;
	private $Senha;
	
	
	private $tabela;
	private $conexao;
	

	public function __construct(){
		$this->conexao = mysqli_connect("127.0.0.1", "root","","banquinho2") 
		or die ("Erro ao conectar");
		$this->tabela = "Usuarios";
	}
	// O construtor serve para 2 coisas, fazer a conexão com o banco e e definir que tabela será usada;
	public function __destruct(){
		unset($this->link);
	}
	// Fecha a conexão com o banco;
	public function __get($key){
		return $this->$key;
	}
	//O Get pega algum valor do banco;
	public function __set($key, $value){
		$this->$key = $value;
	}
	// O Set altera algum valor de um campo/atributo da classe;
	
	public function inserir(){
		$sql = "INSERT INTO $this->tabela(Nome, Email, CPF, Endereco, Telefone, Tipo, Senha)
		values('$this->Nome','$this->Email',$this->CPF,'$this->Endereco',$this->Telefone,'$this->Tipo','$this->Senha')";
		$retorno = mysqli_query($this->conexao, $sql);
		return $retorno;
	}
	
	public function listar(){
		$sql = "SELECT * FROM $this->tabela ";
		$retorno = mysqli_query($this->conexao, $sql);
		
		$arrayObj=NULL;
		while ($res = mysqli_fetch_assoc($retorno)){
			$obj = new Usuarios();
			$obj->ID=$res["ID"];
			$obj->Nome=$res["Nome"];
			$obj->Email=$res["Email"];
			$obj->CPF=$res["CPF"];
			$obj->Endereco=$res["Endereco"];
			$obj->Telefone=$res["Telefone"];
			$obj->Tipo=$res["Tipo"];
			$obj->Senha=$res["Senha"];
			
			$arrayObj [] = $obj;
		}
		return $arrayObj;
	}
	
	
		public function retornarUnico(){
		$sql = "SELECT * FROM $this->tabela WHERE ID=$this->ID";
		$retorno = mysqli_query($this->conexao, $sql);
		$resultado = mysqli_fetch_assoc($retorno);
		if($resultado){
			$objCategorias = new Usuarios();
			$objCategorias->ID = $resultado['ID'];
			$objCategorias->Nome = $resultado['Nome'];
			$objCategorias->Email = $resultado['Email'];
			$objCategorias->CPF = $resultado['CPF'];
			$objCategorias->Endereco = $resultado['Endereco'];
			$objCategorias->Telefone = $resultado['Telefone'];
			$ObjCategorias->Tipo = $resultado['Tipo'];
			$objCategorias->Senha = $resultado['Senha'];
			
			$retornito = $objCategorias;
		}
		else{
			$retornito = NULL;
		}
		return $retornito;
	}
<<<<<<< HEAD

	public function loginUser(){
		$sql = "SELECT * FROM $this->tabela WHERE Email= '$this->Email' and Senha = '$this->Senha' and Tipo='User'";
=======
	
	
	
	public function loginAdv(){
		$sql = "SELECT * FROM $this->tabela WHERE Email= '$this->Email' and Senha = '$this->Senha' and Tipo='adv'";
		echo $sql;
		$retorno = mysqli_query($this->conexao, $sql);
		$resultado = mysqli_fetch_assoc($retorno);
		if($resultado){
			$objCategorias = new Usuarios();
			$objCategorias->ID = $resultado['ID'];
			
			$retornito = $objCategorias;
		}
		else{
			$retornito = NULL;
		}
		return $retornito;
	}
	public function loginUser(){
		$sql = "SELECT * FROM $this->tabela WHERE Email= '$this->Email' and Senha = '$this->Senha' and Tipo='user'";
>>>>>>> 3b83444527cdd68d32d2edc799ece9ddfccbbfc8
		echo $sql;
		$retorno = mysqli_query($this->conexao, $sql);
		$resultado = mysqli_fetch_assoc($retorno);
		if($resultado){
			$objCategorias = new Usuarios();
			$objCategorias->ID = $resultado['ID'];
			
			$retornito = $objCategorias;
		}
		else{
			$retornito = NULL;
		}
		return $retornito;
	}
	
	public function editar(){
		$sql = "UPDATE $this->tabela SET Nome = '$this->Nome', Email = '$this->Email', CPF = '$this->CPF', Endereco = '$this->Endereco', Telefone = $this->Telefone, Tipo = '$this->Tipo', Senha = '$this->Senha' WHERE ID = $this->ID";
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