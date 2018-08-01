<?php 
//definindo o escopo de variaveis

$nome = "Felipe";

function teste() {
	//para acessar uma variavel definida fora do escopo da função
	global $nome;
	echo $nome;
}

function teste2() {
	// esta variavel so existe dentro dessa função
	$nome = "teste2";
	echo "<br>".$nome." Teste 2";
}

teste();
teste2();

 ?>