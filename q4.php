<?php
$numero = readline("Numero"); //Pode vir de um GET ou POST

$v = array_product(range($numero, 1));
print_r($v);