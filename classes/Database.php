<?php

abstract class Database {
    abstract public function dbConnect();
    abstract public function dbEmailSearch($email);
    abstract public function saveUser(User $user);

    public function photoPath($data) {
        $usuario = $data["usuario"];
        $nombre = $_FILES["avatar"]["name"];
        $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    
        $miArchivo = "perfil" . $usuario . "." . $ext;
       
        return $miArchivo;
    }

    
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

}