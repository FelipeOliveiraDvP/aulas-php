<!DOCTYPE html>
<html>
<head>
	<title>Entrada Oficina</title>
</head>
<body>
	<?php 
	//cria arrays com os valores, que devem vir do banco
	$marcas = array("ford", "fiat", "chevrolet", "honda");
	$modelos = array("focus", "celta", "onix", "civic");
	$cores = array("preto", "branco", "prata", "vermelho", "azul");
	
	// oferece ao usuario as opções disponiveis
	?>
	<form>
		Marca:
			<select name="marca">
				<?php foreach($marcas as $marca) {?>
					<option value="<?php echo $marca ?>"><?php echo $marca ?></option>
				<?php } ?>		
			</select>
		
		<br>
		Modelo:
			<select name="modelo">
				<?php foreach($modelos as $modelo) {?>
					<option value="<?php echo $modelo ?>"><?php echo $modelo ?></option>
				<?php } ?>		
			</select>
		<br>
		Cor:
			<?php foreach($cores as $cor) {?>
				<input type="checkbox" name="cor[]" value="<?php echo $cor ?>"><?php echo  $cor?><br>
			<?php } ?>
		<input type="submit" value="enviar">
	</form>
	<?php 
	// trata os campos vazios
	if (isset($_GET)) {
		
		foreach($_GET as $key => $value){
			
			echo "Nome do campo: ".$key;			
			echo " Valor do campo: ".$value;
			echo "<br>";
			
		}
		echo "<hr>";
	}

	 ?>
</body>
</html>