<?php include 'includes/header.php';

$nombreCliente = "Lou Curioso";

//Conocer la extención de un String
echo strlen($nombreCliente);
var_dump($nombreCliente);

//Eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//Convertirlo a mayúsculas
echo strtoupper($nombreCliente);

//Convertirlo en minusculas
echo strtolower($nombreCliente);

$mail_uno = 'correo@correo.com';
$mail_dos = 'Correo@correo.com';

var_dump(strtolower($mail_uno) === strtolower($mail_dos));

echo str_replace('Lou', 'L.', $nombreCliente);

//Revisar si un string existe o no
echo strpos($nombreCliente, 'Lou');

$tipoCliente = "Premium";

echo  "<br>";

echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo  "<br>";
echo "El cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';
