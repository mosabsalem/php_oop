<?php
// Aufgabe 2: Kapselung

class Person {

    public $name;
    public $age;
    

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }

    public function setName($name) {
        $this-> name = $name;
    }
    public function setAge($age) {
        $this-> age = $age;
    }
}

$person = new Person();
$person->setName("Ahmad");
$person->setAge(33);

echo $person->name;
echo $person->age;
?>