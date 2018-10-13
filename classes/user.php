<?php

class User {

    private $usuario;
    private $email;
    private $password;
    private $avatar;
    private $role = 1;

    public function __construct(String $usuario, String $email, String $password, String $avatar = null) {
            $this->usuario = $usuario;
            $this->email = $email;
            $this->password = $password;
            $this->avatar = $avatar;
    }

//queda asi porque vamos a sacar cosas del formulario de registro, queda a modificar.    

    public function getusuario() {
        return $this->usuario;
    }
 
    public function setusuario(String $usuario) {
        $this->usuario = $usuario;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail(String $email) {
        $this->email = $email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setPassword(String $password) {
        $this->password = $password;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }

    public function getRole() {
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
    }
}
?>



