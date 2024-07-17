<?php

$nota1 = readline("Insira a primeira nota: ");
$nota2 = readline("Insira a segunda nota: ");

$media = ($nota1 + $nota2) / 2;

if ($media == 10) {
    echo "Aprovado com Distinção\n";
} elseif ($media >= 7) {
    echo "Aprovado\n";
} else {
    echo "Reprovado\n";
}
?>
