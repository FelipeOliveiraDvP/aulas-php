<?php 

// declarando variaveis no php
$nome = "Felipe";
$anoNascimento = 1994;

echo "Nome: ".$nome." <br>Ano de nascimento: ".$anoNascimento;

// apagando um valor de uma variavel
$nome1 = "Teste";
unset($nome1);

if (isset($nome1)) {
	echo $nome1;
}else{
	echo "<br>Variavel nâo declarada";
}

// concatenando dados

$nome2 = "<br>Felipe";
$sobrenome = " Oliveira";
$nomeCompleto = $nome2.$sobrenome;

echo($nomeCompleto);

echo("<br>");
// tipos de dados
// basicos
$marca = "honda";
$ano = 1990;
$salario = 5501.60;
$bloqueado = false;
// compostos
$frutas = array("abacaxi", "laranja", "manga");
echo $frutas[2];

$nascimento = new DateTime();

// tipos especiais
$arquivo = fopen("../teste.txt", "r");

$nulo = null;
 ?>