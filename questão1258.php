<?php

while (true) {
  
    $n = (int) fgets(STDIN);

    if ($n == 0) {
        break;
    }

    $camisetas = [];

    for ($i = 0; $i < $n; $i++) {
        $nome = trim(fgets(STDIN));
        list($cor, $tamanho) = explode(' ', trim(fgets(STDIN)));

        $camisetas[] = [
            'nome' => $nome,
            'cor' => $cor,
            'tamanho' => $tamanho,
        ];
    }

    usort($camisetas, function ($a, $b) {
        if ($a['cor'] != $b['cor']) {
            return strcmp($a['cor'], $b['cor']);
        } else if ($a['tamanho'] != $b['tamanho']) {
            return strcmp($b['tamanho'], $a['tamanho']);
        } else {
            return strcmp($a['nome'], $b['nome']);
        }
    });

    foreach ($camisetas as $camiseta) {
        echo "{$camiseta['cor']} {$camiseta['tamanho']} {$camiseta['nome']}\n";
    }

    echo "\n";
}

?>
