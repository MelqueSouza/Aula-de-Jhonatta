<?php

while ($entrada = readline('')) {

  $valores = explode(" ", trim($entrada));
  $n = intval($valores[0]);
  $m = intval($valores[1]);

  $soma = 0;
  for ($i = 0; $i < $n; $i++) {
    $soma += $m % 10;
    $m = intval($m / 10);
  }

  if ($soma % 3 == 0) {
    echo $soma . " sim\n";
  } else {
    echo $soma . " nao\n";
  }
}