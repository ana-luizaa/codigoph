<?php

$numero1 = readline("Insira o primeiro número: ");
$numero2 = readline("Insira o segundo número: ");
$numero3 = readline("Insira o terceiro número: ");

if ($numero1 >= $numero2 && $numero1 >= $numero3) {
    echo "O maior número é: " . $numero1 . "\n";
} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
    echo "O maior número é: " . $numero2 . "\n";
} else {
    echo "O maior número é: " . $numero3 . "\n";
}
?>
