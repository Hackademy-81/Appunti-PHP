<?php

//Dato un array di numeri a scelta, 
//scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

//!pseudo codice
//definire un array di numeri
//per ogni elemento contneuto nell'array
    //controllare se l'elemento è pari
        //sommiamo l'elemento
        //incrementare un contatore in modo da memorizzare quanti sono i numeri pari
//calcoliamo la media: dividere la somma ottenuta per il numero dei numeri pari trovati

$array = [2,3,5,6,8,9,23,33,44];
$sum=0;
$counter = 0;
foreach($array as $num){
    $resto = $num % 2;
    if($resto == 0){
        $sum += $num;// $sum = $sum + $num;
        $counter++;// $count = $count +1;    
    }
}
$media = $sum / $counter;




$array = [2,3,5,6,8,9,23,33,44];
$arrayPari = array_filter($array, function($num){
    return $num % 2 == 0;
});

$sum = array_reduce($arrayPari,function($sum,$num){
    return $sum + $num;
});

$media = $sum / count($arrayPari);

var_dump($media);