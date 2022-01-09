<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => 200,
        'disponible' => true
    ],
    [
        'nombre' => 'Television 24"',
        'precio' => 300,
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor curvo',
        'precio' => 400,
        'disponible' => false
    ]
];

echo "<pre>";
var_dump($productos);

//Convertir un Array en un String.
$json = json_encode($productos, JSON_UNESCAPED_UNICODE);
//Convertir un String a un Array.
$jsonArray = json_decode($json);
var_dump($json);
var_dump($jsonArray);
echo "</pre>";



include 'includes/footer.php';
