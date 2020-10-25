<?php

class Administrador extends DB{

    public function all(){
        try{

            $stm=parent::conectar()->prepare("SELECT * FROM contratista") ;
            $stm->execute(); 
             return $stm->fetchAll(PDO::FETCH_OBJ);

        }catch(Exception $e)    {

             die($e->getMessage());

        }
    }

    public function datos(){
        
            $query=mysqli_query($mysqli,"SELECT fk_tipo_documento,fk_genero,fk_cargo,fk_localidad,fk_eps,fk_sede_contratista FROM contratista");
   
}



    public function registro($Nombres,$Apellidos,$Clave,$Tipo_documento,$Numero_documento,$Genero,$Cargo,$Edad,$Direccion,$Localidad,$Email,$Celular,$Telefono,$Eps,$Sede_contratista){
        try{

            $stm = parent::conectar()->prepare("INSERT INTO contratista(nombres,apellidos,contraseña,fk_tipo_documento,numero_documento,fk_genero,fk_cargo,edad,direccion,fk_localidad,email,celular,telefono,fk_eps,fk_sede_contratista) VALUES('$Nombres','$Apellidos','$Clave','$Tipo_documento','$Numero_documento','$Genero','$Cargo','$Edad','$Direccion','$Localidad','$Email','$Celular','$Telefono','$Eps','$Sede_contratista')");
            $stm -> execute();

        }catch(Exception $e){
             die($e->getMessage());

        }

    }

    public function eliminardato($id){
        try{

            $stm=parent::conectar()->prepare("DELETE FROM contratista WHERE id_contratista = $id");
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