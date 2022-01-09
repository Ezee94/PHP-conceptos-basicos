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

foreach ($productos as $producto) { ?>
    <li>
        <p>Producto: <?php echo $producto['nombre'] ?> </p>
        <p>Precio: <?php echo $producto['precio'] . '$' ?> </p>
        //Hay dos opciones bien como la línea de código de abajo o el condicional que hay más abajo.
        <p>Precio: <?php echo $producto['disponible'] ? 'Disponible' : 'No disponible'; ?> </p>
        <?php
        // Segunda opción a mi me gusta más esta opción ya que parece más limpia.
        if ($producto['disponible']) {
            echo "<p>Disponible</p>";
        } else {
            echo "<p>No disponible</p>";
        }
        ?>
    </li>

<?php

    /*     echo "<pre>";
    var_dump($producto);
    echo "</pre>";
     */
}

include 'includes/footer.php';
