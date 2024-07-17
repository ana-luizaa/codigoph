<?php

$peso = readline("Insira seu peso (em kg): ");
$altura = readline("Insira sua altura (em metros): ");

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Você está abaixo do peso.\n";
} elseif ($imc < 24.9) {
    echo "Você está com peso normal.\n";
} elseif ($imc < 29.9) {
    echo "Você está com sobrepeso.\n";
} else {
    echo "Você está obeso.\n";
}

echo "Seu IMC é: " . number_format($imc, 2) . "\n";
?>
