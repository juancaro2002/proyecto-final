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




<div class="col-md" style="margin:5%; height: 550px; overflow: auto; width:152px;" name=""> 
	<form action="?c=Admins&m=registrar_usuario" method="post">
		<div class="form-group">
			<label for="">Nombres:</label>
			<input type="text" class="form-control" name="nombres" id="" aria-describedby="">

		</div>
		<div class="form-group">
			<label for="">Apellidos:</label>
			<input type="text" class="form-control" name="apellidos" id="" aria-describedby="">
		</div>

		<label for=""> Tipo documento:</label>
		<select name="fk_tipo_documento"  class="form-control col- ">
			<?php
			
			while($datos = mysqli_fetch_array($stm))    
				?>
			<option value="1"><?php echo $datos ['fk_tipo_documento'] ?></option>
			<?php
			
			?>
		</select>


		<div class="form-group">
			<label for="">Numero documento:</label>
			<input type="text" class="form-control" name="numero_documento" id="" aria-describedby="">
		</div>

		<label for=""> Genero:</label>
		<select name="fk_genero" id="fk_genero" class="form-control ">
		</select>

		<label for=""> Cargo</label>
		<select name="fk_cargo" id="fk_cargo" class="form-control ">
		</select>

		<div class="form-group">
			<label for="">Edad:</label>
			<input type="text" class="form-control" name="edad" id="" aria-describedby="">
		</div>

		<div class="form-group">
			<label for="">Direccion:</label>
			<input type="text" class="form-control" name="direccion" id="" aria-describedby="">
		</div>

		<label for=""> Localidad</label>
		<select name="fk_localidad" id="fk_localidad" class="form-control ">
		</select>

		<div class="form-group">
			<label for="">Email:</label>
			<input type="text" class="form-control" name="email" id="" aria-describedby="">
		</div>

		<div class="form-group">
			<label for="">Celular:</label>
			<input type="text" class="form-control" name="celular" id="" aria-describedby="">
		</div>

		<div class="form-group">
			<label for="">Telefono:</label>
			<input type="text" class="form-control" name="telefono" id="" aria-describedby="">
		</div>

		<label for=""> Eps:</label>
		<select name="fk_eps" id="fk_eps" class="form-control ">
		</select>

		<label for=""> Sede</label>
		<select name="fk_sede_contratista" id="fk_sede_contratista" class="form-control ">
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
