<?php
// Aufgabe 4: Polymorphie
class Shape {

  public function getArea() {
  }

}


class Rectangle extends Shape {
  private $width;
  private $height;

  public function __construct($width, $height) {
    $this->width = $width;
    $this->height = $height;
  }

  public function getArea() {
    return $this->width * $this->height;
  }
}


class Circle extends Shape {
  private $radius;

  public function __construct($radius) {
    $this->radius = $radius;
  }

  public function getArea() {
    return pi() * ($this->radius ** 2);
  }
}


$rectangle = new Rectangle(10, 5);
echo "Die Fläche des Rechtecks beträgt: " . $rectangle->getArea() . "<br>";


$circle = new Circle(4);
echo "Die Fläche des Kreises beträgt: " . $circle->getArea() . "<br>";
?>