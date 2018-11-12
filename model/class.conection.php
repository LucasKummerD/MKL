<?php
    class Conection
    {
        public function getConection()
        {
            
            $user = "root";
            $pass = '';
            $conect = "mysql:host=localhost;dbname=mkl_db;charset=utf8mb4;port=3306;";
            $conection = new PDO($conect,$user,$pass);
            return $conection;
        }
    }
?>