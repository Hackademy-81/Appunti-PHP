<?php



//Extra 1: Implementare un metodo che faccia reinserire la password qualora le regole non fossero rispettate e che interrompa il programma in caso di password accettata.
//Extra 2:visualizzare eventualmente quale campo non e’ stato inserito
//Extra 3: provare a rifattorizzare il codice tramite l'uso delle funzioni

//estrapolamento, incapsulamento ed astrazione
function checkLenght($string)
{
    $checkLenght = false;
    if (strlen($string) >= 8) {
        $checkLenght = true;
    }
    
    return $checkLenght;
}

function checkNumber($string)
{
    $checkNumber = false;
    for ($i = 0; $i < strlen($string); $i++) {
        if (is_numeric($string[$i])) {
            $checkNumber = true;
        }
    }

    return $checkNumber;
}


function checkUpper($string)
{
    $checkMaiuscola = false;
    for ($i = 0; $i < strlen($string); $i++) {
        if (ctype_upper($string[$i])) {
            $checkMaiuscola = true;
        }
    }

    return $checkMaiuscola;
}

function checkSpecial($string)
{
    $specialChars = ["^", "'", "£", "$", "%", "^", "&"];

    foreach ($specialChars as $specialChar) {
        if (str_contains($string, $specialChar)) {
            return true;
        }
    }

    return false;
}


/* var_dump(checkLenght($password));
var_dump(checkNumber($password));
var_dump(checkUpper($password));
var_dump(checkSpecial($password)); */


//Implementare un metodo che faccia reinserire la password qualora le regole non fossero rispettate e
//che interrompa il programma in caso di password accettata.

//fino a quando almeno un check è false allora (OR)
//richiedere password

//se tutti i check sono true allora 
//non richiedere la password



function checkPassword($password)//ritorna true se la password è valida altrimenti ritorna false
{
    if (checkLenght($password) && checkNumber($password) && checkUpper($password) && checkSpecial($password)) {
        return true;
    }
    return false;
}

/* $password = readline("Inserire la password: ");
while (!checkPassword($password)) {//se la password non è valida (false) allora ripeti
    $password = readline("Inserire la password: ");
} */

do {//le istruzioni del do while vengono eseguite almeno 1 una volta a prescindere dalla condizione
    $password = readline("Inserire la password: ");
} while (!checkPassword($password));


/* $password = readline("Inserire la password: ");
$check1 = checkLenght($password);
$check2 = checkNumber($password);
$check3 = checkUpper($password);
$check4 = checkSpecial($password);
while (!$check1 || !$check2 || !$check3 || !$check4) {
    $password = readline("Inserire la password: ");
    $check1 = checkLenght($password);
    $check2 = checkNumber($password);
    $check3 = checkUpper($password);
    $check4 = checkSpecial($password);
} */