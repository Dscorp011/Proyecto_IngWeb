<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PROFESORES</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet" media="screen"/>
</head>
<body class="m-0 vh-100 row justify-content-center align-item-center" style=background-color:rgb(169,223,191);">
<h4>ACCESO PROFESORES</h4> 
<div class="abs-center mt-5">
<img src="Images/profesor.png" width="250" height="250">
</div>
  <div class="col-xxl-5 col-lg-5 col-md-7 col-sm-10 pt-5">
    <div class="card-header text-center"><h3>Profesor</h3></div>
      <div class="card-body">
      <form method="post" action="<?=base_url('validarProfesor')?>" enctype="multipart/form-data">
  <div class="form-group" text="text-center">
    <label for="email">Dirección Email</label>
    <input type="email" class="form-control" id="emailAD" name="emailAD" placeholder="Enter email" required="">
    <small id="emailHelp1" class="form-text text-muted">Tus email es privado, porfavor no compartas tus datos con nadie .</small> </div>
  <div class="form-group" text="text-center">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="passwordAD" name="passwordAD" placeholder="Password" required="">
  </div>
  <div class="form-group" text="text-center">
    <label for="password"> Repite tu Password</label>
    <input type="password" class="form-control" id="passwordAD2" name="passwordAD2"placeholder="Password" required="">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Aceptar redirección</label required="">
  </div>
  
  <button class="btn btn-dark" type="submit ">Acceder</button>
</form>
      </div>
    </div>
  
  </div>
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
</body>
</html>