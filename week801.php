<?php
class Person
{
    public $name, $age; //1.properties
    
    function show() //2.method
    { 
        print("Name: ". $this->name . " Age: " . $this->age);
    }
}

$obj1 = new Person(); //Object
$obj1->name = "Mark Zuckerberg";
$obj1->age = 45;
$obj1->show();
