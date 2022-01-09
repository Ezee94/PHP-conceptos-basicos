<?php include 'includes/header.php';

$nombreCliente = "Ezequiel Antonio";

//Conocer extensión de un String.
echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacios en blanco.
$texto = trim($nombreCliente);
echo strlen($texto);

//Convertirlo a mayusculas o minusculas.
echo strtoupper($nombreCliente);
echo strtolower($nombreCliente);

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

var_dump(strtolower($mail1)=== strtolower($mail2));
echo str_replace('Ezequiel', 'E', $nombreCliente);

//Revisar si un String existe o no.
echo strpos($nombreCliente, 'Ezequiel');

$tipoCliente = "Premium";
echo "El cliente " . $nombreCliente . " es " . $tipoCliente;





include 'includes/footer.php';