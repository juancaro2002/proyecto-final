<?php

class Administrador extends DB{

    public function all(){
        try{
            $stm=parent::conectar()->prepare("SELECT * FROM usuarios") ;
           $stm->execute(); 
           return $stm->fetchAll(PDO::FETCH_OBJ);
        }catch(Exception $e)    {
            die($e->getMessage());
        }
    }
    public function registro($Usuario,$Email,$Clave){
        try{
            $stm = parent::conectar()->prepare("INSERT INTO usuarios(usuario,email,clave) VALUES('$Usuario','$Email','$Clave')");
            $stm -> execute();
        }catch(Exception $e){
            die($e->getMessage());
        }

    }

    public function eliminardato($id){
            try{

                $stm=parent::conectar()->prepare("DELETE FROM usuarios WHERE id_usuarios = $id");
                $stm->execute();

            }catch(Exception $e){
                die($e->getMessage());
            }
            
    }

    public function updateUsuario ($id,$Usuario,$Email,$Clave){
        try{
            $stm=parent::conectar()->prepare("UPDATE usuarios SET usuario = '$Usuario',email='$Email',clave='$Clave' WHERE id_usuarios='$id'");
            $stm->execute();

        }catch(Exception $e){
            die($e->getMessage());
        }
    }


}


?>