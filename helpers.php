<?php 

// Debug
function dd(...$param) {
    echo "<pre>";
    die(var_dump($param));
}

// Errores en if ternario para values en formularios
function old($field) {
    if(isset($_POST[$field])){
        return $_POST[$field];
    }
}

//Redirect
function redirect($url) {
    header('Location: ' . $url);
    exit;
}

// Checkear si esta seteada la session
function check()
{
    return isset($_SESSION['email']);
}

// Mostrar (o no) contenido a usuarios no registrados
function guest()
{
    return !check();
}


?>