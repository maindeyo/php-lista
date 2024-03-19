<?php

$caractere = readline("Caractere:");
$qnt = strlen($caractere);

$pieces = explode(" ", $caractere);

$cont = 0;
$i = 0;

for ($i; $i < $qnt; $i++){
    if($caractere[$i] == "a" || $caractere[$i]  == "e" || $caractere[$i]  == "i" || $caractere[$i]  == "o" || $caractere[$i]  == "u") {
        $cont ++;
    }
};

echo $cont;