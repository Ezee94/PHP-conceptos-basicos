<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Ezequiel', 'Alejandra', 'Juan');
$cliente = [
    'nombre' => 'Ezequiel',
    'edad' => '27'
];

//Empty - Revisa si el array está vacío.
var_dump(empty($clientes));
var_dump(empty($clientes2));
var_dump(empty($clientes3));

//Iseet - Revisa si un Array está creado o una propiedad está definida.
echo "<br>";
var_dump(isset($clientes4));
var_dump(isset($clientes));
var_dump(isset($clientes2));
var_dump(isset($clientes3));

//Iseet - Revisa si un Array asociativo su propiedad existe
var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['codigo']));

include 'includes/footer.php';