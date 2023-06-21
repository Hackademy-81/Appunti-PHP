<?php


//! variabili: locazione di memoria in cui vengono salvati dei dati o istruzioni

//?dichiarazione di una varabile
//regole:
//i nomi delle variabili non possono iniziare con un numero
//non possiamo utilizzare caratteri speciali tranne l'underscore
//non ci possono essere spazi
//case sensitive
$User;
$user;

//?assegnazione
$User = "Rosalia";
$user = "Omar";

/* echo $User;
echo $user; */

//? inizializzazione
$utente = "Pippo";



//! tipi di dati primitivi

//? interi: valori compresi tra +inf e -inf
$x = -5;

//? float: numeri decimali
$x = 5.4; //override di x

//? booleani: true o false. Utilizzati principalmente per verificare che una condizione viene verificata o meno
$bool = true; //true = 1
$bool2 = false; //false = 0

/* echo $bool2; */
//type coertion: la conversione da un tipo di dato ad un altro
//in questo caso echo converte le variabili in stringhe

//?string: sono una sequenza di caratteri alfanumerici
//?Dichirazione:
//? con '
//? con "

//?string interpolation: richiamare una variabile in una stringa
$age = 26;
$string = "Buongiorno, mi chiamo Donato e ho $age anni \n";

//? contatenazione
$string2 = 'Buongiorno, mi chiamo Donato e ho ' . $age . 'anni';

/* echo $string2;
echo $string; */


//! tipi di dati composti: possono contenere dati di verso tipo

//?array: lista di valori

$array = []; //dichiarazione di un array vuoto

$numeri = [1, 2, 3, 4, 5]; //array omogeneo: tutti gli elementi dell'array sono dello stesso tipo
$stringhe = ["a", "b", "c"]; // array omogeneo

$array2 = [1, 2, 3, [5, 6, 7]]; // un array eterogeneo
$array3 = [1, "a", true, ["Doanto", 3]]; // array eterogeneo


//var_dump e il print_r perfettono di stampare dati composti
/* var_dump($array3); */
/* print_r($array3[1]); */
/* echo "Ciao" . $array3[3][0]; */
/* print_r("Ciao " . $array3[3][0] . " !"); */


//?array associativi: sono come gli array normali ma con la possibilità di assegnare degli indici personalizzati
$student = [
    [
        "nome" => "Rosalia",
        "cognome" => "Auciello",
    ],
    [
        "nome" => "Leonardo",
        "cognome" => "Lerario",
    ],
    [
        "nome" => "Luca",
        "cognome" => "Sessa",
    ]
];

/* print_r($student[1]["cognome"]); */

//? oggetti






//! operatori: permettono di effettuare delle operazioni sui dati
//? operatori matematici
$a = 5;
$b = 2;
$sum = $a + $b;
$diff = $a - $b;
$div = $a / $b;
$molt = $a * $b;
$mod = $a % $b; //restituisce il resto della divisione tra i due operandi


//? operatori di confronto: restituiscono sempre un valore booleano,
//? e sono utilizzati per controllare se una condizione viene soddisfatta o meno


//uguaglianza: == o ===
//==: confronta i valori dei due operandi e se sono uguali restituisce true altrimenti false
//===: confronta prima il tipo di dato dei due operandi e successivamente confronta anche i valori
$x = 3;
$y = 2;

/* $x = $y; *///sto assegnado a x, il contenuto di y. Da non confondere con == e ===

//>,<,>=,<=
$result = $x > $y;
/* var_dump($result); */

//?operatori logici
//AND, OR, NOT

//? AND (&&): restituisce tre se entrambi gli operandi sono true. False in tutti gli atri casi
$x = 3;
$y = 2;

$op1 = $x > $y; //true
$op2 = $x < $y; //false

$result = $op1 && $op2; //true

//? OR (||): restituisce true se almeno uno dei due operandi vale true. Se entrambi gli operandi sono false, restituisce false

$result = $op1 || $op2; //false


//? NOT (!): inverte il valore booleano. Quindi true => false, false => true.

$result = !$op1; //false

/* var_dump($result); */




//! costrutti
//un problema lo risolviamo tramite degli algoritmi
//gli algoritmi sono sequenza di istruzioni che hanno come fine quello di risolvere un dato problema

//Per Bohm e Jacopini qualunque algoritmo può essere risolto tramite 3 costrutti

//? sequenza: l'ordine in cui vengono eseguite le istruzioni
$num = 1;
$num2 = 5;
$sum = $num + $num2;


//?selezione: ci permette di eseguire delle istruzioni al verficarsi o meno di una condizione
//obiettivo: permettere all'utente di guidare o meno
$age = 17;
/* if (){
    //istruzioni eseguite se la condizione si verifica (true)
} */

/* if ($age >= 18){
    echo "Ok! Puoi guidare.";
}else{
    echo "Mi dispiace ma non puoi guidare.";
} */

//dobbiamo stampare il colore preferito dell'utente
$colore = "rosso";

/* if ($colore == "blu") {
    echo "Il blu è il tuo colore preferito.";
} else if ($colore == "rosso") {
    echo "Il rosso è il tuo colore preferito.";
} else if ($colore == "verde") {
    echo "Il verde è il tuo colore preferito.";
}else{
    echo "Colore non identificato!";
} */


/* switch(){ *//* variabile da controllare */
//caso (qui effettiamo il controlloro sulla variabile indicata sopra) 
//istruzione
//caso
//istruzione
//caso
//istruzione
/* } */


//dobbiamo stampare il colore preferito dell'utente
$colore = "giallo";
/* switch ($colore) {
    case "blu":
        echo "Il blu è il tuo colore preferito.";
        break;
    case "rosso":
        echo "Il rosso è il tuo colore preferito.";
        break;
    case "verde":
        echo "Il verde è il tuo colore preferito.";
        break;
    default:
        echo "Colore sconosciuto.";
} */



//? iterazione: ripetizione di un blocco di codice fino a quando una condizione viene verificata

/* for( *//* condizione ){*/
    //istruzioni
/* } */

$array = [1,2,3,4,5,6];
// Numero: 1
// Numero: 2
//...

for(
    $i = 0; //contatore
    $i < count($array); //condizione
    $i++ // incremento del contatore
){
    echo "Numero : $array[$i] \n";
}

/* echo "Numero : $array[0] \n";
echo "Numero : $array[1] \n";
echo "Numero : $array[2] \n";
echo "Numero : $array[3] \n";
echo "Numero : $array[4] \n";
echo "Numero : $array[5] \n"; */

$i = 0;
while($i < count($array)){
    echo "Numero : $array[$i] \n";
    $i++;
}

$array = [1,2,3,4,5,6];
foreach($array as $pino => $pippo){
    echo "Foreach : $pippo ($pino) \n";
}




?>