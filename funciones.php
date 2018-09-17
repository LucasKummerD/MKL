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

        if($cel == "") {
            $errors['cuit'] = "Debes ingresar tu CUIT/CUIL";
       } 
//Direccion
    $direccion = ($data['direccion']);

    if($cel == "") {
        $errors['direccion'] = "Debes ingresar tu Dirección";
    } 
//Localidad
    $localidad = ($data['localidad']);

    if($cel == "") {
        $errors['localidad'] = "Debes ingresar tu Localidad";
    } 
//Provincia
    $provincia = ($data['provincia']);

    if($cel == "") {
        $errors['provincia'] = "Debes ingresar tu Provincia";
    } 
//Usuario
    $usuario = ($data['usuario']);

    if($cel == "") {
        $errors['usuario'] = "Debes ingresar un Usuario";
    } 




    return  $errors;
}











?>