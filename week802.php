<?php
class Employee
{
    public $name, $age, $salary;

    function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    public function info()
    {
        print("<h1>Employee Profile</h1><hr />");
        print("Employee Name: " . $this->name . "<br />");
        print("Employee Age: " . $this->age . "<br />");
        print("Employee Salary: " . $this->salary);
    }
}

$obj1 = new Employee("Mark",45,3000000);
$obj1->info();