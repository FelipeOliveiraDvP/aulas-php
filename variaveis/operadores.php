<?php 
//operadores de atribuição
$nome = "Felipe";
$nomeCompleto = $nome." de ";
$nomeCompleto .= " Oliveira";

//trabalhando com numeros
$valorTotal = 0;

$valorTotal += 100;
$valorTotal -= 25;
$valorTotal *= .9;

//operadores aritmeticos
$a = 10;
$b = 2;

echo $a + $b; //soma
echo $a - $b; //subtracao
echo $a * $b; //multiplicação
echo $a / $b; // divisao
echo $a % $b; // Resto da divisao
echo $a ** $b; //exponenciação

// operadores de comparação
echo $a > $b;
echo $a < $b;
echo $a >= $b;
echo $a <= $b;
// operadores de igualdade
echo $a == $b; //55 55.0 : Valores iguais mais tipos diferentes
echo $a === $b; // retorna true somente se valores e tipos forem iguais
echo $a != $b;
echo $a !== $b;
// space ship
$a = 50;
$b = 35;
var_dump($a <=> $b);
// a for maior: retorna 1
// b for maior: retorna -1
// se forem iguais: retorna 0
//-------------------
$a = null;
$b = null;
$c = 10;
echo $a ?? $b ?? $c; // a é nulo: retorne b; b é nulo? retorne c
// operadores de incremento e decremento
$a = 10
echo $a++ // a == 11
echo ++$a // a == 11
// precedencia dos operadores

 ?>