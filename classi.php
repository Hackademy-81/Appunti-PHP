<?php

$user1 = [
    "username" => "Luca",
    "email" => "luca@gmail.com",
    "password" => "12345678"
];

$user2 = [
    "username" => "Elisa",
    "email" => "elisa@gmail.com",
    "password" => "12345678"
];

$user3 = [
    "name" => "Elisa",
    "email" => "elisa@gmail.com",
    "password" => "12345678"
];


//una classe ci permette di struttarare un progetto in blocchi di codice e potremo usare la classe per creare degli oggetti
//una classe inoltre ci permette di rappresentare un insieme di dati con caratteristiche in comune


//stiamo solamente descrivendo come saranno gli oggetti di tipo User
class User
{ //prima lettera maiuscola, sempre al singolare e in inglese
    //attributi
    public $username;
    public $email;
    private $password;

    //dichiarando un attributo statico
    static public $counter = 0;

    //metodi
    //costruttore:è una funzione che serve a costruire (valorizzare) il nostro oggetto
    public function __construct($username, $email, $password)
    { //può accettare dei parametri formali
        //il $this serve per richiamare un attributo di un futuro oggetto istanziato
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;

        //permette di richiamare un attributo statico all'interno della classe stessa
        self::$counter++;

        echo $this->password;
    }

    public function saluta()
    { //con questo metodo sto creando una funzione "personalizzata" per ogni futuro oggetto istanziato
        return "Ciao, sono " . $this->username;
    }

    static public function printCounter()
    {
        echo "Gli utenti sono: " . self::$counter;
    }
}

/* $user = new User("Arianna","arianna@gmail.com","12345678");//abbiamo istanziato un uovo oggetto di tipo User che rispettarà le regole della classe User
                //abbiamo anche richiamato il costruttore della classe User
$user2 = new User("Pasquale","pasquale@gmail.com","12345678");

$user3 = new User("Pasquale","pasquale@gmail.com","12345678"); */




//metodi e attributi statici: possono essere invocati anche senza istanziare un oggetto
//essi non agiscono sull'oggetto ma sulla classe

//ad esempio: voglio contare quanti utenti sono presenti sul mio sito

//richiamando un attributo statico
/* User::printCounter(); */


//! ereditarietà: permette di tramandare attributi e metodi ad altre classi che saranno più specializzate


class Student extends User
{ //la classe Student è figlia di User
    public $avg;
    public function __construct($username, $email, $password, $avg)
    {
        parent::__construct($username, $email, $password);

        $this->avg = $avg;
    }
}

$student = new Student("Arianna", "arianna@gmail.com", "12345678", 8);


class Teacher extends User
{ //la classe Student è figlia di User
    protected $salary;
    public function __construct($username, $email, $password, $salary)
    {
        parent::__construct($username, $email, $password);

        $this->salary = 7;
    }

    public function saluta()
    { //override
        echo "Buongiorno ragazzi! Sono il prof. " . $this->username;
    }

    public function printUsername(){
        echo $this->username;
    }
}

$teacher = new Teacher("Donato", "donato@gmail.com", "12345678", "700000000");







//!access modifier: indicano la visibilità di attributi e metodi
//public: possiamo visualizzare e modificare un attributo/metodo in qualsiasi porzione di codice
//protected: ciò che è protected non è accessible al di fuori della classe stessa sia per la modifica ma anche per la visualizzazione
//permette di accedere agli attributi anche della classe genitore
//private: non permette di accedere agli attributi in qualsisasi porzione del codice che non sia diverso dalla classe stessa (non è compatibile con la ereditarietà)


