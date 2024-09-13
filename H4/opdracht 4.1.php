<?php

$products = [
    ["Laptop", 999.99, 10],
    ["Smartphone", 499.99, 25],
    ["Monitor", 199.99, 15],
    ["Keyboard", 49.99, 30]
];

echo "Naam: " . $products[1][0] . "\n";
echo "Prijs: " . $products[1][1] . "\n";

$products[3][2] = 120;

$products[] = ["Tablet", 299.99, 50];

print_r($products);
?>

