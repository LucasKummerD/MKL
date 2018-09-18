<?php 

require 'helpers.php';

//------------------------------------------Validaciones Formulario------------------------------------

function validate($data) {

    $errors = [];
//Nombre
    $nombre = trim($data['nombre']);

        if($nombre == "") {
        $errors['nombre'] = "Debes ingresar tu Nombre y Apellido";
    }
//Celular
    $cel = ($data['cel']);

        if($cel == "") {
            $errors['cel'] = "Debes ingresar tu Teléfono";
       } 
// Email
    $email = trim($data['email']);

    if($email == "") {
        $errors['email'] = "Debes ingresar tu E-mail";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "El email es inválido";
    }
//Cuit
    $cuit = ($data['cuit']);

        if($cuit == "") {
            $errors['cuit'] = "Debes ingresar tu CUIT/CUIL";
       } 
//Direccion
    $direccion = ($data['direccion']);

    if($direccion == "") {
        $errors['direccion'] = "Debes ingresar tu Dirección";
    } 
//Localidad
    $localidad = ($data['localidad']);

    if($localidad == "") {
        $errors['localidad'] = "Debes ingresar tu Localidad";
    } 
//Provincia
    $provincia = ($data['provincia']);

    if($provincia == "") {
        $errors['provincia'] = "Debes ingresar tu Provincia";
    } 
//Usuario
    $usuario = trim($data['usuario']);

    if($usuario == "") {
        $errors['usuario'] = "Debes ingresar un Usuario";
    } 


//Password y Cpassword    
    $password = trim($data['password']);
    $cpassword = trim($data['cpassword']);
    
    if($password == "") {
        $errors['password'] = "Debes ingresar una constraseña";
    } elseif($password > 5 && $password < 9) {
        $errors['password'] = "La constraseña debe ser entre 6 y 8 caracteres";
    }

    if($password != $cpassword) {
        $errors['cpassword'] = "La contraseña no coincide";
    }


    return  $errors;
}











?>