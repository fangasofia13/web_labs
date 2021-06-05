<?php

abstract class Animal {

    protected $name;
    protected $color;

    public function __construct(string $name, string $color) {
        $this->name = $name;
        $this->color = $color;
    }

    public function sayHello() {
        echo 'Hello! My name is ' . $this->name . '.';
        echo ('<br>');
        echo 'I am a ' . get_class($this) . '.';
        echo ('<br>');
        echo 'My color is ' . $this->color . '.';
        echo ('<br>');
    }

    public function setName(string $name) {
        $this->name = $name;
    }

    abstract public function setColor(string $color);

    public function getName() : string {
        return $this->name;
    }

    abstract public function getColor();
}

?>