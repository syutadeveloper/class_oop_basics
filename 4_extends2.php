<?php
// extends 2

// Может передаваться переменной как тип ее родителя.

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

///////////////// добавить
/**
 * Zoo park class
 */
class ZooPark
{
    /**
     * execute animal action
     *
     * @param $animal animal who action
     * @return void
     */
    public static function do_animal(Animal $animal) : void
    {
        echo "this is do_animal:";
        $animal->makeSound();
    }
}

$animalList = [];
$animalList[] = new Dog();
$animalList[] = new Cat();

foreach ($animalList as $animal)
{
    $animal->incrementAge();
    echo $animal->getAge();
    echo "<br>";
    $animal->makeSound();
    echo "<br>";
    ///////////////// добавить
    ZooPark::do_animal($animal);
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
