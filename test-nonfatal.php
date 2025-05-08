<?php

    function sayHello($name)
    {
        echo "Hello, " . $name;
    }

    class Greeter
    {
        public function greet($name){
            echo "Hi " . $name . "\n";
        }
    }

    $greeter = new Greeter();
    $greeter->greet("World");