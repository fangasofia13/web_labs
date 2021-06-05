<?php

include 'vison.php';

// imitation
$vison1 = new Vison('Grag', 'brown', 3.5);
$vison1->setAge(2);
$vison1->sayHello();

// interface
$vison1->makeSound();

// trait
$vison1->sayOffer();

// abstract class
$vison1->setColor('red');
echo $vison1->getColor();

// static methods
Vison::staticMethodsBye();

?>