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
//classe per prodotti per cani
class DogProduct extends Products{
    public $type;
    public $product_pic;

    public function __construct($name , $price , $quantity , $product_pic = '#' , $type = 'Cane'){
        $this->type = $type;
        $this->product_pic = $product_pic;
        parent::__construct($name , $price , $quantity);
    }
}
//istanze per prodotti per cani
$cuccia_cane = new DogProduct('LA Cuccia', 30 , 10);
$mangime_cane = new DogProduct('Mangime premium', 5 , 120);
$pettorina_cane = new DogProduct('Pettorina personalizata con nome', 55 , 12);

//ragruppo i prodotti in maniera manuale
$dog_products_list = [$cuccia_cane , $mangime_cane , $pettorina_cane];

//classe per prodotti per gatti
class CatProduct extends Products{
    public $type;
    public $product_pic;

    public function __construct($name , $price , $quantity , $product_pic = '#' , $type = 'Gatto'){
        $this->type = $type;
        $this->product_pic = $product_pic;
        parent::__construct($name , $price , $quantity);
    }
}

//istanze prodotti per gatti
$lettiera = new Catproduct('La terra di nessuno', 25 , 5);
$copertura = new Catproduct('Copertura per porte anti graffio ', 42 , 33);
$laser = new Catproduct('Puntatore laser', 25 , 5);


//ragruppo tutti i prodotti 
$cat_products_list = [$lettiera , $copertura , $laser];
var_dump($dog_products_list , $cat_products_list);
?>