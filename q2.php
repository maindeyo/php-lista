<?php
$letra = readline('Letra: ');

if (!is_numeric($letra)) {
    if ($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u") {
        echo('é uma vogal');
    } else {
        echo("é uma consoante");
    }
} else {
    echo("insira uma letra");
}