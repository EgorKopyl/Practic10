<?php

class Worker{
    private $name, $age, $salary;

    public function setName($Name){
        $this -> name = $Name;
    }

    public function getName(){
        return $this -> name;
    }

    public function setAge($Age){
        $this -> age = $Age;
    }

    public function getName(){
        return $this -> age;
    }

    public function setSalary($Salary){
        $this -> salary = $Salary;
    }

    public function getSalary(){
        return $this -> salary;
    }

}


$worker1 = new Worker();
$worker1 -> setName ('Іван');
$worker1 -> setAge = (25);
$worker1 -> setSalary = (1000);

$worker2 = new Worker();
$worker2 -> setName ('Василь');
$worker2 -> setAge (26);
$worker2 -> setSalary (2000);

echo "Amount of salary:" .($worker1 -> getSalary() + $worker2 -> getSalary())."<br>";
echo "Amount of age:"  .($worker1 -> getAge() + $worker2 -> getAge())."<br>";

?>
