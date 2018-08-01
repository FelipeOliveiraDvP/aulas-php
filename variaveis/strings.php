<?php 
// Trabalhando com strings
$nome = "Felipe";

$nome2 = 'Oliveira';
// Quando aspas duplas são usadas, as variaveis podem ser inseridas sem concatenação
echo "Nome do usuario: $nome";
echo "<br>";
echo 'Nome do usuario: $nome';
// Maiuscula e minuscula
$texto = "Tamanho da letra";

echo "<br>";
echo strtoupper($texto);
echo "<br>";
echo strtolower($texto);
echo "<br>";
echo ucfirst($texto);
echo "<br>";
echo ucwords($texto);
// trocando um valor em uma string
$frase = "Trocando palavras e caracteres";

$frase = str_replace("o", "0", $frase);
$frase = str_replace("a", "4", $frase);
echo "<br>";
echo ($frase);

// posição da palavra em um texto
$exemplo = "A repetição é a mãe da retenção.";

$pos = strrpos($exemplo, "mãe");
echo "<br>";
var_dump($pos);

//pegando um pedaço da string
$inicio = substr($exemplo, 0, $pos);
echo "<br>";
var_dump($inicio);
?>