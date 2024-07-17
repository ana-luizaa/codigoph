<?php

$numero = readline("Digite um número positivo: ");

if ($numero > 0) {
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . "\n";
    }
} else {
    echo "Por favor, insira um número positivo.\n";
}
?>
