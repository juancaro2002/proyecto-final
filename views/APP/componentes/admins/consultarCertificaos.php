<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link  rel="icon"   href="assets/img/loguito.png" type="image/png" >
    <title>ConsultarCertificados</title>
</head>

<body>
    <!-- CABECERA/MENU -->
    <header class="index">
        <div class='header-barra' >
            <div class='navegacion'>
                <div class="MenuOpen">
                    <a href="#"><i class="fas fa-bars" style="color:white;width:30; height:30; margin-top:10;"  ></i></a>
                </div>
                <div class="MenuHover">
                    <nav>
                        <ul>
                        <li>
                                <a href="?c=Admins&m=admins" ><i class="fas fa-house-user"></i> INICIO </a>
                            </li>
                            <li>
                                <a href="?c=Pag&m=quienesSomos"> ¿QUIENES SOMOS? <i class="fas fa-users"></i></a>
                            </li>
                            <li>
                                <a href="?c=Pag&m=desarro"><i class="fas fa-smile"></i> DESARROYADORES</a>
                            </li>
                            <li>
                                <a href="?c=Pag&m=contacto">CONTACTO <i class="fas fa-map-marked-alt"></i></a>
                            </li>
                            <li>
                                <a href="?c=Index&m=index"> <i class="fas fa-sign-out-alt"></i>SALIR</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="container-fluid" id="admin" style=" width:90%;  border: black 5px solid ; background-color: rgba(255, 255, 255, 0.9);  " >
                    <div class="row">
                        <div class="col-md-12" style="border-bottom: black 5px solid;">
                            <div class="col-md-12" style=" margin: 5px;" >
                                <img src="img/logo.png" align="left" width="50" height="55    " alt="">
                                <h1>&nbsp&nbsp|ADMINS->CONSULTAR CERTIFICADOS </h1>

                            </div>

                        </div>
                        <div class="col-md-2.5" id="" style="height: 600px">
                            <div class="col-md-12" style="margin-top: 10%;">
                                <div class="card" >

                                    <div class="card-body" style="background-color: transparent;">
                                        <h3 class="card-title" style="text-align: center;">CERTIFICADOS</h2>
                                            <hr>
                                            <center> <a href="?c=Admins&m=crear" class="btn btn-outline-primary" style="margin-top: 5%" >CREAR CERTIFICADO</a>   
                                                <center> <a href="?c=Admins&m=consultarCer" class="btn btn-outline-primary" style="margin-top: 7%" >CONSULTAR CERTIFICADOS</a>
                                                </center>
                                                <a href="?c=Admins&m=modificarCer" class="btn btn-outline-primary" style="margin-top: 7%" >MODIFICAR CERTIFICADOS</a>
                                            </div>

                                            <hr>
                                            <div class="card-body" style="background-color: transparent;">
                                                <h3 class="card-title" style="text-align: center;">USUARIOS</h2>
                                                    <hr>
                                                    <center> <a href="?c=Admins&m=newUser" class="btn btn-outline-primary" style="margin-top: 5%" >NUEVO USUARIO</a>  
                                                        <center> <a href="?c=Admins&m=consultarUser" class="btn btn-outline-primary" style="margin-top: 7%" >CONSULTAR USUARIOS</a>
                                                        </center>
                                                    </div>




                                                </div>


                                            </div>


                                        </div>
                                        <div class="" style="border-left:  black 5px solid; ">



                                        </div>
                                        <div class="card-body" style="background-color: grey;">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Id</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Password</th>
                                                        <th scope="col">cargo</th>
                                                        <th scope="col" class="text-center">Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>profealbeiro@gmail.com</td>
                                                        <td>admin</td>
                                                        <td>12345</td>
                                                        <td>administrador</td>
                                                        <td class="text-center">
                                                            <a href="APP/componentes/admins/modificarCertificado.html" class="btn btn-success btn-sm"><i class="far fa-edit"></i></a><a href="../componentes/mensaje.html" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>


                                    </div>



                                </div>
                            </div>
                        </div>
                    </header>
                    <footer style="height: 100px; background-color: #000000; color: white; font-size: 110%; text-align: center;">@ COPYRYGHT 2020 POR C.A.C. EL REGISTRO EN ESTA PAGINA WEB IMPLICA LA ACEPTACION DE SU POLITOCA DE PRIVACIDAD.</footer>

                    <!-- SCRIPT -->
                    <script src="assets/bootstrap-3/js/main.js"></script>
                    <script src="assets/bootstrap-3/js/jquery-3.5.1.slim.min.js" ></script>
                    <script src="assets/bootstrap-3/js/popper.min.js" ></script>
                    <script src="assets/bootstrap-3/js/bootstrap.min.js" ></script>
                    <script src="assets/bootstrap-3/js/all.js" ></script>
                </body>

                </html>
