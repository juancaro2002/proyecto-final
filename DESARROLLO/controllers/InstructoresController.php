<?php

class InstructoresController extends instructores{

    public function instruc(){
        require_once('views/APP/paginasPrincipales/instructores.php');
    }


    public function consultarCERT(){
        require_once('views/APP/componentes/instructores/consultarCert.php');
    }


}

?>