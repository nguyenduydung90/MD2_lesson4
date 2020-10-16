<?php
include_once 'Models/Product.php';
include_once 'Services/ProductManager.php';


use Services\ProductManager;
use Models\Product;

$productManager=new ProductManager();
$productManager->add(new Product("laptop"));
$productManager->add(new Product("mobile"));

$products=$productManager->getProduct();
foreach ($products as $value){
    echo $value->getName()."<br>";
}
