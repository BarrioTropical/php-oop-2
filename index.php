<?php
include __DIR__ . '/Models/Category.php';
include __DIR__ . '/Models/Food.php';
include __DIR__ . '/Models/Game.php';
include __DIR__ . '/Models/Product.php';

 // var_dump($product1);

 $product1 = new Food('Crocchette Kibble', 35, 18, 'Cane', 'Pet Supplies', './img/food-transparent-16.png','Dry Food', 'Taste Dry', '90g');
 $product2 = new Food('Crocchette Moist', 33, 17, 'Cane', 'Pet Supplies', './img/food-transparent-17.png','Moist Food', 'Taste Moist', '90g');
 $product3 = new Food('Crocchette Frozen', 30, 15, 'Cane', 'Pet Supplies', './img/food-transparent-18.png','Frozen Food', 'Taste Good', '90g');

$product4 = new Game('Palline', 10, '', 'Gatto', 'Pet Supplies', './img/product-2.jpg', 'green, yellow and blue');
$product5 = new Game('Osso', 20, 18, 'Cane', 'Pet Supplies', './img/product-3.jpg', 'brown');
$product6 = new Game('Cuccia marrone', 40, '', 'Cane', 'Pet Supplies', './img/product-4.jpg', 'brown');
$product7 = new Game('Trasportino da viaggio', 40, '', 'Cane', 'Pet Supplies', './img/product-5.jpg', 'grey and yellow');
$product8 = new Game('Cuccia basic', 30, '', 'Cane', 'Pet Supplies', './img/product-8.jpg', 'grey and green');
$product9 = new Game('Cuccia basic blue', 30, 20, 'Cane', 'Pet Supplies', './img/product-9.jpg', 'grey and blue');


include __DIR__ . '/partials/header.php';
include __DIR__ . '/partials/main.php';
include __DIR__ . '/partials/footer.php';

?>