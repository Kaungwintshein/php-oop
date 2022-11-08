<?php 
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set("display_errors", '1');

    class Dog{
        // Properties
        public $name;
        public $color;

        // Methods
        public function bark(){
            echo "<h1>Woof!</h1>";   
        }
        public function eat(){
            echo "<h1>DOG eat Bones...</h1>";   
        }
    }

    $dog = new Dog();
    $dog->name = "Aung Net";
    echo $dog->name;
    echo $dog->bark();

    class Cat{
        public $name;
        public function meow(){
            echo "<h1>Meow!</h1>";
        }
    }

    $cat = new Cat();
    $cat->name = "Shwe War";
    echo $cat->name;
    $cat->meow();