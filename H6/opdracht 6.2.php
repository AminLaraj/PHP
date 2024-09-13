<?php
$prices = array(100, 200, 300, 400, 500);
$i = 0;

while ($prices [$i] < 500) {
    $newPrice = $prices[$i] + 50;
    echo "Oorspronkelijke prijs: " . $prices[$i] . ", Nieuwe prijs: " . $newPrice . "<br>";
    $prices[$i] = $newPrice;
    $i++;
}