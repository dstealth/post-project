<?php header("Content-Type: text/html; charset=utf-8");

class DB
{
    public $id = "null";
    public $description;
    public $text;

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
    public
    function createNew ($id, $description, $text)
    {
        $query = "(INSERT INTO post (id, description, text) VALUES ($this->id, $this->description, $this->text))";
        $result = mysql_query($query);
        if (!$result) die ("Сбой доступа к БД: " . mysql_error());
    }

}

$first_row = new DB;
$first_row->createNew("","Про астрономов", "Астрономы установили факт вращения Галактик.");
//if (!$q) die ("ЧТО-ТО НЕ ТАК");
//else echo "Запись внесена в БД";
//echo "Все получилось!!!";