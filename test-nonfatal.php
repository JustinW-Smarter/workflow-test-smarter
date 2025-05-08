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

// Error: Hardcoded wachtwoord
    $password = "SuperSecret123"; // DevSkim zal dit detecteren als een hardcoded wachtwoord

// Warning: Verkeerd gebruik van een functie
    echo strtoupper("hello world"); // DevSkim kan dit als een waarschuwing detecteren, afhankelijk van je configuratie