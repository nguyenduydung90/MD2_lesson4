<?php


class EmployeeManager
{
    public static $information='data.json';

    public  static function add($information){
        $newData=json_encode($information);
        file_put_contents(self::$information,$newData);
    }
    public static function getInformation(){
        $dataJson=file_get_contents(self::$information);
        return json_decode($dataJson,true);
    }
}