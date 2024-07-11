<?php
class Product {
    public $name;
    public $price; 
    public $quantity;

    public function setName($name){
        $this ->name = $name;
    }
    public function setPrice($price){
        $this ->price = $price;
    }
    public function setQuantity($quantity){
        $this ->quantity = $quantity;
    }
    
    // public function getetName($name){
    //     $this ->name = $name;
    // }
    // public function getPrice($price){
    //     $this ->price = $price;
    // }
    // public function getQuantity($quantity){
    //     $this ->quantity = $quantity;
    // }
    public function getInfor(){
        echo "Tên: $this->name , Giá: $this->price, Số lượng: $this->quantity";
        $total = $this->price*$this->quantity;
        return $total;
    }
}
$product = new Product();
$product -> setName('Apple');
$product->setPrice(152000);
$product ->setQuantity(15);
$product->getInfor();