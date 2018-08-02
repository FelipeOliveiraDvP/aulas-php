<?php 
// While php

$condicao = true;

while ($condicao) {
	
	$numero = rand(1, 10);
	
	if ($numero === 3) {
		echo "TRES!!!";
		$condicao = false;
		break;
	}
	echo "Numero: $numero <br>";
}
echo "<br><hr><br>";
// do while

$total = 100;
$desc = .9;

do {
	$total *= $desc;
} while ($total > 100);
echo $total
 ?>