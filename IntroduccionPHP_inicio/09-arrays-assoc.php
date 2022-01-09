<?php include 'includes/header.php';

$clientes = [
    'nombre' => 'Ezequiel',
    'saldo' => [
        'tipo' => 'premium',
        'disponible' => '100'
    ]
];

echo "<pre>";
var_dump($clientes);
echo "</pre>";

//echo $clientes['nombre'];
//echo $clientes['saldo'];
// Forma de acceder a la información de un Array dentro de otro Array.
//echo $clientes['saldo']['tipo'];

$clientes['codigo'] = 123456789;
echo "<pre>";
var_dump($clientes);
echo "</pre>";

include 'includes/footer.php';