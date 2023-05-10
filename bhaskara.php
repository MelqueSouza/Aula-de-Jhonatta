<?php
$var = readline("Digite 3 números: ");
$dados = sscanf($var, "%f %f %f");

list($a, $b, $c) = $dados;

$delta = pow($b, 2) - 4 * $a * $c;

if ($delta < 0 || $a == 0) {
    echo "Impossivel calcular\n";
} else {

    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);

    printf("R1 = %.5f\n", $x1);
    printf("R2 = %.5f\n", $x2);
}

?>