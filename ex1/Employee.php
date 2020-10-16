<?php


class Employee
{
private $surname;
private $name;
private $birthday;
private $address;
private $position;

public function __contruct($_surename,$_name,$_birthday,$_address,$_position){
    $this->surname=$_surename;
    $this->name=$_name;
    $this->birthday=$_birthday;
    $this->address=$_address;
    $this->position=$_position;
}
public function setName($name){
    $this->name=$name;
}
public function setSurename($surename){
    $this->surname=$surename;
}
public function setBirthday($birthday){
    $this->birthday=$birthday;
}
public function setAddress($address){
    $this->address=$address;
}
public function setPosition($position){
    $this->position=$position;
}

        public function getSurname()
    {
        return $this->surname;
    }

    public function getName()
    {
        return $this->name;
    }


    public function getBirthday()
    {
        return $this->birthday;
    }


    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

}
