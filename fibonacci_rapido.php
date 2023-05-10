<?php

$n = intval(readline('Insira um número: '));

$raiz_soma = (pow(5, 0.5) + 1) / 2;
$raiz_subtrai = (pow(5, 0.5) - 1) / 2;

$resultado = (pow($raiz_soma, n) - pow($raiz_subtrai, n)) / sqrt(5);

echo number_format($resultado, 1) . "\n";