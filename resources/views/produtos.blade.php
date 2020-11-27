<?php 
/* Débora Rohden*/ 
    request()->route()->parameters();
    
    $aProdutos        = ['Chocolate','Bolacha','Arroz','Leite em pó','Pão','Leite condensado','Creme de leite'];
    $aProdutosGerados = [];

    do{ 
        $bAchou = false;
        $sPrimeiroProduto = $aProdutos[rand(0,6)];
        $sSegundoProduto  = $aProdutos[rand(0,6)];
        $sProdutoGerado   = $sPrimeiroProduto.'_'.$sSegundoProduto;

        if($sPrimeiroProduto != $sSegundoProduto){
            if(!count($aProdutosGerados)){
                $aProdutosGerados[] = $sProdutoGerado;
                $bAchou = true;
            }
            if(!$bAchou){
                foreach($aProdutosGerados as $sProduto){
                    if($sProduto == $sProdutoGerado){
                        $bAchou = true;
                        break;
                    }
                }
                if(!$bAchou){
                    $aProdutosGerados[] = $sProdutoGerado;
                    $bAchou = false;
                }
            }
        }
    }
    while(count($aProdutosGerados) < $codigo);
    
    foreach($aProdutosGerados as $sProdutos){
        echo $sProdutos . '<br>';
    }

?>