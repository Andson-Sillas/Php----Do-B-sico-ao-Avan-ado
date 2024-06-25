<?php

class Person
{
    public $name = 'Alice';
    public $age = 25;

    public function greet()
    {
        return 'Hello, my name is ' . $this->name;
    }
}
$person = new Person();
print_r($person);
