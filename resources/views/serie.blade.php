<?php 
/* Débora Rohden*/ 
    request()->route()->parameters();

    $iSoma = 0;
    $iQuantidade = 0;

    do{
        echo $x .' ';
        $iSoma += $x; 
        $iQuantidade++;
        $x += $z;

    }
    while($x <= $y);

    $iMedia = $iSoma/$iQuantidade;
    echo '<br>';
    echo 'Soma => '.$iSoma.'<br>';
    echo 'Média => '.$iMedia.'<br>';
    echo 'Quantidade => '.$iQuantidade.'<br>';

?>