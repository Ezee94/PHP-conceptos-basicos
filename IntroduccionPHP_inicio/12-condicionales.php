<?php include 'includes/header.php';

$autenticado = true;
$admin = false;

// Condicional simple
if ($autenticado || $admin) {
    echo "Usuario autenticado correctamente.";
} else {
    echo "Usuario no autenticado, inicia sesión.";
}

//If anidado.
$clientes = [
    'nombre' => 'Ezequiel',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'Regular',
    ]
];
echo "<br>";
if (!empty($clientes)) {
    echo "El Array no está vacio";
    echo "<br>";
    if ($clientes['saldo'] > 0) {
        echo "El cliente tiene saldo disponible";
        echo "<br>";
    } else {
        echo "No hay saldo";
        echo "<br>";
    }
} else {
    echo "El Array está vacio";
}

// else if
if ($clientes['saldo'] > 0) {
    echo "El cliente tiene saldo";
    echo "<br>";
} else if ($clientes['informacion']['tipo'] === 'premium') {
    echo "El cliente es premium";
} else {
    echo "El cliente no tiene saldo o no tiene tipo definido";
}

//Switch
echo "<br>";
$tecnologia = 'PHP';
switch ($tecnologia) {
    case 'PHP':
        echo "PHP un excelente lenguaje";
        break;
    case 'Javascript':
        echo "Genial, lenguaje de WEB";
        break;
    case 'HTML':
        echo "Genial, lenguaje para decorar webs";
        break;
    default:
        echo "Lenguaje desconocido";
        break;
}

include 'includes/footer.php';
