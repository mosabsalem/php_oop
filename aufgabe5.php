<?php
abstract class Animal {
     abstract public function makeSound() :string;

     abstract public function eat(string $food) :void;

}

class Hund extends Animal {
     public function makeSound() :string{
        return "Woof!";
    }

     public function eat(string $food) : void {
        echo "The dog is eating ". $food;
    }

}
class Katze extends Animal {
     public function makeSound() :string{
        return "Mewo!";
    }

     public function eat(string $food) : void{
        echo "The cat is eating ". $food;
    }

}
$hund = new Hund();
$katze = new Katze();

echo $hund->makeSound();
echo "<br>";
echo $katze->makeSound();
echo "<br>";
$hund->eat("fleisch");
echo "<br>";
$katze->eat("fish");
?>