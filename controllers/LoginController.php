<?php

class LoginController extends login{

    private $usuarios;

    public function __construct(){
        try{
            $this->usuarios = new Usuarios();
            
        }catch(exception $e){

        }
        
    }
    
    public function auth(){
        $Email=$_POST['email'];
        $Clave=$_POST['clave'];
        $Cargo=$_POST['fk_cargo_contratista'];
        $_SESSION['usuarios'] = $Email;
        
        $Usuario=$this->usuarios->requestEmail($_POST['email']);
        if($Email==$Usuario->email && $Clave== $Usuario->clave && $Cargo==$Usuario->fk_cargo_contratista){
         
            $_SESSION['user']=$Usuario;
            header("location:?c=Admins&m=admins");

            
        }else{
            header("location:?c=Index&m=loginAD");
             
        }
      
    
    }
    public function auths(){
        $Email=$_POST['email'];
        $Clave=$_POST['clave'];
        $Cargo=$_POST['fk_cargo_contratista'];
        $_SESSION['usuarios'] = $Email;
        
        $Usuario=$this->usuarios->requestEmail($_POST['email']);
        if($Email==$Usuario->email && $Clave== $Usuario->clave && $Cargo==$Usuario->fk_cargo_contratista){
         
            $_SESSION['user']=$Usuario;
            header("location:?c=Instructores&m=instruc");

            
        }else{
            header("location:?c=Index&m=loginIns");
             
        }
      
    
    }
   
  
}




?>