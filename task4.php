<?php
class Worker{
    private $name, $age, $salary;
    public function __construct($name, $salary, $age){
        $this -> name = $name;
        $this -> salary = $salary;
        $this -> age = $age;
    }

    public function getName(){
        return $this -> name;
    }

    public function getSalary(){
        return $this -> salary;
    }

    public function getAge(){
        return $this -> age;
    }

}

$worker1 = new Worker ("Діма", 20,600);
echo "Result: ".($worker1 -> getSalary()*$worker1 -> getAge())."<br>";

?>
