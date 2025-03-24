<?php
// static

// В static определены следующие параметры.
// Переменные класса не используются.
// Каждый объект имеет одно и то же значение и один и тот же процесс

/**
 * User Class
 */
class User
{
    /**
     * Room name used by this user
     *
     * @var string
     */
    public static string $roomname = "room 13";

    /**
     * User name
     *
     * @var string
     */
    private string $name;

    /**
     * Count users
     *
     * @param array $userList List of users
     * @return int Number of users
     */
    public static function countUser(array $userList) : int
    {
        return count($userList);
    }

    /**
     * Set user name
     *
     * @param string $name user name
     * @return void
     */
    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    /**
     * Get user name
     *
     * @return string user name
     */
    public function getName() : string
    {
        return $this->name;
    }
}

// Инстанцировать класс.
// static можно использовать с классами.
// Объект не требуется.
$room = User::$roomname;
$userCount = User::countUser($userArray);

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
