<?php
class Car {
    //properties
    // public $name;
    private $name;
    public $price ;

    //methods
    //Void Function
    public function setCarName($x = "default name",$y="default price"){
       $this->name=$x;         
       $this->price=$y;    
    }

    public function getName(){
        return $this->name;
    }

    //Type Function
    public function getCarName(){
         return  $this->name."<br>".$this->price;
     }
}

//Object Instantiate
$result = new Car();
 $result->setCarName("BMW","$10000" );
//$result->setCarName();
$res = $result->getCarName();
echo $res."<br>";

//echo $result->name;//can call outside class bcoz public

$getName = $result->getName();
echo $getName."<br>";
?>
