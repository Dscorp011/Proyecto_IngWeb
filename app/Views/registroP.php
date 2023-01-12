<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Profesores</title>
     <!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet" media="screen"/>
<body class="m-0 vh-100 row justify-content-center align-item-center" id=prof>


<!-- FORMULARIO DE REGISTRO PARA ALUMNOS -->
<div class="card col-md-6 text-center">
    <div class="card-body">
        <h5 class="card-title">¡REGISTRA TUS DATOS COMO NUEVO PROFESOR!</h5>
        <p class="card-text">
        <div class="col-xxl-5 col-lg-5 col-md-7 col-sm-10 pt-5"> 
<form method="post" action="<?=base_url('guardarProfesor')?>" enctype="multipart/form-data">

<div class="form-group">
    <label for="txtnombre2">Nombre:</label>
    <input id="txtnombre2" class="form-control" type="text" name="txtnombre2"required="">
</div>
<div class="form-group">
    <label for="txtapellidos2">Apellidos:</label>
    <input id="txtapellidos2" class="form-control" type="text" name="txtapellidos2"required="">
</div>
<div class="form-group">
    <label for="txtgrupo2">Grupo:</label>
    <input id="txtgrupo2" class="form-control" type="text" name="txtgrupo2"required="">
</div>
<div class="form-group">
    <label for="txtcorreo2">Correo:</label>
    <input id="txtcorreo2" class="form-control" type="text" name="txtcorreo2"required="">
</div>
<div class="form-group">
    <label for="txtpassword2">Password:</label>
    <input id="txtpassword2" class="form-control" type="password" name="txtpassword2"required="">
</div>
<br>
<button class="btn btn-dark" type="submit ">Guardar</button>
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