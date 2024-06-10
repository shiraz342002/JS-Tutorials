<?php
namespace x;
// Abstract
abstract class car
{
    abstract public function f1();
}

class mehran extends car
{
    public function f1()
    {
        echo "Hello";
    }
}

$o = new mehran();
$o -> f1();

// Interface

interface vagen
{
    public function f2();
}
class bolaan implements car
{
    public function f2()
    {
        echo "Hello";
    }
}

$o = new bolaan();
$o -> f2();
//variable is also called field, property


// Traits
trait A
{
    function f3()
    {

    }
}
trait B
{
    function f4()
    {

    }
}

class student
{
    public $name="Arslan Abid ";
    public function hello(){
        echo "Hello World from ryk";
    }
    use A;
    use B;
}
class MyClass {
    public function sayHello() {
        echo "Hello from MyClass in MyNamespace!";
    }
}
$s = new student();
$s -> f3();
$s -> f4();

// static member
class C
{
    public static function f5()
    {
        echo "Hello";
    }
    public static function f6()
    {
        self::f5();
    }
    
}

class D
{
    
    public function f6()
    {
        C::f5();
    }
}

class E extends C
{
    function f7()
    {
        parent::f5();
    }
}

// Iterable

function f8(iterable $x)
{
    foreach($x as $item)
    echo $item;
}
$p = ["ali", "nasir", "kashif"];
f8($p);

?>