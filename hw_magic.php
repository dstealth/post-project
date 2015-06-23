<?php
header("Content-Type: text/html; charset=utf-8");

class MagicMethods
{
    protected $foo1 = 10;
    protected $foo2;

    public $foo3 = array(1, 5, "Hello");


    protected function bar()
    {
        $bar = $this->foo1 * $this->foo1;
        echo $bar;
    }

    protected static function stat_bar()
    {
        echo self::$foo1;
    }


//=============================================================================================================//
    public function __construct()
    {
        echo "Запущен конструкор класса " . __CLASS__ . "<br/>";
    }

    public function __destruct()
    {
        echo "Запущен деструктор, робота с классом " . __CLASS__ . " окончена";
    }

    public function __call($name, $argum)
    {
        echo "Вызван метод $name<br/>";
    }

    public function __callStatic($name, $argum)
    {
        echo "Вызван статический метод $name<br/>";
    }

    public function __get($name){
        echo "Чтение переменной $name = ".$this->$name."<br>";
        $this->$name;
    }

    public function __set($name, $value){
        echo "Запись в переменную $name значения $value<br/>";
        $this->$name = $value;
    }

    public function __isset($name){
        echo "Был выполнен isset() или empty() на недоступном свойстве $name класса ".__CLASS__." <br/>";
    }

    public function __unset($name){
        echo "Был выполнен unset() на недоступном свойстве $name класса ".__CLASS__." <br/>";
    }

    public function __sleep(){
        echo "Запущена функция серилизации<br/>";
    }

    public function __wakeup(){//..................... Н Е   Р А Б О Т А Е Т .......................
        echo "Запущена функция unserialize()<br/>";
    }

    public function __toString(){
        return "Магический метод __toString()<br/>";
    }

    public function __invoke(){
        echo "Объект вызывается как функция<br/>";
    }

    public static function __set_state($arr){ //..................... Н Е   Р А Б О Т А Е Т ...............
        echo "Вот оно<br/>";
    }

    public function __clone(){
        echo "Клонирование<br/>";
    }

    public function __debugInfo(){
        
    }
}

$obj1 = new MagicMethods();

$obj1->bar();
$obj1->var();
$obj1::stat_bar();
echo $obj1->foo1;
$obj1->foo2 = 5;
isset($obj1->foo2);
unset($obj1->foo1);
serialize($obj1);
unserialize($obj1);
echo $obj1;
$obj1(10);
var_export($obj1->foo3);
$obj2 = clone $obj1;
var_dump($obj1);




