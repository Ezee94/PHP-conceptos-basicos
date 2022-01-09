<?php include 'includes/header.php';

// Útil para ver los contenidos de un array.
$carrito = ['Tablet', 'Televisión', 'Ordenador'];
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento de un Array.
echo $carrito[1];

// Añade un elemento en el indice que quieras del Array.
$carrito[3] = 'Producto añadido';

// Añade un elemento al final del Array.
array_push($carrito, 'Auriculares');

// Añade un elemento al inicio del Array.
array_unshift($carrito, 'Reloj inteligente');

// Útil para ver los contenidos de un array.
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Otra manera de declarar el Array.
$clientes = array('Clientes1', 'Clientes2', 'Clientes3');
echo "<pre>";
var_dump($clientes);
echo "</pre>";

include 'includes/footer.php';