<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
     <!-- Bootstrap -->
     <link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet" media="screen"/>
</head>
<body class="m-0 vh-100 row justify-content-center align-item-center" id="al">
<!-- FORMULARIO DE REGISTRO PARA ALUMNOS -->
<div class="card col-md-6 text-center">
    <div class="card-body">
        <h5 class="card-title">MODIFICANDO LOS DATOS DEL ADMINISTRADOR</h5>
        <p class="card-text">
        <div class="col-xxl-5 col-lg-5 col-md-7 col-sm-10 pt-5"> 
<form method="post" action="<?=base_url('actualizarAdmin')?>" enctype="multipart/form-data">

<<imput type="text" name="id" value="<?=$Admin['idUsuario']?>"> 
<div class="form-group">
    <label for="txtnombre">Nombre:</label>
    <input id="txtnombre" value="<?=$Admin['Nombre']?>" class="form-control" type="text" name="txtnombre"required="">
</div>
<div class="form-group">
    <label for="txtapellidos">Apellidos:</label>
    <input id="txtapellidos" value="<?=$Admin['Apellidos']?>" class="form-control" type="text" name="txtapellidos"required="">
</div>
<div class="form-group">
    <label for="txtcorreo">Correo:</label>
    <input id="txtcorreo" value="<?=$Admin['correo']?>"class="form-control" type="text" name="txtcorreo"required="">
</div>
<div class="form-group">
    <label for="txtpassword">Password:</label>
    <input id="txtpassword" value="<?=$Admin['password']?>"class="form-control" type="password" name="txtpassword" required="">
</div>
<br>
<button class="btn btn-warning" type="submit ">Actualizar</button>
</form>
</div>
        
    </div>
        </p>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-3.3.1.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap-4.3.1.js"></script>

</body>
</html>