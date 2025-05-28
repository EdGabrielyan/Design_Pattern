<?php

require 'Product.php';
require 'Box.php';

// Single products
$phone = new Product("Phone", 600);
$charger = new Product("Charger", 50);

// A box that contains 2 items
$box1 = new Box();
$box1->add($phone);
$box1->add($charger);

// Another product
$headphones = new Product("Headphones", 100);

// A bigger box that contains box1 and headphones
$mainBox = new Box();
$mainBox->add($box1);
$mainBox->add($headphones);

// Total price
echo "Total Price: $" . $mainBox->getPrice() . "\n"; // Output: 750
