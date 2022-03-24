<?php include 'includes/header.php';

require 'funciones.php';

iniciarApp();
//require: Cuando tengas funciones que son criticas para tú aplicación, básicamente para todas las funciones. En caso de que no pueda cargar ese archivo el require se va a encargar de que la aplicacion no se ejecute. 
//require_once: Este es igual que require, pero primero va a revisar si este archivo ya fue incluido, si ya fue incluido ignora esta linea de código.
//include: Cuando quieras incluir otros templates. Mientras que include, si es algo pequeño, la aplicación va a seguir funcionando. 

include 'includes/footer.php';
