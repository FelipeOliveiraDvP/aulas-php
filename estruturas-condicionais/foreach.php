<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<?php 
	// laços de repetição
	// for each
	$frutas = array("manga", "uva", "maçã", "pera", "mamão", "manga");
	
	foreach ($frutas as $fruta) {
		echo "Nome da fruta: ".$fruta."<br>";
	}
	echo "<br>-----------------------------------------------<br>";

	foreach ($frutas as $index => $fruta) {
		echo "Indice da fruta: ".$index;
		echo " - Nome da fruta: ".$fruta."<br>";
	}
	echo "<br>-----------------------------------------------<br>";
	// exemplo para exibir e selecionar um ano usando combo box html
	?>	
	<form>
	  <?php foreach ($frutas as $fruta) { ?>
	  	<input type="checkbox" name="fruta" value="<?php echo $fruta ?>"><?php echo  $fruta?><br>
	  <?php } ?>	 
	</form>
</body>
</html>