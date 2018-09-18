<?php
	include_once("../Class/Carregar.class.php");
	if(!$_GET["ID"]){
		header("location:Listar_Prc.php");
	}
	else{
		$ID = $_GET["ID"];
		$objCategorias = new Processos();
		$objCategorias->ID=$ID;
		//print_r($objCategorias->retornarUnico());
		$variavel = $objCategorias->retornarUnico();
	}
?>
                  	  <h4>Editando a nova categoria</h4>
<form method="POST" action="Editar_C_Ok.php">
	<div >
                <label >Nome</label>
                    <div >
						<input  type="text" name="Nome" value="<?php echo $variavel->Nome;?>"/>
						<input type="hidden" name="ID" value="<?php echo $variavel->ID;?>"/>
					</div>
            </div>
	
	<input type="submit" value="Alterar"/>
	<input type="reset" value="Limpar" />
</form>

