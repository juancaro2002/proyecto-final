<?php

    class DB{

    public static function conectar(){

        try{
            $pdo=new PDO('mysql:host=localhost;dbname=base_de_datos;charset=utf8','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $pdo;

        }catch(exception $e){
            die($e->getMessage());

        }

    }
}

?>



instructor como le comento tengo muchos problemas con el internet, estoy en el celular con los datos  y no puedo presentar nuestro proyecto por los mismos problema con el Internet. entonces quería saber si existe la posibilidad que se lo podamos presentar el dia de mañana?