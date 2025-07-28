<?php

require_once "data/Product.php";

// Create a Product instance and access data via public getters
$product = new Product("Apple", 20000);
echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

// Create a ProductDummy instance and access protected properties via subclass method
$dummy = new ProductDummy("Sample", 1000);
$dummy->info();
