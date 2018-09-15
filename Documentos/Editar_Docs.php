<?php
	include_once("../Class/Carregar.class.php");
	if(!$_GET["ID"]){
		header("location:Listar_Docs.php");
	}
	else{
		$ID = $_GET["ID"];
		$objDocumentos = new Documentos();
		$objDocumentos->ID=$ID;
		//print_r($objProdutos->retornarUnico());
		$variavel = $objDocumentos->retornarUnico();
		
		$objProcessos = new Processos();
		$resultado = $objProcessos->listar();
	}
?>
<h3> Produto</h3>
            <h4 >Editando um produto</h4>
<form  method="POST" action="Editar_D_Ok.php">
	<div >
			<label >Nome</label>
            <div >
			<input type="text" name="Nome" value="<?php echo $variavel->Nome;?>"/>
			</div>
        </div>
	<div >
				<label >Processo</label>
				<div >
					<select  name="Processo">
				<option value="">Selecione</option>
				<?php
				foreach($resultado as $dados){
					if($dados->ID == $variavel->ID_prc)
					echo "<option value='$dados->ID'>$dados->Nome</option>";
					else
						echo "<option value='$dados->ID'>$dados->Nome</option>";
				}
				
				?>
					</select>
				</div>
			</div>
			
	<div >
				<label >Descrição</label>
				<div >
				<input type="text" name="Descricao"value="<?php echo $variavel->Descricao;?>"/>
				</div>
			</div>
	<input type="hidden" name="ID" value="<?php echo $variavel->ID;?>"/>
	<input type="submit" value="Alterar"/>
	<input  type="reset" value="Limpar"/>
	</form>
</div>
</div>
