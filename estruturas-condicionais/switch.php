<?php 
// caso escolha php
$diaAtual = date("w");

echo $diaAtual;

switch ($diaAtual) {
	case 0:
		echo " = domingo";
		break;
	case 1:
		echo " = segunda";
		break;
	case 2:
		echo " = terça-feira";
		break;
	case 3:
		echo " = quarta-feira";
		break;
	case 4:
		echo " = quinta-feira";
		break;
	case 5:
		echo " = sexta-feira";
		break;
	case 6:
		echo " = sabado";
		break;
	
}
?>