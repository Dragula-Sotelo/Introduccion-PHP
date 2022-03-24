<?php include 'includes/header.php';

$autenticado = true;
$admin= false;

if($autenticado && $admin){
    echo "Usuario autenticado correctamente";
} else {
    echo "Usuario no autenticado, Inicia sesión";
}

echo "<br>";
//If anidados
$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'Premium'
    ]
];

if(!empty($cliente)){
    echo "El arreglo del cliente no esta vacio";

    if($cliente['saldo'] > 0) {
        echo "<br>";
        echo "El cliente tiene saldo disponible";
    } else {
        echo "<br>";
        echo "No hay saldo";
    }
}

echo "<br>";
//else if
if($cliente['saldo'] > 0){
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'Premium') {
    echo "<br>";
    echo "El cliente es Primium";
} else {
    echo "<br>";
    echo "No hay cliente definido";
}

//Switch
echo "<br>";
$tecnologia = 'HTML';

switch ($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje!";
        break;
    case 'JavaScript';
        echo "Genial, el lenguaje de la web";
        break;
    case 'HTML':
        echo "Emmm...";
        break;
    default:
        echo "Algún otro lenguaje que no se cual es";
        break;
}

include 'includes/footer.php';
