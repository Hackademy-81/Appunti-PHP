<?php

//simulare un carrello di un ecommerce
//dichiarare una classe carrello
//attributo che contiene i prodotti comprati
//importo totale = sommatoria di tutti gli importi dei prodotti
//dichiarare una classe prodotto
//nome
//prezzo
//quantità
//importo = prezzo * quantità

class Carrello
{
    public $prodotti;
    public $importo_totale = 0;

    public function __construct(Prodotto ...$prodotti)//dependency injection
    {
        $this->prodotti = $prodotti;

        $this->calcolaImporto();
    }

    public function calcolaImporto(){
        foreach ($this->prodotti as $prodotto) {
            $this->importo_totale += $prodotto->importo;
        }
    }
} 



abstract class Prodotto
{
    public $nome;
    public $prezzo;
    public $quantità;
    public $importo;

    public function __construct($nome, $prezzo, $quantità)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->quantità = $quantità;
    }

    abstract public function calcolaImporto();
}


class Drone extends Prodotto{
    public function __construct($nome, $prezzo, $quantità){
        parent::__construct($nome, $prezzo, $quantità);
        $this->calcolaImporto();
    }
    public function calcolaImporto(){
        $this->importo = $this->quantità * $this->prezzo;
        return "Costo:" . $this->quantità * $this->prezzo . "$ e posso volare";
    }
}

class Telefono extends Prodotto{
    public function __construct($nome, $prezzo, $quantità){
        parent::__construct($nome, $prezzo, $quantità);
        $this->calcolaImporto();
    }
    public function calcolaImporto(){
        $this->importo = $this->quantità * $this->prezzo;
        return "Costo:" . $this->quantità * $this->prezzo . "$ e posso chiamare";
    }
}
class USB extends Prodotto{
    public function __construct($nome, $prezzo, $quantità){
        parent::__construct($nome, $prezzo, $quantità);
        $this->calcolaImporto();
    }
    public function calcolaImporto(){
        $this->importo = $this->quantità * $this->prezzo;
       return "Costo:" . $this->quantità * $this->prezzo . "$ e posso memorizzare dati";
    }
}


$prodotto1 = new Telefono('Galaxy',300,1);
$prodotto2 = new Telefono('Iphone',1300,1);
$prodotto3 = new USB('Kingstone',30,2);
$carrello = new Carrello($prodotto1,$prodotto2,$prodotto3);//object composition
var_dump($carrello);