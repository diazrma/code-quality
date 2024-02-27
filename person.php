<?php

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function displayInfo() {
        echo "Name: $this->name, Age: $this->age years";
    }
}

$person = new Person("John", 25);
$person->displayInfo();

?>
