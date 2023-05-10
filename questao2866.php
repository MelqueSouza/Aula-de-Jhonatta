<?php

$num_casos_teste = (int) fgets(STDIN);

$mensagens = array();

for ($i = 0; $i < $num_casos_teste; $i++) {
    $linha = trim(fgets(STDIN));
    $mensagens[] = $linha;
}

foreach ($mensagens as $mensagem) {
    $mensagem = preg_replace('/[A-Z]/', '', $mensagem);
    $mensagem = strrev($mensagem);
    echo "$mensagem\n";
}

?>
