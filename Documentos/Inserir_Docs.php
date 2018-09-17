<?php
	include_once("../../Class/Carregar.class.php");
	$objCategorias = new Processos();
	$resultado = $objCategorias->listar();

?>
            <h4> Inserindo um produto</h4>

	<form method="POST" action="Inserir_P_Ok.php" enctype="multipart/form-data">
		<div >
			<label>Nome</label>
            <div>
                <input type="text" name="Nome"/>
            </div>
        </div>

			<div>
				<label >Processo</label>
				<div >
					<select  name="Processo">
						<option value="">Selecione</option>
						<?php
						foreach($resultado as $dados){
						echo "<option value='$dados->ID'>$dados->Nome</option>";
						}

						?>
					</select>
				</div>
			</div>

			<div >
				<label >Descrição</label>
				<div >
					<input  type="text" name="Descricao"/>
				</div>
			</div>
			<input type="submit" name="botao"/>
		</form>
		</div>
</div>
