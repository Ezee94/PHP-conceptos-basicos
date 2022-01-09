<?php include 'includes/header.php';


// in_array - Buscar elementos en un Array.
$carrito = ['Tablet', 'Televisión', 'Ordenador'];
var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Cascos', $carrito));

//Ordenar elementos de un Array.
$numeros = array(1,8,5,4,2,6);
sort($numeros); //Ordenar de menor a mayor.
rsort($numeros); //Ordenar de mayor a menor.
echo "<pre>";
var_dump($numeros);
echo "</pre>";

//Ordenar Array asociativo.

$clientes = array(
    'saldo' => 200,
    'tipo' => 'premium',
    'nombre' => 'Ezequiel'
);

echo "<pre>";
var_dump($clientes);
echo "</pre>";

asort($clientes); //Ordena por valores (orden alfabético).
arsort($clientes); //Ordena por valores (Z primero).
ksort($clientes); //Ordena por llaves (orden alfabético).
krsort($clientes); //Ordena por llaves (orden alfabético de la Z a la A).

echo "<pre>";
var_dump($clientes);
echo "</pre>";



include 'includes/footer.php';