<?php
header("Content-Type: text/html; charset=utf-8");

class A
{
    protected $a = 5;

    public function __get($name)
    {
        if($name == "a") echo "Иди на хуй!";
        elseif ($name == "b") echo "Иди в жопу";
        else echo $name;
    }

    public function __set($name, $value){
        if($name == "a") echo "$name = $value, но иди в жопу<br/>";
        elseif ($name == "b") echo "$name = $value, но иди на хуй<br/>";
        else echo $this->$name = $value;
    }
}
$obj1 = new A();
$obj1->a=4;
$obj1->b=4;
$obj1->c=4;
var_dump($obj1->c);



class A1 extends A
{
    protected function get_a()
    {
        echo $this->a;
    }

    public function __call($name, $arr)
    {
        if ($name == "get_a") {
            $this->get_a($arr);
        }
    }

}

$a1 = new A1;
//$a1->get_a();