<?php
//nama class 
class Animal{
    //property/atribute
    public $name;
    public $jenis;
    function __construct($name, $jenis)
    {
        $this->name=$name;
        $this->jenis=$jenis;
    }
    function harimau()
    {
        return "Hewan ini adalah " . $this->name
        . " jenis " . $this->jenis . ". ";
    }
}

class Cat extends Animal{
    public $sifat;
    
    function __construct($sifat)
    {
        $this->sifat=$sifat;
    }
    function kitty()
    {
        return "Kucing adalah hewan yang " . $this->sifat .".";
    } 
}

class Dog extends Animal{
    public $plus;
    function __construct($plus)
    {
        $this->plus=$plus;
    }
    function buddy()
    {
        return "Anjing adalah hewan " . $this->plus . ".";
    }
}
//animal
$animal = new Animal("Harimau", "Karnivora");
echo $animal->harimau();
echo "<br>";

//cat
$cat = new Cat("suka bermain dan bersih");
$cat->name="Kohceng";
$cat->jenis="Kucing";
echo $cat->harimau();
echo $cat->kitty();
echo "<br>";

//dog
$dog = new Dog("yang setia dan cerdas");
$dog->name="Buddy";
$dog->jenis="Anjing";
echo $dog->harimau();
echo $dog->buddy();





