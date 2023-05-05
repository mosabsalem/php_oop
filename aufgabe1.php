<?php
// Aufgabe 1: Klassen und Objekte

class Bicycle {

    // Eigenschaften:
    public $manufacturer;
    public $model;
    public $year;

    function __construct($manufacturer,$model,$year) {
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->year = $year;
    }

}

$bicycle = new Bicycle('Kalkhoff', 'Image 3.B Move Wabe' , 2022);

echo "Manufacturer: " . $bicycle->manufacturer ."<br>" .
     "Model: " . $bicycle->model ."<br>".
     "Year: " . $bicycle->year ."<br>";


?>