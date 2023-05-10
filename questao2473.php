<?php

$aposta = array_map('intval', explode(' ', readline()));
$sorteio = array_map('intval', explode(' ', readline()));

$numerosAcertados = count(array_intersect($aposta, $sorteio));

if ($numerosAcertados == 3) {
    echo "terno\n";
} elseif ($numerosAcertados == 4) {
    echo "quadra\n";
} elseif ($numerosAcertados == 5) {
    echo "quina\n";
} elseif ($numerosAcertados == 6) {
    echo "sena\n";
} else {
    echo "azar\n";
}
