<?php
class Pet {
    // Properties
    public $name;
    public $color;

    // Constructor
    public function __construct($x, $y) {
        $this->name = $x;
        $this->color = $y;
    }
}

class Dog extends Pet {
    // Constructor for Dog class, calls the parent constructor
    public function __construct($x, $y) {
        parent::__construct($x, $y); // Call the parent constructor to initialize name and color
    }

    // Method to make the dog bark
    public function bark() {
        echo $this->name . " is barking.";
    }
}

// Object instantiation
$pet = new Pet("Blacky", "Brown");
echo $pet->name . "<br>";
echo $pet->color . "<br>";
echo "<hr>";
$dog = new Dog("Rex", "Black"); // Create a Dog object with name and color
echo $dog->bark(). "<br>";
echo "<hr>";
echo $dog->name. "<br>";
echo $dog->color. "<br>";
?>
