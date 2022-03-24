<?php include 'includes/header.php';

$clientes = [];
$clientes_dos = array();
$clientes_tres = array('Lou', 'Duquesa', 'Goyito', 'Molly');
$cliente = [
    'nombre' => 'Lou',
    'saldo' => 200
];

//Empty - Revisa si un arreglo esta vacio
var_dump( empty($clientes));
var_dump( empty($clientes_tres));
var_dump( empty($clientes_dos));

//Isset - Revisar si un arreglo esta creado o una propiedad esta definida
echo "<br>";
var_dump(isset($clientes_cuatro));
var_dump(isset($clientes));
var_dump(isset($clientes_tres));
var_dump(isset($clientes_dos));

//Isset - Revisa si una propiedad de un arreglo asociativo, existe!
echo "<br>";
var_dump(isset($cliente['nombre']));
var_dump(isset($cliente['codigo']));

include 'includes/footer.php';
