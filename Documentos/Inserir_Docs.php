<?php
	include_once("../../Class/Carregar.class.php");
	include_once("../../Theme/topo.php");
	$objCategorias = new Categorias();
	$resultado = $objCategorias->listar();
	
?>
	<h3><i class="fa fa-angle-right"></i> Produto</h3>
        <div class="col-lg-12">
            <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i>Inserindo um produto</h4>
			
	<form class="form-horizontal style-form" method="POST" action="Inserir_P_Ok.php" enctype="multipart/form-data">
		<div class="form-group">
			<label class="col-sm-2 col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input class="form-control round-form" type="text" name="Nome"/>
            </div>
        </div>
			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Imagem </label>
				<div class="col-sm-10">
					<input type="file" name="Imagem"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Categoria</label>
				<div class="col-sm-5">
					<select class="form-control round-form" name="Categoria">
						<option value="">Selecione</option>
						<?php
						foreach($resultado as $dados){
						echo "<option value='$dados->ID'>$dados->Nome</option>";
						}
				
						?>
					</select>
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Preço</label> 
				<div class="col-sm-10"> 
					<input class="form-control round-form" type="text" name="Preco"/>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 col-sm-2 control-label">Descrição</label>
				<div class="col-sm-10">
					<input class="form-control round-form" type="text" name="Descricao"/>
				</div>
			</div>
			<input class="btn btn-primary btn-round btn-lg-6 btn-block" type="submit" name="botao"/>
		</form>
		</div>
</div>
<?php
include_once("../../Theme/rodape.php");
?>
<script>
	$("#aProdutos").addClass("active");
</script>