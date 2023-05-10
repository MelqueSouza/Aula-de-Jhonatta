<?php

$n = intval(readline());
$vencedores = array();

for ($i = 0; $i < $n; $i++) {
    $jog1 = readline();
    $jog2 = readline();

    $time1 = intval($jog1[0]) + intval($jog2[4]);
    $time2 = intval($jog1[4]) + intval($jog2[0]);

    if ($time1 > $time2) {
        $vencedores[] = "Time 1";
    } elseif ($time2 > $time1) {
        $vencedores[] = "Time 2";
    } else {
        if (intval($jog2[4]) > intval($jog1[4])) {
            $vencedores[] = "Time 1";
        } elseif (intval($jog1[4]) > intval($jog2[4])) {
            $vencedores[] = "Time 2";
        } else {
            $vencedores[] = "Penaltis";
        }
    }
}

foreach ($vencedores as $vencedor) {
    echo $vencedor . "\n";
}
