<?php

class Validacion {
    public static function emailValidate($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
//-----------------------------------------------------------------------------------------
    public static function validateAvatar($file) {
        $errores = [];
        //$usuario = $data["usuario"];
        //$file = $file->getAvatar();
        
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
//-----------------------------------------------------------------------------------------
    public static function passwordMatch($data) {
        return $data['password'] == $data['cpassword'];
    }

    public static function termsAndConditions($data) {
        return isset($data['confirm']);

    }

//--------------------------------------------------VALIDACION DEL FORMULARIO-------------------------------------------------

    public static function registerValidate(User $user, $data) {
        $errors = [];
//-----------------------------------------------------------------------------------------               
        $nombre = $user->getNombre();

        if($nombre == "") {
            $errors['nombre'] = "Debes ingresar tu Nombre y Apellido";
        }
//-----------------------------------------------------------------------------------------   
        $sexo = $user->getSexo();
        
        if(!isset($data['sexo'])) {
            $errors['sexo'] = "Debes seleccionar tu sexo";
            } 
//-----------------------------------------------------------------------------------------          
        $cel = $user->getCel();
        
        $cel = ($data['cel']);

        if($cel == "") {
            $errors['cel'] = "Debes ingresar tu Teléfono";
        } 
//-----------------------------------------------------------------------------------------
        $usuario = $user->getUsuario();
        
        if($usuario == "") {
            $errors['usuario'] = "Este campo esta vacio.";
        }  
//------------------------------------------------------------------------------------------
        $email = $user->getEmail();
        
        if($email == "") {
            $errors['email'] = "Este campo esta vacio.";
        } elseif(!self::emailValidate($email)) {
            $errors['email'] = "El email no es valido.";
        }
//-------------------------------------------------------------------------------------------
        $password = trim($user->getPassword());
        $cpassword = trim($data['cpassword']);
        
        if($password == "") {
            $errors['password'] = "Este campo esta vacio.";
        } elseif($password < 4) {
            $errors['password'] = "La contraseña debe tener al menos 4 caracteres";
        }
        
        if(!self::passwordMatch($data)) {
            $errors['cpassword'] = "La contraseña no coincide";
        }
//-------------------------------------------------------------------------------------------
        if(!isset($data['confirm'])) {
            $errors['confirm'] = "Debe aceptar Terminos y Condiciones.";
        }
        return $errors;
        
    }
//--------------------------------------------- FIN VALIDACION DEL FORMULARIO -------------------------------------------------

//--------------------------------------------- VALIDACION DE LA PASS Y LOGIN -------------------------------------------------

    public static function passwordValidate($password, $objectPassword) {
        return password_verify($password, $objectPassword);
    }

    public static function loginValidate($password, User $user) {
        return self::passwordValidate($password, $user->getPassword());

    }

}