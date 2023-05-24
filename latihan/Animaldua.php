<?php

//nama class 
class Animal{
    //property/atribute
    public $name;
    public $age;
    public $color;
    public $weight;

    //method/ behavior
    public function eat()
    {
        echo $this->name . "Eating donut.";
    }
    public function sleep()
    {
        echo $this->name . "Sleeping cyantik";
    }
}

//new object dari kelas Animal
$tiger = new Animal();
//isi properti object
$tiger->name="Harimau ";
$tiger->age="3";
$tiger->color="oren";
$tiger->weight="100";
//menampilkan properti object
echo $tiger->name;
echo "<br>";
echo $tiger->age;
echo "<br>";
echo $tiger->color;
echo "<br>";
echo $tiger->weight;
echo "<br>";
//menjalankan method
echo $tiger->eat();
echo "<br>";
echo $tiger->sleep();