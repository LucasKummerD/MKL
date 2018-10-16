<?php
require 'database.php';

class JSONdb extends Database {

    private $file;

    public function __construct($file) {
        $this->file = $file;
    }

    public function dbConnect() {
        $usersArray = [];
        $db = file_get_contents($this->file);
        $arr = explode(PHP_EOL, $db);
        array_pop($arr);

        foreach($arr as $user) {
            $usersArray[] = json_decode($user, true);
        }

        return $usersArray;
    }

    public function dbEmailSearch($email) {
        $users = $this->dbConnect();
        foreach($users as $user) {
            if($user['email'] === $email) {
                return $user;
            }
        }
        return null;
    }

    public function saveUser($usuarioArray) {
        $file = $this->file;
        $jsonUser = json_encode($usuarioArray);
        file_put_contents($file, $jsonUser . PHP_EOL, FILE_APPEND);
    }


    public function idGenerate() {
        $arr = $this->dbConnect();

        if($arr == []) {
            return 1;
        }

        $lastUser = count($arr);

        return $lastUser + 1;

    }
   
    public function createUser(User $user) {
        $usuario = [
            'nombre' => $user -> getNombre(),
            'sexo' => $user -> getSexo(),
            'cel' => $user -> getCel(),
            'email' => $user -> getEmail(),
            'usuario' => $user -> getusuario(),
            'password' => password_hash($user -> getPassword(), PASSWORD_DEFAULT),
            'role' => $user -> getRole()
        ];
    
        $usuario['id'] = idGenerate();
        
        return $usuario ;
    }   

// Funciones de Getter y Setter ------------------------------------------------------------------------------------------
    
    public function getFile() {
        return $this->file;
    }

    public function setFile($file) {
        $this->file = $file;

        return $this;
    }
}