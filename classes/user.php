<?php

class User {

    private $nombre;
    private $sexo           //SEXO ES UN RADIO, PERO EN LA BASE DE DATOS SE GUARDA COMO UN STRING COMO VA ENTONCES?
    private $cel
    private $usuario;
    private $email;
    private $password;
    private $avatar;
    private $role = 1;

    public function __construct(String $nombre, String $sexo, String $cel, String $usuario, String $email, String $password, String $avatar = null) {
            $this->nombre = $nombre;    
            $this->sexo = $sexo;
            $this->cel = $cel;
            $this->usuario = $usuario;
            $this->email = $email;
            $this->password = $password;
            $this->avatar = $avatar;
    }

//queda asi porque vamos a sacar cosas del formulario de registro, queda a modificar.    

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre(String $nombre) {
        $this->nombre = $nombre;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo(String $sexo) {
        $this->sexo = $sexo;
    }

    public function getCel() {
        return $this->cel;
    }

    public function setCel(String $cel) {
        $this->cel = $cel;
    }

    public function getUsuario() {
        return $this->usuario;
    }
 
    public function setUsuario(String $usuario) {
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



