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
        

        $Nombres = ($_POST['nombres']);
        $Apellidos = ($_POST['apellidos']);
        $Clave = ($_POST['contraseña']);
        $Tipo_documento = ($_POST['fk_tipo_documento']);
        $Numero_documento = ($_POST['numero_documento']);
        $Genero = ($_POST['fk_genero']);
        $Cargo = ($_POST['fk_cargo']);
        $Edad = ($_POST['edad']);
        $Direccion = ($_POST['direccion']);
        $Localidad = ($_POST['fk_localidad']);
        $Email = ($_POST['email']);
        $Celular = ($_POST['celular']);
        $Telefono = ($_POST['telefono']);
        $Eps = ($_POST['fk_eps']);
        $Sede_contratista = ($_POST['fk_sede_contratista']);
        
        

        
        parent::registro($Nombres,$Apellidos,$Clave,$Tipo_documento,$Numero_documento,$Genero,$Cargo,$Edad,$Direccion,$Localidad,$Email,$Celular,$Telefono,$Eps,$Sede_contratista);
        header("location:?c=Admins&m=consultarUser");
    }

    public function eliminar(){
        parent::eliminardato($_REQUEST['id']);
        header("location:?c=Admins&m=consultarUser");
    }

    public function consultarUser(){

        require_once('views/APP/componentes/admins/consultarUsuarios.php');

    }

    public function update(){
        $Usuario= ($_POST['usuario']);
        $Email= ($_POST['email']);
        $Clave= ($_POST['clave']);
        parent::updateUsuario($id,$Usuario,$Email,$Clave);
        header('location:?c=Admins&m=consultarUser');

    }

    


}

?>