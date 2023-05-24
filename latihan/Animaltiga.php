<?php
//nama class 
class Animal{
    //property/atribute
    public $name;
    public $jenis;
    public $def;
    public $tipe;
    public function __construct($name, $jenis, $def, $tipe)
    {
        $this->name=$name;
        $this->jenis=$jenis;
        $this->def=$def;
        $this->tipe=$tipe;

        echo $this->getInfo();
    }
    //method/ behavior
   public function eat()
    {
        echo $this->name . "Eating donut.";
    }
    public function sleep()
    {
        echo $this->name . "Sleeping cyantik";
    }
    
    public function getInfo()
    {
        return "Hewan ini adalah " . $this->name
        . " jenis " . $this->jenis
        . " Kohceng adalah hewan yang " . $this->def
        . " " . $this->tipe;
    }

}
//new object dari kelas Animal
$cat = new Animal("Kitty", "Kohceng.", "suka bermain", "dan bersih."); 
'<br>'; 
$cat = new Animal("Buddy", "Anjing.", "setia", "dan cerdas.");






