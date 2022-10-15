<?php

class Person {

    public $name;
    private $age;

    function __construct($name='Joe',$age=20)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function getInfo(){
        return json_encode([
            'name' => $this->name,
            'age' => $this->age,
        ]);
    }

}

$p1 = new Person('Ruru',28);
$p1->name = 'Lara';
echo $p1->getInfo();


?>