<?php
//função pré-definida que informa quais error/notices/warning 
//poderão ou não serem reportdos.
error_reporting(E_ALL & ~E_NOTICE);

$nome = $_GET["nome"];

echo $nome;



?>