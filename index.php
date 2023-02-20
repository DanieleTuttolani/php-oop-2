<?php
include_once __DIR__ . '/partials/dog_class.php';
include_once __DIR__ . '/partials/cat_class.php';
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