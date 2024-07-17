<?php

$letra = readline("Insira uma letra: ");
$letra = strtolower($letra);

if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u') {
    echo "A letra é uma vogal.\n";
} else {
    echo "A letra é uma consoante.\n";
}
?>
