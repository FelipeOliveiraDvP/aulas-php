<?php 
// Arrays e vetores php
$frutas = array('manga', 'uva', 'laranja', 'pera');
print_r($frutas); // mostra todo o array
echo end($frutas); // ultimo elemento do array
echo "<hr>";
$pessoas = array();

array_push($pessoas, array('nome' => 'Felipe', 'idade' => 22),
					array('nome' => 'Maria', 'idade' => 55));

print_r($pessoas)

?>