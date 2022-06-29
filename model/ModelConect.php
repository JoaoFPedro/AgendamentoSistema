<?php
//Conection with events DataBase

namespace Models; //namespace is like a pointer to a file path where you can find the source of the function you are working with

 abstract class ModelConect{
   protected  function conectDB(){
        
        //Autenticação do BD, constantes passadas no arquivo de config.php
        try {
            $con = new \PDO("mysql:host =".HOST.";dbname=".DB."",USER,PASS);
            return $con;
        } catch (\PDOException $erro) {

            return $erro -> getMessage();
        }
    }
}
