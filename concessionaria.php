<?php

/* Riprodurre una concessionaria di automobili in OOP seguendo questa gerarchia di classi, 
con caratteristiche a scelta (Marchio, Modello, Numero porte, Prezzo….e altri a vostra scelta)
Automobile
SUV
Utilitaria
Sportiva

Tenere il conto degli oggetti creati per ogni classe */


class Car{
    public $marchio;
    public $modello;
    public $prezzo;

    static public $counter = 0;

    public function __construct($marchio, $modello, $prezzo){
        $this->marchio = $marchio;
        $this->modello = $modello;
        $this->prezzo = $prezzo;

        self::$counter++;
    }

    public function muoviti(){
        echo "Portami a destinazione";
    }
}

class Suv extends Car{
    public function __construct($marchio, $modello, $prezzo){
        parent::__construct($marchio, $modello, $prezzo);
    }

    public function muoviti(){
        echo "Usa il 4x4";
    }
}

class Utilitaria extends Car{
    public function __construct($marchio, $modello, $prezzo){
        parent::__construct($marchio, $modello, $prezzo);
    }

    public function muoviti(){
        echo "Portami a fare la spesa";
    }
}

class Sportiva extends Car{

    static public $counter = 0;
    public function __construct($marchio, $modello, $prezzo){
        parent::__construct($marchio, $modello, $prezzo);

        self::$counter++;
    }

    public function muoviti(){
        echo "Portami ad una gara clandestina";
    }
}

$car = new Sportiva('Lamborghini','Aventador',4500);
$car1 = new Sportiva('Ferrari','458',4500);
$car2 = new Utilitaria('Fiat','Punto',4500);

$car->muoviti();
echo Car::$counter;
echo Sportiva::$counter;