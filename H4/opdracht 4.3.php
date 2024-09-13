<?php
$pets = [
    [
        "species" => "Hond",
        "name" => "Buddy",
        "age" => 5
    ],
    [
        "species" => "Papegaai",
        "name" => "Coco",
        "age" => 2
    ],
    [
        "species" => "Konijn",
        "name" => "Fluffy",
        "age" => 3
    ]
];

echo "Naam: " . $pets[2]["name"] . "\n";
echo "Soort: " . $pets[2]["species"] . "\n";

$pets[1]["age"] += 1;

$pets[] = [
    "species" => "Kat",
    "name" => "Simba",
    "age" => 2
];

print_r($pets);
?>
<?php
