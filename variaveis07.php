<?php

$numero1 = readline("Insira o primeiro número: ");
$numero2 = readline("Insira o segundo número: ");
$numero3 = readline("Insira o terceiro número: ");

$maior = $numero1;
$menor = $numero1;

if ($numero2 > $maior) {
    $maior = $numero2;
} else {
    if ($numero2 < $menor) {
        $menor = $numero2;
    }
}

if ($numero3 > $maior) {
    $maior = $numero3;
} else {
    if ($numero3 < $menor) {
        $menor = $numero3;
    }
}

echo "O maior número é: " . $maior . "\n";
echo "O menor número é: " . $menor . "\n";
?>
