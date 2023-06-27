<?php
//! dependency injection: ci permette di far dipendere il funzionamento di un classe da una altra classe

class Manichino {
    public $braccia;
    public $gambe;


    //dependency injection: da ora in poi non posso istanziare un oggetto senza un'altro oggetto di tipo Braccia
    public function __construct(Braccia $braccia,Gambe $gambe){
        $this->braccia = $braccia;
        $this->gambe = $gambe;
    }
}

$ceffone = new Ceffone();
$pugno = new Pugno();
$gambe = new Gambe(2);//istanziare un oggetto di tipo Gambe
$manichino = new Manichino($pugno,$gambe);//object composition

$manichino->braccia->attacca();

abstract class Braccia{
    abstract public function attacca();
}

class Pugno extends Braccia{
    public function attacca(){
        echo "Ti sto tirando un pugno \n";
    }
}

class Ceffone extends Braccia{
    public function attacca(){
        echo "Ti sto tirando un ceffone \n";
    }
}

class Gambe{
    public $numero;

    public function __construct($numero){
        $this->numero = $numero;
    }
    public function muoviti(){
        echo "Mi sto muovendo \n";
    }
}


