<?php 
// definindo constantes no php
define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;
echo("<hr>");

// array constante
define("BANCO_DE_DADOS", [
	"127.0.0.1",
	"root",
	"",
	"nome_do_banco"
]); 

print_r(BANCO_DE_DADOS);
echo("<hr>");

// constantes do php

echo PHP_VERSION;
echo("<br>");

echo DIRECTORY_SEPARATOR;
echo("<br>");
?>