<?php include 'includes/header.php';

//While
$i = 0; //Inicializador

while($i < 10) {
    echo $i . "<br>";

    $i++; //Incremento
}

echo "<br>";
//Do While
$i = 0;

do {
    echo $i . "<br>";

    $i++;
} while($i < 10);

echo "<br>";
//For loop
for($i = 0; $i < 10; $i++){
    echo $i . "<br>";
}

echo "<br>";
/**
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 Imprimir FIZZ BUZZ
 */
for($i = 1; $i < 100; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo $i . "- FIZZ BUZZ <br>";
    } else if($i % 3 === 0) {
        echo $i . "- Fizz <br>";
    } else if($i % 5 === 0) {
        echo $i . "- Buzz <br>";
    } else {
        echo $i . "<br>";
    }
}

echo "<br>";
//For Each
$clientes = array('Lou', 'Goyito', 'Molly', 'Duquesa');

foreach($clientes as $cliente){
    echo $cliente . '<br>';
}

echo "<br>";
echo count($clientes);

echo "<br>";
echo sizeof($clientes);

echo "<br>";
echo "<br>";
for($i = 0; $i < count($clientes); $i++){
    echo $clientes[$i] . "<br>";
}

echo "<br>";
// Arreglos asociativos
$cliente = [
    'nombre' => 'Tutty',
    'saldo' => 200,
    'tipo' => 'Premium'
];

foreach($cliente as $valor){
    echo $valor . "<br>";
}

echo "<br>";
foreach($cliente as $key => $valor){
    echo $key . " - " . $valor . "<br>";
}

include 'includes/footer.php';
