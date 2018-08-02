<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	// laços de repetição
	// for
	for ($i = 0; $i < 51; $i++){
		echo $i." - ";
	}
	echo "<br>-----------------------------------------------<br>";

	for ($i = 0; $i < 51; $i++){

		if ($i > 20 && $i < 30) continue;

		if ($i === 35) break;

		echo $i." - ";
	}
	echo "<br>-----------------------------------------------<br>";

	for ($i = date("Y"); $i > date("Y") - 100; $i--){
		echo $i." - ";
	}
	echo "<br>-----------------------------------------------<br>";
	// exemplo para exibir e selecionar um ano usando combo box html
	?>	
	<select>
	  <?php for ($i = date("Y"); $i > date("Y") - 50; $i--){ ?>
	  	<option value="<?php echo $i ?>"><?php echo $i ?></option>
	  <?php } ?>	 
	</select>
</body>
</html>