<?php

$preco1 = readline("Insira o preço do primeiro produto: ");
$preco2 = readline("Insira o preço do segundo produto: ");
$preco3 = readline("Insira o preço do terceiro produto: ");

if ($preco1 <= $preco2 && $preco1 <= $preco3) {
    echo "Você deve comprar o primeiro produto, que custa: R$ " . $preco1 . "\n";
} elseif ($preco2 <= $preco1 && $preco2 <= $preco3) {
    echo "Você deve comprar o segundo produto, que custa: R$ " . $preco2 . "\n";
} else {
    echo "Você deve comprar o terceiro produto, que custa: R$ " . $preco3 . "\n";
}
?>
