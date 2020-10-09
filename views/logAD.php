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
  <title>Inicio</title>
</head>

<body>
  <!-- CABECERA/MENU -->
  <header class="index">
    <center><img src="assets/img/logo.png"  width="80" height="90" style=" margin-top: 2%;" ></center>

    <div class="container " id="" style="background-color: rgba(0, 0, 0, 0.8); margin-top: 5%;    "  >

   <h3 style="color:white; text-align:center; ">ADMINISTRADORES</h3>
      <form action="?c=login&m=auth" method="post">

        <div class="form-group" >
          <label style="color:white; margin-top: 3%; " class="font-weight-bold" for="exampleInputEmail1">Email </label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="email"required>
          <small style="color:white" id="emailHelp" class="form-text">Ingrese su correo</small>
        </div>
        <div class="form-group">
          <label class="font-weight-bold" style="color:white" for="exampleInputPassword1"  >Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="clave" required>
          <small style="color:white" id="emailHelp" class="form-text "required>Ingrese su contraseña</small>
        </div>
        <div class="form-group">
          <label class="font-weight-bold" style="color:white" for="exampleInputPassword1">dijete su cargo</label>
          <input type="select" class="form-control" id="example"name="fk_cargo_contratista">
          <small style="color:white" id="emailHelp" class="form-text ">example: 1=admistrador</small>
        </div>
        <br>

       
        <input type="submit" class="btn btn-primary">
        

        <br><br><br>

      </form>

    </div>
  </div>


</header>
<footer style="height: 100px; background-color: #000000; color: white; font-size: 110%; text-align: center;">@ COPYRYGHT 2020 POR C.A.C. EL REGISTRO EN ESTA PAGINA WEB IMPLICA LA ACEPTACION DE SU POLITOCA DE PRIVACIDAD.</footer>

<!-- SCRIPT -->
<script src="../bootstrap-3/js/main.js"></script>
<script src="../bootstrap-3/js/jquery-3.5.1.slim.min.js" ></script>
<script src="../bootstrap-3/js/popper.min.js" ></script>
<script src="../bootstrap-3/js/bootstrap.min.js" ></script>
<script src="../bootstrap-3/js/summernote-bs4.min.js"></script>
<script src="../bootstrap-3/js/script-editor.js"></script>
</body>

</html>
