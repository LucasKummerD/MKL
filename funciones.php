<?php 

session_start();
require 'helpers.php';

//------------------------------------------Validaciones Formulario------------------------------------

function validate($data) {

    $errors = [];
//Nombre
    $nombre = trim($data['nombre']);

    if($nombre == "") {
    $errors['nombre'] = "Debes ingresar tu Nombre y Apellido";
    }

//Sexo
    if(!isset($data['sexo'])) {
    $errors['sexo'] = "Debes seleccionar tu sexo";
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
    } elseif(strlen($password) < 4 && (strlen($password) <= 8)) {
        $errors['password'] = "La constraseña debe ser entre 4 y 8 caracteres";
    }

    if($password != $cpassword) {
        $errors['cpassword'] = "La contraseña no coincide";
    }

//Terminos y condiciones  
    if(!isset($data['terminos'])) {
        $errors['terminos'] = "Debes aceptar terminos y condiciones";
    }

    return  $errors;
}

//---------------------------------------------------------------------------------------------------------------------------//

//Ingresar el tema del avatar (Imagen Perfil)

function validateAvatar($data) {
    $errores = [];
    $usuario = $data["usuario"];

    
    if($_FILES["avatar"]["error"] == UPLOAD_ERR_OK) {  
        $nombre = $_FILES["avatar"]["name"];
        $archivo = $_FILES["avatar"]["tmp_name"];
        
        $ext = pathinfo($nombre, PATHINFO_EXTENSION);

        if($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
            $errores["avatar"] = "Solo acepto formatos .jpg, .png o .jpeg";
            return $errores;
        }

        $miArchivo = dirname(__FILE__);                                 
        $miArchivo = $miArchivo . "/img/";
        $miArchivo = $miArchivo. "perfil" . $usuario . "." . $ext;
        move_uploaded_file($archivo, $miArchivo);

    } else {
        $errores["avatar"] = "Hubo un error al procesar el archivo";
    }
    return $errores;
}

function photoPath($data) {
    $usuario = $data["usuario"];
    $nombre = $_FILES["avatar"]["name"];
    $ext = pathinfo($nombre, PATHINFO_EXTENSION);

    $miArchivo = "perfil" . $usuario . "." . $ext;
   
    return $miArchivo;
}
function createUser($data) {

    $usuario = [
        'nombre' => $data['nombre'],
        'sexo' => $data['sexo'],
        'email' => $data['email'],
        'cel' => $data['cel'],
        'cuit' => $data['cuit'],
        'direccion' => $data['direccion'],
        'localidad' => $data['localidad'],
        'provincia' => $data['provincia'],
        'usuario' => $data['usuario'],
        'password' => password_hash($data['password'], PASSWORD_DEFAULT),
        'role' => 1
    ];

    $usuario['id'] = idGenerate();
    
    return $usuario ;
}   

function idGenerate() {
    $file = file_get_contents('users.json');

    if($file == "") {
        return 1;
    }

    $users = explode(PHP_EOL, $file);
    array_pop($users);

    $lastUser = $users[count($users) - 1];
    $lastUser = json_decode($lastUser, true);

    return $lastUser['id'] + 1;
}

function saveUser($user) {
    $jsonUser = json_encode($user);
    file_put_contents('users.json', $jsonUser . PHP_EOL, FILE_APPEND);
}

function dbConnect() {
    $db = file_get_contents('users.json');
    $arr = explode(PHP_EOL, $db);
    array_pop($arr);

    foreach($arr as $user) {
        $usersArray[] = json_decode($user, true);
    }

    return $usersArray;
}

// Buscar por Mail 

function dbEmailSearch($email)
{
    $users = dbConnect();
    foreach($users as $user) {
        if($user['email'] === $email) {
            return $user;
        }
    }
    return null;
}


function login($user)
{
    $_SESSION['email'] = $user['email'];
    $_SESSION['avatar'] = $user['email'];
    setcookie('email', $user['email'], time() + 3600 * 24 * 7, "/");

}

function logout()
{
    if(!isset($_SESSION)) {
        session_start();
    }
    session_destroy();
    setcookie('email', null, time() -1);
    redirect('registrarse.php');
}


?>