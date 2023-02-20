<?php 
include_once __DIR__ . '/products.php';
// classe per prodotti per cani
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
$cuccia_cane = new DogProduct('LA Cuccia', 30 , 10, 'https://m.media-amazon.com/images/I/81BGCfKSPHL._AC_SX425_.jpg');
$mangime_cane = new DogProduct('Mangime premium', 5  , 120, 'https://www.foodpet.it/wp-content/uploads/2022/02/iberian_pork_2160x.jpg');
$pettorina_cane = new DogProduct('Pettorina personalizata con nome', 55 , 12, 'https://m.media-amazon.com/images/I/71dqNoHmIdL._AC_SY355_.jpg');

//ragruppo i prodotti in maniera manuale
$dog_products_list = [$cuccia_cane , $mangime_cane , $pettorina_cane];
