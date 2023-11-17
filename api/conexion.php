<?php

class Conexion {
    
    public function conectar(){
        
        define('HOST', 'localhost');
        define('USER', 'root');
        define('PASS', '');
        define('DB', 'quinto');
        $opc = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
        
        try {
            $conexion = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASS, $opc);
           
            return $conexion;
        } catch (PDOException $th) {
            die('Error: '.$th->getMessage());

        }
    
    }
}

?>