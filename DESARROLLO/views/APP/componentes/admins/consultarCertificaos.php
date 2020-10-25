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
	<?php  require_once 'views/compo/menu.php'; ?>
	<!--final/Menu-->/

	<!--inicio/cuadro/principal-->    
	<?php  require_once 'views/compo/barraLateralAdmin.php'; ?>
	<!--fin/cuadro/lateral/admins--> 


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
