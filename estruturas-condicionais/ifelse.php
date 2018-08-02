<?php 
// estruturas de php
$suaIdade = 22;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($suaIdade < $idadeCrianca){
	echo "IDade de crianca";
}else if ($suaIdade < $idadeMaior){
	echo "Adolescente";
}else if ($suaIdade < $idadeMelhor){
	echo "Adulto";
}else {
	echo "Idoso";
}
// operador ternario
echo "<br>";
echo ($suaIdade < $idadeMaior)? "Menor de idade" : "Menor de Idade ";


?>