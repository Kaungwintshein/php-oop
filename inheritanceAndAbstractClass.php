<?php 
    declare(strict_types=1);
    error_reporting(E_ALL);
    ini_set("display_errors", '1');

    /**
     * DRY - Don't Repeat Yourself
     */
    abstract class Animal {
        // Properties
        public $name;
        public $color;
        
        // Methods
        public function eat(){
            echo "<h1>Eat!</h1>";
        }
    }
    class Dog extends Animal{
        public function bark(){
            echo "<h1>Woof!</h1>";   
        }
    }
    class Cat{
        public function meow(){
            echo "<h1>Meow!</h1>";
        }
    }
    class Bird extends Animal{
        public function sing(){
            echo "<h1>Sing!</h1>";
        }
    }
    
    $dog = new Dog();
    $dog->name = "Aung Net";
    echo $dog->name;
    echo $dog->bark();
    
    $cat = new Cat();
    $cat->name = "Shwe War";
    echo $cat->name;
    $cat->meow();

    $bird = new Bird();
    $bird->sing();