<?php
while (true) {

    $n = intval(readline(''));

    if ($n == 0) {
        break;
    }

    $vitorias_mary = 0;
    $vitorias_john = 0;
    $jogadas = readline('');
    $jogadas = explode(' ', $jogadas);
    foreach ($jogadas as $jogada) {
        if (intval($jogada) == 0) {
            $vitorias_mary++;
        } else {
            $vitorias_jhon++;
        }
    }

    echo "Mary won $vitorias_mary times and John won $vitorias_jhon times\n";
}

?>
