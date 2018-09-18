<?php
	include_once("../Class/Carregar.class.php");
	if(!$_GET["ID"]){
		header("location:Listar_Usuarios.php");
	}
	else{
		$ID = $_GET["ID"];
		$objUsuarios = new Usuarios();
		$objUsuarios->ID=$ID;

		$variavel = $objUsuarios->retornarUnico();
	}
?>
                  	  <h4> Editando o usuario</h4>
<form method="POST" action="Editar_U_Ok.php">
	<div >
                              <label >Nome</label>
                              <div>
							  <input type="text" name="Nome" value="<?php echo $variavel->Nome;?>"/>
							  </div>
                          </div>
	<div>
                              <label >Email</label>
                              <div>
							  <input type="text" name="Email" value="<?php echo $variavel->Email;?>"/>
							  </div>
                          </div>
	<div>
                              <label>CPF</label>
                              <div >
							  <input type="date" name="CPF"value="<?php echo $variavel->CPF;?>"/>
							  </div>
                          </div>
	<div >
                              <label>Endereço</label>
                              <div>
							  <input type="text" name="Endereco"value="<?php echo $variavel->Endereco;?>"/>
							  </div>
                          </div>
	<div >
                              <label>Telefone</label>
                              <div >
							  <input type="text" name="Telefone"value="<?php echo $variavel->Telefone;?>"/>
							  </div>
                          </div>
	<div>
                              <label >Tipo</label>
                              <div >
							  <input type="text" name="Tipo"value="<?php echo $variavel->Tipo;?>"/>
							  </div>
                          </div>
	 <div>
                              <label>Senha</label>
                              <div>
							  <input type="text" name="Senha"value="<?php echo $variavel->Senha;?>"/>
							  </div>
                          </div>
	<input type="hidden" name="ID" value="<?php echo $variavel->ID;?>"/>
	<input type="submit" value="Alterar"/>
	<input type="reset" value="Limpar"/>
</form>
</div>
</div>
