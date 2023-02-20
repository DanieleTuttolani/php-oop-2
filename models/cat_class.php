<?php
include_once __DIR__ . '/products.php';
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
$lettiera = new Catproduct('Lettiera per gatti : La terra di nessuno', 25 , 5 , 'https://media-assets.wired.it/photos/615c5674be48be4873e7e6e2/master/w_1200,h_710,c_limit/f0f58d56-74c0-46b8-a14a-6f7c26cbf28a.jpg');
$copertura = new Catproduct('Copertura per porte anti graffio ', 42 , 33, 'https://newfastuff.com/wp-content/uploads/2019/11/o6e5j7b2e4041.png');
$laser = new Catproduct('Puntatore laser', 25 , 5 , 'https://external-preview.redd.it/Ge8HTMKhIvj1LdaulvSVYDO-uCOqmm8e7lMCiQVB2ZA.jpg?width=640&crop=smart&auto=webp&s=880ab741411436bc11d3a496d95b44d99e99394f');


//ragruppo tutti i prodotti 
$cat_products_list = [$lettiera , $copertura , $laser];