<?php
class Employee{
    public $name, $age, $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    // function __construct()
    // {
    //     print("Employee Constructor");
    // }

    public function info()
    {
        print("<h1>Employee Profile</h1><hr />");
        print("Employee Name: " . $this->name . "<br />");
        print("Employee Age: " . $this->age . "<br />");
        print("Employee Salary: " . $this->salary);
    }
}

class Manager extends Employee{
    function __construct()
    {
        // print("Manager Constructor");
    }
}

// $obj1 = new Employee();
$m1 = new Manager("Jeff Bezzo",55,3500000);
$m1->info();
// $obj1->info();