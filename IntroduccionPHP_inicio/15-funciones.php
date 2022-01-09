<?php 
//Sirve para que marque error si no pasar el valor que la función necesita.
declare(strict_types=1);
include 'includes/header.php';

function sumar(int $numero1, int $numero2){
    echo $numero1 = 0 + $numero2 = 0 . "<br>";
}
sumar(10, 20);

include 'includes/footer.php';