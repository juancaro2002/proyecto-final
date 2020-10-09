<?php

class AdminsController extends Administrador{

    public function admins(){
        require_once('views/APP/paginasPrincipales/admin.php');
    }

    public function crear(){
        require_once('views/APP/componentes/admins/crearCertificados.php');
    }

    public function consultarCer(){
        require_once('views/APP/componentes/admins/consultarCertificaos.php');
    }

    public function modificarCer(){

        require_once('views/APP/componentes/admins/modificarCertificado.php');

    }

    public function newUser(){

        require_once('views/APP/componentes/admins/crearUsuarios.php');

    }
    public function registrar_usuario(){
        

        $Usuario = ($_POST['usuario']);
        $Email = ($_POST['email']);
        $Clave = ($_POST['clave']);
        $Cargo = ($_POST['fk_cargo_contratista']);
        

        
        parent::registro($Usuario,$Email,$Clave,$Cargo);
        header("location:?c=Admins&m=consultarUser");
    }

    public function eliminar(){
        parent::eliminardato($_REQUEST['id']);
        header("location:?c=Admins&m=consultarUser");
    }

    public function consultarUser(){

        require_once('views/APP/componentes/admins/consultarUsuarios.php');

    }

    


}

?>