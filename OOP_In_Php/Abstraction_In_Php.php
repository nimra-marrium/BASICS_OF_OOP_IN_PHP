<?php

abstract class prnt  //access modiefiers should be public nothing else
{ 
    function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    function sub($num1, $num2)
    {
        return $num1 - $num2;
    }

    function div($num1, $num2)
    {
        return $num1 / $num2;
    }

    function mul($num1, $num2)
    {
        return $num1 * $num2;
    }
}

class child extends prnt
{

}

$obj1=new child();
echo $obj1->add(2, 3), "<br>";
echo $obj1->sub(2, 3), "<br>";
echo $obj1->div(2, 3), "<br>";
echo $obj1->mul(2, 3), "<br>";

?>