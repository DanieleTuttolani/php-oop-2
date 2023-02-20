<?php
class Products{
    public $name;
    public $price;
    public $quantity;

    public function __construct($name , $price , $quantity){
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
}

class DogProduct extends Products{
    public $type;
    public $product_pic;

    public function __construct($name , $price , $quantity , $product_pic = '#' , $type = 'Cane'){
        $this->type = $type;
        $this->product_pic = $product_pic;
        parent::__construct($name , $price , $quantity);
    }
}

$cuccia_cane = new DogProduct('LA Cuccia', 30 , 10);
$mangime_cane = new DogProduct('Mangime premium', 5 , 120);
$pettorina_cane = new DogProduct('Pettorina personalizata con nome', 55 , 12);

var_dump($cuccia_cane);
?>