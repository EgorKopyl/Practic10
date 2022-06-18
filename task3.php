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
       if($this -> chekAge($Age)){
            return $this -> age = $Age;
       }
    }

    public function getAge(){
        return $this -> age;
    }

    public function setSalary($Salary){
        $this -> salary = $Salary;
    }

    public function getSalary(){
        return $this -> salary;
    }

    private function chekAge($Age){
        if($Age <= 100){
            return true;
        } else {
            return false;
        }
    }

}

$worker1 = new Worker();
$worker1 -> setName ('Максм');
$worker1 -> setAge = (25);
$worker1 -> setSalary = (2000);

echo "Age:".($worker1 -> getAge())."<br>";
$worker1 -> setAge(102);
echo "Age:".($worker1 -> getAge())."<br>";
$worker1 -> setAge(100);

?>
