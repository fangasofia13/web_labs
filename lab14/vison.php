<?php

include 'animal.php';
include 'interfaceSound.php';
include 'traitOffer.php';

class Vison extends Animal implements Sound {

    private $weight;
    private $age;

    public function __construct(string $name, string $color, float $weight) {
        parent::__construct($name, $color);
        $this->weight = $weight;
    }

    public function sayHello() {
        parent::sayHello();
        echo 'My weight is ' . $this->weight . '.';
        echo ('<br>');
        echo 'I am ' . $this->age . ' years old' . '.';
        echo ('<br>');
    }

    public function setAge(float $age) {
        $this->age = $age;  
    }

    public function getAge() {
        return $this->age;
    }

    // interface
    public function makeSound() {
        echo "Meow!";
        echo ('<br>');
    }

    // trait
    use friendlyOffer;

    // abstract class
    public function setColor(string $color) {
        $this->color = $color;
    }
    
    public function getColor() {
        echo 'Ohh! My fur color has changed to ' . $this->color . '!';
        echo ('<br>');
    }

    // static methods
    public static function staticMethodsBye() {
        echo 'Okay, it&#39s time for me to go, see you later!';
        echo ('<br>');
    }

}

?>