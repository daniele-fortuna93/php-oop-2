<?php 
class Prodotto{
    // attributi
    public $nome;
    public $prezzo;

    // construct
    public function __construct(string $_nome, int $_prezzo)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
    }
}

class Food extends Prodotto{
    // attributi
    public $tipo;
    public $scadenza;

    // construct
    public function __construct(string $_nome, int $_prezzo, string $_tipo, int $_scadenza)
    {
        parent::__construct($_nome, $_prezzo);
        $this->tipo = $_tipo;
        $this->scadenza = $_scadenza;
    }
    
}

class Tech extends Prodotto{
    // attributi
    public $tipo;
    public $marca;

    // construct
    public function __construct(string $_nome, int $_prezzo, string $_tipo, string $_marca)
    {
        parent::__construct($_nome, $_prezzo);
        $this->tipo = $_tipo;
        $this->marca = $_marca;
    }
}

$food_1 = new Food('Zucchine', 2, 'Verdura', 3);
$food_2 = new Food('Ananas', 4, 'Frutta', 4);
$food_3 = new Food('Ciliegie', 12, 'Frutta', 5);
$food_4 = new Food('Fiorentina', 30, 'Carne', 4);
$tech_1 = new Tech('Tv55KDL463', 400, 'Televisione', 'Sony');
$tech_2 = new Tech('MacBookPro13', 1400, 'Pc', 'Apple');
$tech_3 = new Tech('Ps4', 300, 'Console', 'Sony');
$tech_4 = new Tech('Iphone 12', 1200, 'Smartphone', 'Apple');

$products = [
    "Food" => [
        $food_1,
        $food_2,
        $food_3,
        $food_4
    ],
    "Tech" => [
        $tech_1,
        $tech_2,
        $tech_3,
        $tech_4
    ]
]
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prodotti</title>
    </head>
    <body>
        <h1>Prodotti</h1>
        <?php foreach($products as $key=>$typeProducts){?>
            <h2><?php echo $key;?></h2>
            <ol>
            <?php foreach($typeProducts as $key=>$product){?>
                <li>
                    <?php echo $product->nome;?>:
                    <ul>
                        <li><?php echo 'Categoria: ' . $product->tipo;?></li>
                        <li><?php echo 'Prezzo: ' . $product->prezzo;?>€</li>
                        <li><?php echo isset($product->scadenza) ?  $product->scadenza . ' days.' :  $product->marca ?></li>
                    </ul>
                </li>
            <?php } ?>
            </ol>
        <?php } ?>
    </body>
</html>