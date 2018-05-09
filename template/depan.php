<?php 
spl_autoload_register(function($class) {
    include str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
});

use src\View;
$v=new View();
$v->render();

echo("<br>")

use app\View;
$v=new View();
$v->render();



 ?>