<?php

$numero1 = readline("Insira o primeiro número: ");
$numero2 = readline("Insira o segundo número: ");
$numero3 = readline("Insira o terceiro número: ");

if ($numero1 >= $numero2 && $numero1 >= $numero3) {
    echo $numero1 . "\n";
    if ($numero2 >= $numero3) {
        echo $numero2 . "\n";
        echo $numero3 . "\n";
    } else {
        echo $numero3 . "\n";
        echo $numero2 . "\n";
    }
} elseif ($numero2 >= $numero1 && $numero2 >= $numero3) {
    echo $numero2 . "\n";
    if ($numero1 >= $numero3) {
        echo $numero1 . "\n";
        echo $numero3 . "\n";
    } else {
        echo $numero3 . "\n";
        echo $numero1 . "\n";
    }
} else {
    echo $numero3 . "\n";
    if ($numero1 >= $numero2) {
        echo $numero1 . "\n";
        echo $numero2 . "\n";
    } else {
        echo $numero2 . "\n";
        echo $numero1 . "\n";
    }
}
?>
