<?php
class Fruit{
    public $name;
    public $color;
    public function __construct($name = "cam", $color = "xanh")
    {
        $this->name= $name;
        $this->color= $color;
    }

}
$fruit1 = new Fruit();
echo $fruit1 ->color;