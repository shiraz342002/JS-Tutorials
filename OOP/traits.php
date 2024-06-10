<?php
use x\MyClass;
trait message1 {
  public function msg1() {
    echo "OOP is fun! ";
  }
  public $name="Shiraz";
}

trait message2 {
  public function msg2() {
    echo "OOP reduces code duplication!";
  }
}

class Welcome {
  use message1;
}

class Welcome2 {
  use message1, message2;
}

$obj = new Welcome();
$obj->msg1();

echo "<br>";
echo $obj->name;
$obj2 = new Welcome2();
$obj2->msg1();
$obj2->msg2();


$arslan_obj= new MyClass();
// echo $arslan_obj->name;
 echo $arslan_obj->sayHello();
?>