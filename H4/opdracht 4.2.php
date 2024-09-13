<?php

$books = [
    "book1" => [
        "title" => "Het Achterhuis",
        "author" => "Anne Frank",
        "pages" => 283
    ],
    "book2" => [
        "title" => "De Avonden",
        "author" => "Gerard Reve",
        "pages" => 240
    ],
    "book3" => [
        "title" => "Max Havelaar",
        "author" => "Multatuli",
        "pages" => 325
    ]
];

echo "Titel: " . $books["book2"]["title"] . "\n";
echo "Auteur: " . $books["book2"]["author"] . "\n";

$books["book1"]["pages"] = 350;

$books["book4"] = [
    "title" => "De Ontdekking van de Hemel",
    "author" => "Harry Mulisch",
    "pages" => 900
];

print_r($books);
?>
<?php
