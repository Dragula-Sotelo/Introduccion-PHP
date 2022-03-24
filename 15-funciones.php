<?php 
declare(strict_types=1);
include 'includes/header.php';

function sumar(int $numero_uno = 0, int $numero_dos = 0) {
    echo $numero_uno + $numero_dos;
}

sumar(10, 30);

include 'includes/footer.php';
