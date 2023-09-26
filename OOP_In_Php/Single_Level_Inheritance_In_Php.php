<?php
class Prnt
{  
    public $name;
    function __construct($a)
    {
        $this->name = $a;
    }

    function abc()
    {
        return "This is Parent Class";
    }
}

$obj1=new prnt("<b>Nimra<b> ");
echo $obj1->name, "<br>";
echo $obj1->abc(), "<br>";

class Child extends Prnt
{
    
}
$obj2=new Child("<b>Marrium<b>");
echo $obj2->name, "<br>";
echo $obj2->abc();
?>