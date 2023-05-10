<?php

// Lê o número de entradas
$n = intval(readline('Digite os números: ')));

// Cria um array para contar as ocorrências de cada número
$contagem = array();

// Lê cada número de entrada e incrementa sua contagem no array
for ($i = 0; $i < $n; $i++) {
    $x = intval(readline(''));
    if (!isset($contagem[$x])) {
        $contagem[$x] = 0;
    }
    $contagem[$x]++;
}

// Ordena os números e exibe sua contagem
ksort($contagem);
foreach ($contagem as $x => $count) {
    echo "$x aparece $count vez(es)\n";
}

?>