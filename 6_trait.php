<?php
// trait

// Общий набор методов

// Удалите ненужные комментарии для наглядности.

trait Logger
{
    public function log(string $msg) : void
    {
        echo $msg;
        echo "<br>";
    }
}

class Dog
{
    use Logger;

    public function bark() : void
    {
        $this->log("bark in Dog");

        echo "dog bark!";
    }
}

class Cat
{
    use Logger;

    public function meow() : void
    {
        $this->log("meow in Cat");

        echo "cat meow";
    }
}

$dog = new Dog();
$cat = new Cat();

$dog->log("before bark");
$dog->bark();
echo "<br>";
$cat->log("before meow");
$cat->meow();
echo "<br>";

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
