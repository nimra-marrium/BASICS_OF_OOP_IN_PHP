<?php

class Person  //Concept  Of Classes And Objects
{  
    public $name, $gender, $cnic;

    function __construct($a, $b, $c) //Positional Argumants / Special Function which is SelfCallable
    {
        $this->name = $a;
        $this->gender = $b;
        $this->cnic = $c;
    }

    function works()
    {
        return "This Person is working Full-Time";
    }
}

$f1 = new Person("<b>Nimra</b>", "Female", 2468294510559);

echo $f1->name, "<br>" ;
echo $f1->gender, "<br>";
echo $f1->cnic, "<br>";
echo $f1->works(), "<br>"; 

echo "******************* <br>";

$f1 = new Person("<b>Saliha</b>", "Female", 3956174829774);

echo $f1->name, "<br>", $f1->gender, "<br>", $f1->cnic, "<br>", $f1->works(), "<br>" ;
echo "******************* <br>";

?>