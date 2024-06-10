<?php

interface I1
{
    function get_data();

    function show_data();
}

class A implements I1
{
    function get_data()
    {
    }

    function show_data()
    {
    }
}

class B implements I1
{
    function get_data()
    {
    }

    function show_data()
    {
    }
}

$a = new A();
$b = new B();

$a->get_data();
$a->show_data();

$b->get_data();
$b->show_data();

?>