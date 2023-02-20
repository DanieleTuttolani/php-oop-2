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
$cuccia_cane = new DogProduct('LA Cuccia', 30 , 10, 'https://m.media-amazon.com/images/I/81BGCfKSPHL._AC_SX425_.jpg');
$mangime_cane = new DogProduct('Mangime premium', 5  , 120, 'https://www.foodpet.it/wp-content/uploads/2022/02/iberian_pork_2160x.jpg');
$pettorina_cane = new DogProduct('Pettorina personalizata con nome', 55 , 12, 'https://m.media-amazon.com/images/I/71dqNoHmIdL._AC_SY355_.jpg');

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
$lettiera = new Catproduct('Lettiera per gatti : La terra di nessuno', 25 , 5 , 'https://media-assets.wired.it/photos/615c5674be48be4873e7e6e2/master/w_1200,h_710,c_limit/f0f58d56-74c0-46b8-a14a-6f7c26cbf28a.jpg');
$copertura = new Catproduct('Copertura per porte anti graffio ', 42 , 33, 'https://newfastuff.com/wp-content/uploads/2019/11/o6e5j7b2e4041.png');
$laser = new Catproduct('Puntatore laser', 25 , 5 , 'https://external-preview.redd.it/Ge8HTMKhIvj1LdaulvSVYDO-uCOqmm8e7lMCiQVB2ZA.jpg?width=640&crop=smart&auto=webp&s=880ab741411436bc11d3a496d95b44d99e99394f');


//ragruppo tutti i prodotti 
$cat_products_list = [$lettiera , $copertura , $laser];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animali fantastici</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
</head>
<body>
    <div class="text-center bg-success mb-5 p-4">
        <h1>Sezione Cani</h1>
    </div>
   <div class="container my-5">
        <div class="row">
            <?php foreach($dog_products_list as $prod) : ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $prod->product_pic ?>" class="card-img-top img-fluid" alt="<?= $prod->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $prod->name ?></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><p>Disponibilità : <?= $prod->quantity ?> unità</p></li>
                            <li class="list-group-item"><p class="m-0">Prezzo : <?= $prod->price ?>€ </p></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
   </div> 
    <!-- sezione gatti -->
   <section>
   <div class="text-center bg-primary mb-5 p-4">
        <h1>Sezione Gatti</h1>
    </div>
   <div class="container my-5">
        <div class="row">
            <?php foreach($cat_products_list as $prod) : ?>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $prod->product_pic ?>" class="card-img-top img-fluid" alt="<?= $prod->name ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $prod->name ?></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><p>Disponibilità : <?= $prod->quantity ?> unità</p></li>
                            <li class="list-group-item"><p class="m-0">Prezzo : <?= $prod->price ?>€ </p></li>
                        </ul>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
   </div> 
   </section>
</body>
</html>