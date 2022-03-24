<?php include 'includes/header.php';

// in_array - Buscar elementos en un arreglo
$carrito = ['Tablet', 'Computadora', 'Tv'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifonos', $carrito));

//Ordenar elementos de un arreglo
$numeros = array(1,10,3,4,6,2,7,9,8,5); //Arreglo indexado
sort($numeros); //De menor a mayor
rsort($numeros); //De mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//Ordenar arreglo asociativo
$cliente =  array(
    'saldo' => 200, 
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

asort($cliente); //Ordena por valores (orden alfabetico)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

arsort($cliente); //Ordena por valores (orden alfabetico, de la Z a la A)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

ksort($cliente); //Ordena por llaves (orden alfabetico)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

krsort($cliente); //Ordena por llaves (orden alfabetico, de la Z a la A)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
