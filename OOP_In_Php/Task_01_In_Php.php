<?php //Libaray Management though Classes 

class Library{
    public $name;
    public $price;
    public $publishdate;
    public $authorname;

    function __construct($na, $pr, $pu, $au)  //Special Function (Constructor)
    {
        $this->name=$na;
        $this->price=$pr;
        $this->publishdate=$pu;
        $this->authorname=$au;
    }

    function Issue_material()
    {
        $age=19;
        if($age>25)
        {
            echo "You can Issue any amount of Books/other material as per your choice";
        }
        else if($age>18 && $age<25)
        {
            echo "You can order any two books/other material";
        }
        else{
            echo "You can only buy one book/other material";
        }
    }
}

$b1=new Library("<b>Titanic Enigma<b>", "500", "July 2000", "Tom West");
echo $b1->name, "<br>";
echo $b1->price, "<br>";
echo $b1->publishdate, "<br>";
echo $b1->authorname, "<br>";
echo $b1->issue_material(), "<br>";

echo "************************************** <br>";

$b2=new Library("<b>The Mister<b>", "750", "January 2020", "EL James");
echo $b2->name, "<br>";
echo $b2->price, "<br>";
echo $b2->publishdate, "<br>";
echo $b2->authorname, "<br>";
echo $b2->issue_material(), "<br>";

echo "************************************** <br>";

$b3=new Library("<b>The Kite Runner<b>", "400", "March 2016", "Khaled Hosseini");
echo $b3->name, "<br>";
echo $b3->price, "<br>";
echo $b3->publishdate, "<br>";
echo $b3->authorname, "<br>";
echo $b3->issue_material(), "<br>";

echo "************************************** <br>";
?>