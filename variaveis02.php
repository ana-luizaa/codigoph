<?php

$numero = readline("Insira um número: ");

if ($numero > 0) {
    echo "O número é positivo.\n";
} elseif ($numero < 0) {
    echo "O número é negativo.\n";
} else {
    echo "O número é zero.\n";
}
?>
