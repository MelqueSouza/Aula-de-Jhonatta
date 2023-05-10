<?php

while(true){
    fscanf(STDIN, "%d %d %d", $q, $d, $p);

    if($q == 0){
      break;
    }
  
    $page = intdiv(($p * $q * $d), ($p - $q));
    if($page > 1){
        echo $page . " paginas" . "\n";
    }else{
        echo $page . " pagina" . "\n";
    }
}
?>
