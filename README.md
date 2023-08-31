<h2 align="center">Acme Shopping Cart</h2>

## Requirements

The app requires the following extensions in order to work properly:

-   `PHP >= 8.1`


## Installation

Download Composer [here](https://getcomposer.org/download).

Install project:

```bash
php composer install
```

## Usage

Initialize cart:

```php
$cart = new \Tamodaleko\AcmeCart\Cart(
    new \Tamodaleko\AcmeCart\SampleDelivery,
    new \Tamodaleko\AcmeCart\SampleOffer
);
```

Create products:

```php
$product1 = new \Tamodaleko\AcmeCart\Product('Red Widget', 'R01', 32.95);
$product2 = new \Tamodaleko\AcmeCart\Product('Green Widget', 'G01', 24.95);
$product3 = new \Tamodaleko\AcmeCart\Product('Blue Widget', 'B01', 7.95);
```

Add products to cart:

```php
$cart->add($product3);
$cart->add($product3);
$cart->add($product1);
$cart->add($product1);
$cart->add($product1);
```

Show total:

```php
echo $cart->total();
```

Please check example.php for a working example.
