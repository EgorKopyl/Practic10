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
$worker1 -> setName ('Діма');
$worker1 -> setAge = (20);
$worker1 -> setSalary = (800);

$worker2 = new Worker();
$worker2 -> setName ('Вася');
$worker2 -> setAge (26);
$worker2 -> setSalary (1500);

echo "Amount of salary:" .($worker1 -> getSalary() + $worker2 -> getSalary())."<br>";
echo "Amount of age:"  .($worker1 -> getAge() + $worker2 -> getAge())."<br>";

?>
