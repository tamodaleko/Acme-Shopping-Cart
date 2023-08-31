<?php

require_once 'vendor/autoload.php';

$cart = new \Tamodaleko\AcmeCart\Cart(
    new \Tamodaleko\AcmeCart\SampleDelivery,
    new \Tamodaleko\AcmeCart\SampleOffer
);

$product1 = new \Tamodaleko\AcmeCart\Product('Red Widget', 'R01', 32.95);
$product2 = new \Tamodaleko\AcmeCart\Product('Green Widget', 'G01', 24.95);
$product3 = new \Tamodaleko\AcmeCart\Product('Blue Widget', 'B01', 7.95);

$cart->add($product3);
$cart->add($product3);
$cart->add($product1);
$cart->add($product1);
$cart->add($product1);

echo $cart->total();
