<?php 
// recebendo valores pela url
$op = $_GET['op'];
$num1 = (int)$_GET['n1'];
$num2 = (int)$_GET['n2'];

$soma = $num1+$num2;

echo $soma;

echo "<br>";
// recuperando o ip do usuario
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
//nome do script
echo "<br>";
$script = $_SERVER["SCRIPT_NAME"];
echo $script;
 ?>