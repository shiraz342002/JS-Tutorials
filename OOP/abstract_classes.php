<?php
// Parent class
abstract class Car {
  public $name;
 
  abstract public function intro($name) : string;
}

// Child classes
class Audi extends Car {
  public function intro($name) : string {
    return "Choose German quality! I'm an $name!";
  }
}

class Volvo extends Car {
  public function intro($name) : string {
    return "Proud to be Swedish! I'm a $name!";
  }
}

class Citroen extends Car {
  public function intro($name) : string {
    return "French extravagance! I'm a $name!";
  }
}

// Create objects from the child classes
$audi = new audi();
echo $audi->intro("Audi");
echo "<br>";

$volvo = new volvo();
echo $volvo->intro("Volvo");
echo "<br>";

$citroen = new citroen();
echo $citroen->intro("Citroen");
?>