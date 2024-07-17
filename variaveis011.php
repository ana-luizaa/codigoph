<?php

$salario = readline("Insira o salário atual: ");

if ($salario <= 280) {
    $percentual = 20;
} elseif ($salario <= 700) {
    $percentual = 15;
} elseif ($salario <= 1500) {
    $percentual = 10;
} else {
    $percentual = 5;
}

$aumento = $salario * ($percentual / 100);
$novoSalario = $salario + $aumento;

echo "Salário antes do reajuste: R$ " . $salario . "\n";
echo "Percentual de aumento: " . $percentual . "%\n";
echo "Valor do aumento: R$ " . $aumento . "\n";
echo "Novo salário: R$ " . $novoSalario . "\n";
?>
