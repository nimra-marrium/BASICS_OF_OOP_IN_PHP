<?php

class prnt //Multi Level Inheritance
{
    public $name, $age;
    function __construct($a, $b)
    {
        $this->name = $a;
        $this->age = $b;
    }

    function abc(){
        return "This is Parent Class";
    }
}

$obj1=new prnt("<b>Nimra<b> ", 40);
echo $obj1->name, "<br>";
echo $obj1->age, "<br>";
echo $obj1->abc(), "<br>";

class child extends prnt
{

}

$obj2=new child("<b>Marrium<b>", 20);
echo $obj2->name, "<br>";
echo $obj2->age, "<br>";
echo $obj2->abc();

class grndprnt extends child
{

}

$obj3=new grndprnt("<br> <b>hehe<b>", 60);
echo $obj3->name, "<br>";
echo $obj3->age, "<br>";
echo $obj3->abc();
?>