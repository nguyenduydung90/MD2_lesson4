<?php
 namespace Services;

class ProductManager
{
private $products;
public function __contruct(){
    $this->products=[];
}
public function add($product){
    $this->products[]=$product;
}
public function getProduct(){
    return $this->products;
}
}