<?php 
/* Débora Rohden*/ 
    request()->route()->parameters();
    $aQuestoesAcertou = [];
    $aQuestoesErrou = [];

    if($que1 == 'A' ){
        $aQuestoesAcertou[] = '1';
    }
    else { 
        $aQuestoesErrou[] = '1 => alternativa correta A';
    }

    if($que2 == 'B'){
        $aQuestoesAcertou[] = '2';
    }
    else {
        $aQuestoesErrou[] = '2 => alternativa correta B';
    }
    
    if($que3 == 'C'){
        $aQuestoesAcertou[] = '3';
    }
    else {
        $aQuestoesErrou[] = '3 => alternativa correta C';
    }
    
    if($que4 == 'D'){
        $aQuestoesAcertou[] = '4';
    }
    else {
        $aQuestoesErrou[] = '4 => alternativa correta D';
    }
    if($que5 == 'E'){
        $aQuestoesAcertou[] = '5';
    }
    else {
        $aQuestoesErrou[] = '5 => alternativa correta E';
    }
    
    if($que6 == 'E'){
        $aQuestoesAcertou[] = '6';
    }
    else {
        $aQuestoesErrou[] = '6 => alternativa correta E';
    }
    if($que7 == 'D'){
        $aQuestoesAcertou[] = '7';
    }
    else {
        $aQuestoesErrou[] = '7 => alternativa correta D';
    }
    if($que8 == 'C'){
        $aQuestoesAcertou[] = '8';
    }
    else {
        $aQuestoesErrou[] = '8 => alternativa correta C';
    }

    if($que9 == 'B'){
        $aQuestoesAcertou[] = '9';
    }
    else {
        $aQuestoesErrou[] = '9 => alternativa correta B';
    }
    
    if($que0 == 'A'){
        $aQuestoesAcertou[] = '10';
    }
    else {
        $aQuestoesErrou[] = '10 => alternativa correta A';
    }
    
    echo '-- Questoes certas: <br>';
    foreach($aQuestoesAcertou as $sQuestoes){
        echo $sQuestoes . '<br>';
    }
    echo '<br> -- Questoes que errou: <br>';

    foreach($aQuestoesErrou as $sQuestoes){
        echo $sQuestoes . '<br>';
    }
?>