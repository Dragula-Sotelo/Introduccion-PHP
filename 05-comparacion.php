<?php include 'includes/header.php';

$numero_uno = 20;
$numero_dos =  30;
$numero_tres = 30;
$numero_cuatro = "30";

var_dump($numero_uno > $numero_dos);
echo "<br>";

var_dump($numero_uno < $numero_dos);
echo "<br>";

var_dump($numero_uno >= $numero_dos);
echo "<br>";

var_dump($numero_uno <= $numero_dos);
echo "<br>";

var_dump($numero_dos == $numero_tres);
echo "<br>";

var_dump($numero_dos == $numero_cuatro);
echo "<br>";

var_dump($numero_dos === $numero_cuatro);
echo "<br>";

//-1 Si Izquierda es menor
var_dump($numero_uno <=> $numero_dos);
echo "<br>";

//0 Si es igual
var_dump($numero_dos <=> $numero_tres);
echo "<br>";

//1 Si izquierda es mayor
var_dump($numero_dos <=> $numero_uno);
echo "<br>";

include 'includes/footer.php';
