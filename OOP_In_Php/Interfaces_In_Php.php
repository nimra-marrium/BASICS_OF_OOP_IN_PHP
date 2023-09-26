<?php

 /*Interfaces are important as in interfaces we only define methods and to implement interfaces we have to implement 
 all the defined methods, if we will not then it will through a fatal error. This will be usefull when you have to 
 implment all the methods in your project.*/

interface human
{
    function walk();
    function eat();
    function drink();
}

interface animal
{
    function crawl();
}

class HandA implements human, animal{
    function walk()
    {
        echo "Human and Animals Walk";
    }

    function eat()
    {
        echo "Human and Animals Eat";
    }

    function drink()
    {
        echo "Human and Animal drink";
    }

    function crawl()
    {
        echo "Animal crawl and Human does not";
    }
}

$obj1 = new HandA();
echo $obj1->walk(), "<br>";
echo $obj1->eat(), "<br>";
echo $obj1->drink(), "<br>";
echo $obj1->crawl(), "<br>";

?>