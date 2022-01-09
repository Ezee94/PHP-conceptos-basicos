<?php include 'includes/header.php';

//While
$i = 0; //Inicializador

while ($i < 10) {
    echo $i . "<br>";

    $i++; //Incremento
}

//Do while lo que lo diferencia del while es que primero ejecuta el código y luego revisa la condición.
$i = 0;

do {
    echo $i . "<br>";

    $i++;
} while ($i < 10);

//For loop
echo "<br>";
for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

/* Prueba usando el for
Multiplos de 3 imprimir Fizz
Multiplos de 5 imprimir Buzz
Multiplos de 3 y 5 imprimir Fizz Buzz.
*/
echo "<br>";
for ($i = 0; $i < 50; $i++) {
    if ($i %  3 === 0 && $i % 5 === 0) {
        echo $i . " - Fizz Buzz <br>";
    } else if ($i %  3 === 0) {
        echo $i . " - Fizz <br>";
    } else if ($i %  5 === 0) {
        echo $i . " - Buzz <br>";
    }
}

//For each
echo "<br>";
$clientes = array('Ezequiel', 'Alejandra', 'Juan');
foreach ($clientes as $cliente) {
    echo $cliente . "<br>";
}
//Forma compleja de pasar por el Array con un for es más sencillo usar el foreach menos código.
for ($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i] . "<br>";
}

$cliente = [
 'nombre' => 'Ezequiel',
 'saldo' => 200,
 'tipo' => 'Premium'
];

foreach ($cliente as $key => $valor) {
    echo $key . " - " . $valor . '<br>';
}


include 'includes/footer.php';
