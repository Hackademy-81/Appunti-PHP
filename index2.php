<?php

//! funzioni: sono una porzione di codice riutilizzabile in varie parti del nostro programma
//! obiettivo: eliminare la ripetione di codice uguale

//? built-in: native di PHP (var_dump)
//? user functions: funzioni scritte da noi programmatori


// dichirazione


//i prametri formali saranno le variabili che contengono dei dati in input che potranno essere manipolate dalla funzione
function nomeFunzione(/* parametri formali */){
    //istruzioni
}

// invocazione (la richiamiamo)
nomeFunzione(/* parametri reali (input effettivi) */);


//effettuare la somma di due numeri
function sum(){
    echo 5 + 4;
}

function sum2($num1,$num2){
    echo $num1 + $num2 . "\n";
}

//il passaggio dei parametri è posizionale
/* sum2(2,3);
sum2(3,3);
sum2(7,3);
sum2(2,5);
sum2(2,2);
sum2(2,1); */

function diff($num1,$num2){
    echo $num1 - $num2;
}

/* diff(2,3); */

//scope: porzione di codice in cui una variabile visibile
    //globale (JS): se dichiaro una varibile globale, essa può essere utilizzata anche all'interno di una funzione
    //locale (PHP): una funzione non può richiamare varibili esterne a se stessa


//passaggio per valore
$x = 5;
function incrementY($y){
    $y++;
    return $y;
}

$yIncrementato = incrementY($x);

/* echo $yIncrementato;
echo $x; */

//passaggio per riferimento

$x = 5;
function incrementX(&$y){
    $y++;
    return $y;
}

$yIncrementato = incrementX($x);

/* echo $yIncrementato;
echo $x; */



//parametri di default
$x = 5;
function incrementN($y = 0){
    $y++;
    return $y;
}

$yIncrementato = incrementN();

/* echo $yIncrementato;
echo $x; */



//parametri variabili

//media
function media(...$nums){// spread operator
    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
    }
    
    return $sum / count($nums);
}

/* echo media(1,2,3,4); */


//callback: funzioni passate come parametro ad un altra funzione
function media2(...$nums){// spread operator
    $sum = array_reduce($nums,function($sum,$num){//detta anche funzione anonima
        return $sum + $num;
    });
    return $sum / count($nums);
}

echo media2(1,2,3,4);




