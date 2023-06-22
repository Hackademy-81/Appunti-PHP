<?php

//!sfruttando il paradigma procedurale

//! validazione di una password (controllare che la password soddisfa determinati requisiti)
//? deve avere almeno una lunghezza di 8 caratteri
//? deve contenere almeno un numero
//? deve contenere almeno una maiuscola
//? deve contenere almeno un carattere speciale


$password = readline("Inserire la password: "); // legge l'input inserito nel terminale da un utente

//? deve avere almeno una lunghezza di 8 caratteri

// se la password è lunga almeno 8 caratteri
    //la password è valida
$checkLenght = false;
if(strlen($password) >= 8){
    $checkLenght = true;
}

var_dump($checkLenght);


//? deve contenere almeno un numero
//per ogni carattere presente nella stringa
    //se il caratatere è un numero
        //la password è valida
        //interompiti

$checkNumber = false;
for($i=0;$i<strlen($password);$i++){
    if(is_numeric($password[$i])){
        $checkNumber = true;
    }
}

var_dump($checkNumber);



//? deve contenere almeno una maiuscola
//per ogni carattere presente nella stringa
    //se il caratatere è maiuscolo
        //la password è valida
        //interompiti
$checkMaiuscola = false;

for($i = 0; $i < strlen($password);$i++){
    if(ctype_upper($password[$i])){
        $checkMaiuscola = true;
    }
}

var_dump($checkMaiuscola);


//? deve contenere almeno un carattere speciale
//per ogni carattere conutenuto nella password
    //per ogni carattere contenuto in specialChars
        //se il carattere della password è uguale al carattere di specialChars
            //la password è valida 
$checkSpecial= false;
$specialChars = ["^","'","£","$","%","^","&"];

foreach ($specialChars as $specialChar) {
    if(str_contains($password,$specialChar)){
        $checkSpecial= true;
    }
}

/* for($i =0; i < strlen($password);$i++){
    if(!ctype_upper($password[$i]) && !is_numeric($password[$i]) && !ctype_lower($password[$i])){
        $check = true
    }
} */

var_dump($checkSpecial);


//! sfruttare il paradigma funzionale