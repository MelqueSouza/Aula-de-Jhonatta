
<?php

$cases = array();

while (true) {
    $line = readline();
    if (!$line) {
        break;
    }
    $input = explode(" ", $line);
    $N = intval($input[0]);
    $R = intval($input[1]);
    $sobreviventes = array();
    $line = readline();
    $input = explode(" ", $line);
    for ($i = 0; $i < $R; $i++) {
        $sobreviventes[] = intval($input[$i]);
    }
    $cases[] = array($N, $R, $sobreviventes);
}

foreach ($cases as $case) {
    $N = $case[0];
    $R = $case[1];
    $sobreviventes = $case[2];
    $voluntarios = range(1, $N);
    foreach ($sobreviventes as $i) {
        $index = array_search($i, $voluntarios);
        if ($index !== false) {
            array_splice($voluntarios, $index, 1);
        }
    }
    if (count($voluntarios) == 0) {
        echo "*\n";
    } else {
        foreach ($voluntarios as $i) {
            echo $i . " ";
        }
        echo "\n";
    }
}