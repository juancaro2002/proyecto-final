<?php

class PagController extends paginas{

    public function inicio(){
        require_once('views/APP/componentes/paginas/contacto.php');
    }

    public function quienesSomos(){
        require_once('views/APP/componentes/paginas/quienesSomos.php');
    }

    public function desarro(){
        require_once('views/APP/componentes/paginas/desarrolladores.php');
    }

    public function contacto(){
        require_once('views/APP/componentes/paginas/contacto.php');
    }
    public function editarPerfil(){
        require_once('views/APP/componentes/admins/editarPerfil.php');
    }



    public function quienesSomosIns(){
        require_once('views/APP/componentes/paginas/paginasInstructores/quienesSomos.php');
    }

    public function desarroIns(){
        require_once('views/APP/componentes/paginas/paginasInstructores/desarrolladores.php');
    }

    public function contactoIns(){
        require_once('views/APP/componentes/paginas/paginasInstructores/contacto.php');
    }




    

}

?>