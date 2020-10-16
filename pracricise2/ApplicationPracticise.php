<?php


class ApplicationPracticise
{
private static $instance;
private function __construct(){

}
public static function getInstance(){
    if(self::$instance===null){
        self::$instance=new ApplicationPracticise();
        echo "dont'n know";
    }
    return self::$instance;
}
}

$app1=ApplicationPracticise::getInstance();
$app2=ApplicationPracticise::getInstance();
echo $app1;

