<?php
// interface

// Имеет определения методов.
// Не имеет содержания метода.
// Любой объект гарантированно имеет этот метод.

/**
 * Animal interface
 */
interface Animal
{
    /**
     * Make sound.
     */
    public function makeSound();
}

// Удалите ненужные комментарии для наглядности.
class Dog implements Animal
{
    private string $name;

    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Dog make sound.
     * This inherited by Animal.
     *
     * @return void
     */
    public function makeSound() : void
    {
        echo "dog bark!";
    }
}

// Удалите ненужные комментарии для наглядности.
class Cat implements Animal
{
    private int $age;

    public function getAge() : int
    {
        return $this->age;
    }

    /**
     * Cat make sound.
     * This inherited by Animal.
     *
     * @return void
     */
    public function makeSound() : void
    {
        echo "cat meows";
    }
}

// Удалите ненужные комментарии для наглядности.
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
    // Вы можете вызвать makeSound.
    $animal->makeSound();
    echo "<br>";
    // Может быть передано в do_animal
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
