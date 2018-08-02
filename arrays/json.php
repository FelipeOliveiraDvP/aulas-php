<?php 
// usando jso no php
$pessoas = array();

array_push($pessoas, array('nome' => 'Felipe', 'idade' => 22),
					array('nome' => 'Maria', 'idade' => 55));

// convertendo de array para json
echo json_encode($pessoas);

//convertendo de json para array
$json = '[{"nome":"Felipe","idade":22},{"nome":"Maria","idade":55}]';
$data = json_decode($json, true);// com o false, vira objeto

var_dump($data)

?>