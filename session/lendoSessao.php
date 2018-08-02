<?php 
// para se recuperar todas as variaveis de sessao
session_id('9uockq1nbvnlgfuvvdrmlc6l90');

require_once 'config.php';

echo isset($_SESSION['nome'])? $_SESSION['nome'] : "Usuario não existe";
echo "<br>ID da sessão: ".session_id();
echo "<br>";
var_dump($_SESSION);

session_unset(); // limpa variaveis de sessao
session_destroy(); // derruba a sessão e a reseta
 ?>