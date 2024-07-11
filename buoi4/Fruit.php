<?php
class Fruit{
    public $name;
    public $color;

    public function setName($name){
        $this ->name = $name;
    }
    public function setColor($color){
        $this ->color = $color;
    }
    public function getName(){
        return $this ->name;
    }
    public function getColor(){
        return $this ->color;
    }
    public function eat(){
        echo " Hãy cắt ra ";
    }
}

$quaCam = new Fruit();
$quaCam->setName("cam");
$quaCam->setColor("Màu cam");

echo "đây là quả ". $quaCam->getName(). "có màu " . $quaCam->getColor();
$quaCam->eat();