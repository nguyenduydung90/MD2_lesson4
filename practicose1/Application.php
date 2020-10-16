<?php


class Application
{
private $name;
public static $count=0;
public function __construct($name)
{
    $this->name=$name;
    self::$count++;
}
public function toString(){
    return "Application name: ".$this->name;
}
}
echo "Total objects count: ".Application::$count."<br>";
$app1=new Application('App one');
echo "Total objects count: ".Application::$count."<br>";
$app2=new Application('App two');
echo "Total objects count: ".Application::$count."<br>";
echo $app1->toString().'<br>';
echo $app2->toString().'<br>';
?>
