<?php

$turno = readline("Qual turno você estuda? (M-matutino, V-vespertino, N-noturno): ");

if ($turno == "M" || $turno == "m") {
    echo "Oi pessoa, bom dia!\n";
} elseif ($turno == "V" || $turno == "v") {
    echo "Oi pessoa, boa tarde!\n";
} elseif ($turno == "N" || $turno == "n") {
    echo "Oi pessoa, boa noite!\n";
} else {
    echo "Valor inválido.\n";
}
?>
