<?php

$letra = readline("Insira uma letra (F ou M): ");

if (strtoupper($letra) == "F") {
    echo "Feminino\n";
} elseif (strtoupper($letra) == "M") {
    echo "Masculino\n";
} else {
    echo "Sexo inválido\n";
}
?>
