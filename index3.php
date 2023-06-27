<?php

//! classi astratte rappresentano il concetto più astratto che vogliamo rappresentare
//! possono essere utilizzare per dettare regole alle classi figlie

abstract class Person
{ //la classe Person essendo una classe astratta non potrà più essere istanziata
    public $name;
    public $surname;
    public $age;

    static public $counter;

    public function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;

        self::$counter++;
    }

    abstract public function saluta();
}

class Student extends Person
{
    use Jetpack;
    public $avg;

    public function __construct($name, $surname, $age)
    {
        parent::__construct($name, $surname, $age);
    }

    public function saluta()
    {
        echo "Ciao, sono $this->name e ho una media $this->avg";
    }
}

class Teacher extends Person
{
    use Jetpack;
    public $salary;
    public function __construct($name, $surname, $age, $salary)
    {
        parent::__construct($name, $surname, $age);

        $this->salary = $salary;
    }

    public function saluta()
    {
        echo "Buongiorno, sono $this->name e ho uno stipendio di $this->salary$";
    }
}



class Car
{
    public $marchio;
    public $modello;
    public $prezzo;

    static public $counter = 0;

    public function __construct($marchio, $modello, $prezzo)
    {
        $this->marchio = $marchio;
        $this->modello = $modello;
        $this->prezzo = $prezzo;

        self::$counter++;
    }

    public function muoviti()
    {
        echo "Portami a destinazione";
    }
}

class Suv extends Car
{
    use Jetpack;

    public function __construct($marchio, $modello, $prezzo)
    {
        parent::__construct($marchio, $modello, $prezzo);
    }

    public function muoviti()
    {
        echo "Usa il 4x4";
    }
}


//! traits: porzioni di codice a cui possiamo far accedere delle classi che sono fuori contesto

trait Jetpack
{
    public function volo()
    {
        echo "Ciao mamma, sto volandooo!!!!";
    }

    public function nuota(){
        echo "Sto per annegare";
    }
}


$teacher = new Teacher("Doanto", "Bitetto", 26, 70000000);
$student = new Student("Doanto", "Bitetto", 26, 70000000);
$suv = new Suv("Jeep", "Boh", 26000);
$teacher->volo();
$student->nuota();
$suv->volo();
$suv->nuota();



