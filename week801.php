<?php
class Person
{
    public $name, $age; //1.properties

    function __construct($n,$a)
    {
        $this->name = $n;
        $this->age = $a;
    }
    
    function show() //2.method
    { 
        print("Name: ". $this->name . " Age: " . $this->age);
    }
}

//$obj1 = new Person(); //Object1
$obj2 = new Person("Elon Mask",50); //Object2
$obj2->show();
// $obj1->name = "Mark Zuckerberg";
// $obj1->age = 45;
// $obj1->show();
