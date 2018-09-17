<?php 

require 'helpers.php';


function validate($data) {

    $errors = [];

    $nombre = trim($data['nombre']);

        if($nombre == "") {
        $errors['nombre'] = "El campo está vacio";
    }



    $cel = ($data['cel']);

        if($cel == "") {
            $errors['cel'] = "El campo está vacio";
       } 



    $email = trim($data['email']);

    if($email == "") {
        $errors['email'] = "El campo está vacio";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "El email es inválido";
    }




    return  $errors;
}











?>