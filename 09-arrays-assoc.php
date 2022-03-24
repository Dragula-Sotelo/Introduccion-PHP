<?php include 'includes/header.php';
//Arreglos Asociativos son el equivalente a los objetos en JavaScript
$cliente = [
    'nombre' => 'Miguel',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo $cliente['nombre'];
echo $cliente['informacion']['tipo'];

echo "<br>";
echo "<br>";

$cliente['codigo'] = 1093674;

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
