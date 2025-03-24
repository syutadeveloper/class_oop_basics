<?php
// extends

// extends имеют следующие особенности.
// Наследует переменные и методы класса.
// Модификация методов.

// Так как конструкция становится сложной, лучше использовать только когда нужно.

/**
 * Base class for all animals.
 */
class Animal
{
    /**
     * The age of the animal. Starts at 0.
     *
     * @var int
     */
    private int $age = 0;

    /**
     * Set animal age
     *
     * @param int animal age
     * @return void
     */
    protected function setAge(int $age) : void
    {
        $this->age = $age;
    }

    /**
     * Get animal age
     *
     * @return int animal age
     */
    public function getAge() : int
    {
        return $this->age;
    }

    /**
     * Increment the animal's age by one.
     *
     * @return void
     */ 
    public function incrementAge() : void
    {
        $this->age++;
    }

    /**
     * Output the sound the animal makes.
     * This method should be overridden in subclasses.
     *
     * @return void
     */
    public function makeSound() : void
    {
        echo "Animal makes a sound.\n";
    }
}

/**
 * Dog class, which extends Animal.
 */
class Dog extends Animal
{
    /**
     * Outputs the dog's barking sound.
     * Overrides the makeSound() method from Animal class. 
     *
     * @return void
     */
    public function makeSound() : void {
        echo "Dog barks!\n";
    }
}

/**
 * Cat class, which extends Animal.
 */
class Cat extends Animal
{
    /**
     * Outputs the cat's meowing sound.
     * Overrides the makeSound() method from Animal class.
     *
     * @return void
     */
    public function makeSound() : void {
        echo "Cat  meows\n";
    }
}

$animalList = [];
$animalList[] = new Dog();
$animalList[] = new Cat();

foreach ($animalList as $animal)
{
// Оба могут вызывать incrementAge.
// Оба могут вызывать makeSound.
// MakeSound имеет другой вывод
    $animal->incrementAge();
    echo $animal->getAge();
    echo "<br>";
    $animal->makeSound();
    echo "<br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
