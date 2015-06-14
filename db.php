<?php header("Content-Type: text/html; charset=utf-8");

class DB
{
//    public $id;
//    public $description;
//    public $text;

// Подключение к таблице
    function __construct()
    {
        require_once "config.php";
    }
//Завершение соединения с таблицей
//    function __destruct(){
//        mysql_close("config.php");
//    }
 // Заполнение таблицы
    public function create ($description, $text)
    {
        $query = "INSERT INTO post (description, text) VALUES ('$description', '$text')";
        $result = mysql_query($query);
        var_dump($result);
        if (!$result) die ("Сбой доступа к БД: " . mysql_error());
    }


}

