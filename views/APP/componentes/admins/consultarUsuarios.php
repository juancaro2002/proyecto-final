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
<title>ConsultarUsuarios</title>
</head>

<body>
<!-- CABECERA/MENU -->
<?php  require_once 'views/compo/menu.php'; ?>
<!--final/Menu-->
/

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
<th scope="col">ID</th>
<th scope="col">Username</th>
<th scope="col">Email</th>
<!--<th scope="col">Password</th>
<th scope="col">cargo</th>-->
<th scope="col" class="text-center">Acciones</th>
</tr>
</thead>
<?php foreach(parent::all() as $r){?>

<tbody>
<tr>
<td><?php echo $r->id_usuarios?></td>
<td><?php echo $r->usuario?></td>
<td><?php echo $r->email?></td>
<!--<td><?php echo $r->clave?></td>
<td><?php echo $r->fk_cargo_contratista?></td>-->
<td><a href="?" class="btn btn-dark btn-sm"><i class="fas fa-eye"></i></a>
<a href="?c=pag&m=editarPerfil" class="btn btn-primary btn-sm"><i class="fas fa-user-edit"></i></a>
<a href="?c=Admins&m=eliminar&id= <?php echo $r->id_usuarios?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>

</td>


</tr>

</tbody>  
<?php } ?>
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
