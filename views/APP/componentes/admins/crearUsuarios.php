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
<title>crearUsuario</title>
</head>

<body>
<!-- CABECERA/MENU -->
<?php  require_once 'views/compo/menu.php'; ?>
<!--final/Menu-->/

<!--inicio/cuadro/principal-->    
<?php  require_once 'views/compo/barraLateralAdmin.php'; ?>
<!--fin/cuadro/lateral/admins--> 


</div>


</div>
<div class="" style="border-left:  black 5px solid; ">



</div>
<div class="col-md" style="margin:5% "> 
<form action="?c=Admins&m=registrar_usuario" method="post">
<div class="form-group">
<label for="">Usuario:</label>
<input type="text" class="form-control" name="usuario" id="" aria-describedby="">

</div>
<div class="form-group">
<label for="">Email</label>
<input type="email" class="form-control" name="email" id="" aria-describedby="">

</div>
<div class="form-group">
<label for="">Clave</label>
<input type="password" class="form-control" name="clave" id="" aria-describedby="">

</div>
<label for=""> Cargo</label>
<select name="fk_cargo_contratista" id="fk_cargo_contratista" class="form-control ">



</select>
<div class="form-group form-check">

</div>
<button type="submit" class="btn btn-primary">Submit</button>
<select name="nombres">


</form>

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
<?php

$r=parent::registrar($_REQUEST['ID']);

foreach($resultados as $resultado){


?>

<option value="<?php echo $resultado->id_usuarios;?>">

<?php echo $resultado->id_usuarios; ?>
<?php echo $resultado->usuario; ?>
<?php echo $resultado->email; ?>
<?php echo $resultado->clave; ?>
<?php echo $resultado->fk_cargo_contratista; ?>



</option>
<?php } ?>
