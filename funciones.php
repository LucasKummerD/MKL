<?php 

session_start();
require 'helpers.php';

//Ingresar el tema del avatar (Imagen Perfil) 

//ESTE QUEDO PARA TERMIANAR EL TEMA DEL vALIDATE AVATAR EN vALIDACION

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

//-----------------------------------------------------------------------------------------------------------------

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