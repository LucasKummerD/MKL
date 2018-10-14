<?php

class Validate {
    public static function emailValidate($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function validateAvatar($file) {
        //-queda a terminar esto
    }

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
            $errors['confirm'] = "Debe aceptar Terminos y COndiciones.";
        }
        return $errors;
        
    }
//--------------------------------------------- FIN VALIDACION DEL FORMULARIO -------------------------------------------------

    public static function passwordValidate($password, $objectPassword) {
        return password_verify($password, $objectPassword);
    }

    public static function loginValidate($password, User $user) {
        return self::passwordValidate($password, $user->getPassword());

    }

}