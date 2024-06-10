<?php
class student{
    public $name;
    public $age;
    function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
    function setAge($age){
        $this->age=$age;
    }
    function getAge(){
        return $this->age;
    }
}
$obj = new student();
$obj->setName("Shiraz");
$obj->setAge("21");
echo "Your Name is : ".$obj->getName();
echo "<br>Your Age is : ".$obj->getAge();

