


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
	<title>Admin</title>
</head>

<body>
	<form action="?c=admins&m=admin"></form>

	<!-- CABECERA/MENU -->
	<?php  require_once 'views/compo/menu.php'; ?>
	<!--final/Menu-->
	<div class="container-fluid" id="admin" style=" width:90%;  border: black 5px solid ; background-color: rgba(255, 255, 255, 0.9);  " >
		<div class="row">
			<div class="col-md-12" style="border-bottom: black 5px solid;">
				<div class="col-md-12" style=" margin: 5px;" >
					<img src="assets/img/logo.png" align="left" width="50" height="55    " alt="">
					<h1>&nbsp&nbsp|ADMINS|Editar perfil</h1>

				</div>

			</div>
			<div class="col-md" style="margin:5% "> 
				<form action="?c=Adminis&m=update" method="post">
					<div class="form-group">
						<label for="">Nombre de usuario:</label>
						<input type="text"  class="form-control" name="usuario" id="" aria-describedby="">

					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input type="email" class="form-control" name="email" id="" aria-describedby="">

					</div>



					<div class="form-group form-check">

					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					<select name="nombres">


					</form>

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


