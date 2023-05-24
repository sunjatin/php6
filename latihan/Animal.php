<?php

//nama class 
class Animal{
    //property/atribute
    public $name;
    public $jenis;


    //method/ behavior
    public function eat()
    {
        echo $this->name . "Kohceng.";
    }
    public function karnivora()
    {
        return $this->jenis . "Kucing oyen";
    }
}

//membuat object baru
$animal = new Animal();
$animal->name = 'Kohceng ';
$animal->eat();

echo '<br>';

$animal = new Animal();
$animal->name= 'Kucing ';
echo $animal->name;

echo '<br>';

$animal->name= 'Nan ';
echo $animal->name;