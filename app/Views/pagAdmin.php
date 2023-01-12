<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administradores</title>
     <!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet" media="screen"/>
</head>
<body class="m-0 vh-100 row justify-content-center align-item-center" style=background-color:rgb(210,180,222);">


<h4>TABLA ADMINISTRADORES</h4>
<br/>
<br/>

  <!--TABLA AMINISTRADORES----->
  <div class="container">
  <table class="table table-dark">
    <thead class="thead-light">
      <tr>
        <th>idUsuario</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Correo</th>
        <th>Password</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
     <?php foreach($admins as $admin):?>
      <tr>
        <td><?=$admin['idUsuario']?></td>
        <td><?=$admin['Nombre']?></td>
        <td><?=$admin['Apellidos']?></td>
        <td><?=$admin['correo']?></td>
        <td><?=$admin['password']?></td>
        <td><a href=<?=base_url('listarAdmins')?> class="btn btn-primary" type="button">MOSTRAR</a></td>
        <td><a href=<?=base_url('editarAdmin/'.$admin['idUsuario'])?> class="btn btn-warning" type="button">EDITAR</a></td>
        <td><a href=<?=base_url('borrarAdmin/'.$admin['idUsuario']);?> class="btn btn-danger" type="button">ELIMINAR</a></td> 
         
      </tr>
      <?php endforeach;?>

    </tbody>
  </table>
</div>
<br>
<!------------------------- FOOTER--------------------------------------->
<!----------------------------------------------------------------------->
<div class="container-fluid bg-light text-center p-3">
    <p class="small"><h5>&copy; Todos los derechos reservados :: Instituto Politécnico Nacional :: Instituto profesional de ingeniería Dr. Philips IPN :: 2022</h5></p>
    <div class="text-center mr-5">
    <img  src="Images/ipn.png" width="175" height="79" >  <img  src="Images/facebook.png" width="80" height="80"  ><img  src="Images/insta.png" width="60" height="60" text="text-right" >
    </div>
    
  </div>
<!------------------------- FOOTER--------------------------------------->
<!-----------------------------------------------------------------------> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.3.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
  <script src="js/bootstrap-4.3.1.js"></script>

  <?$pie?>
</body>
</html>