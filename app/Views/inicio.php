<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dr. Philips IPN</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet" media="screen"/>
	  
  </head>
  <body style=background-color:rgb(174,182,191);>
	  <div class="text text-center"><h1>INSTITUTO PROFESIONAL DE INGENIERÍA DR. PHILIPS IPN </h1>  
	  <img  src="Images/ipn.png" width="250" height="154">
	  </div>

<!-- body code goes here -->
	  
	<!----------------------------- BARRA DE NAVEGACIÓN------------------>
	<!------------------------------------------------------------------->
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="#"><img src="Images/pngwing.com.png" width="122" height="159" class="logo1"></a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent1">
	      <ul class="navbar-nav mr-auto">
	        <li class="nav-item active"> <a class="nav-link"href="<?=base_url('/')?>">Inicio <span class="sr-only">(current)</span></a> </li>
	        <li class="nav-item"> <a class="nav-link" href="#">Conocenos</a> </li>
	        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Oferta Educativa</a>
	          <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="<?=base_url('ingAutomotriz')?>">Ing. en Sistemas automotrices</a> <a class="dropdown-item" href="<?=base_url('ingElectrica')?>">Ing. en Electrica</a><a class="dropdown-item" href="<?=base_url('ingElectronica')?>">Ing. en Electronica</a>
				  
	            <div class="dropdown-divider"></div>
	            <a class="dropdown-item" href="<?=base_url('ingAutomatizacion')?>">Ing. en Control y automatizacion</a> </div>
            </li>
	        <li class="nav-item"> <a class="nav-link " href="https://www.ipn.mx/cenac/coordinacion-tecnica/academia-huawei/">Academias</a> </li>
          </ul>
	      <form class="form-inline my-2 my-lg-0">
	        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
      </div>
  </nav>
<!------------------------- END NAV BAR---------------------------------->
<!----------------------------------------------------------------------->
	  
<!------------------------- SIDE BAR------------------------------------->
<!----------------------------------------------------------------------->	  
	  
<!------------------------- END SIDE BAR--------------------------------->
<!----------------------------------------------------------------------->
	  
<!------------------------- SLIDER--------------------------------------->
<!----------------------------------------------------------------------->
<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" style="background-color: grey">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
	<li data-target="#carouselExampleIndicators1" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active"> <img class="d-block mx-auto" src="https://picsum.photos/id/5/1920/400" alt="First slide">
      <div class="carousel-caption">
        <h5>ACCESO ESTUDIANTES</h5>
        <p>ACCEDE AL PORTAL WEB DE LA INSTITUCIÓN</p>
	    <a class="btn btn-success" href="<?=base_url('loginA')?>" role="button">Acceder</a>
      </div>
    </div>
    <div class="carousel-item"> <img class="d-block mx-auto" src="https://picsum.photos/id/513/1920/400" alt="Second slide">
      <div class="carousel-caption">
        <h5>ACCESO PROFESORES</h5>
        <p>ESPACIO ÚNICO A PROFESORES DE LA INSTITUCIÓN</p>
	    <a class="btn btn-info" href="<?=base_url('loginP')?>" role="button">Acceder</a>
      </div>
    </div>
	  <div class="carousel-item"> <img class="d-block mx-auto" src="https://picsum.photos/id/855/1920/400" alt="Second slide">
      <div class="carousel-caption">
        <h5>REGISTRO</h5>
        <p>¿Deseas registrarte dentro de nuestra institución?</p>
		<h4>Recuerda el aprendizaje está a solo un paso</h4>
	    <a class="btn btn-danger" href="<?=base_url('registroA')?>" role="button">Registrarse como Alumno</a><a class="btn btn-info" href="<?=base_url('registroP')?>" role="button">Registrarse como Profesor</a>
      </div>
    </div>
    <div class="carousel-item"> <img class="d-block mx-auto" src="https://picsum.photos/id/378/1920/400" alt="Third slide">
      <div class="carousel-caption">
        <h5>ACCESO DE ADMINISTRADOR</h5>
	    <a class="btn btn-danger" href="<?=base_url('loginAdmin')?>" role="button">Acceder</a>
<p>&nbsp;</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
<!------------------------- END SLIDER--------------------------------------->
<!----------------------------------------------------------------------->

<!------------------------- BODY--------------------------------------->
<!----------------------------------------------------------------------->	
	 <br>
	 <div class="text text-center"> 
	  <h2>BIENVENIDO</h2>
		 <h5>
		 <p>
		 Te damos la más cordial bienvenida ahora que formas parte de la comunidad del Instututo Profesional de ingeniería Dr. Plilips.Una unidad asociada al Instituto Politécnico nacional(IPN). Nuestra unidad académica, en estos 26 años de existencia, ha alcanzado logros muy importantes y se ha posicionado como una de las mejores en el nivel superior y como un referente en cuanto a los programas académicos que aquí se imparten. Ser miembro de la comunidad del instututo representa un gran orgullo pero también una gran responsabilidad pues las generaciones egresadas ya desde hace veintiún años han demostrado que los egresados de nuestra casa son profesionales integrales, proactivos, líderes en su campo, éticos y responsables que saben comprometerse en todas sus actividades. Estás en una unidad académica del Instituto Politécnico Nacional en la que día a día, por medio del esfuerzo y el trabajo arduo y en un ambiente de respeto, diálogo, tolerancia y compañerismo, se forman ingenieros en Eléctrica,Electrónica,Control y automatización y en Sistemas Automotrices (en red con otras unidades del mismo IPN) así como maestros y doctores en Tecnología Avanzada capaces de generar cambios importantes y significativos para nuestro país. Deseo que tu estancia en el Istituto sea fructífera en todos los sentidos y que represente uno más de los logros académicos y personales a lo largo de tu vida. Por nuestro lado, te ofreceremos todas las herramientas para que logres tus metas y concluyas con éxito tus estudios profesionales, para que al cabo de los años, seas un orgulloso egresado del Instituto Dr. Philips y del IPN.
		 </p>
		 </h5>	 
  </div>
	  <br>
<!------------------------- CARDS--------------------------------------->
<!----------------------------------------------------------------------->
<div class="row">
  <div class="col-lg-4">
	<div class="card col-md-4 col-lg-12 bg-danger"> <img class="card-img-top" src="Images/saes.png" width="250" height="250"alt="Card image cap">
	  <div class="card-body background-color: #00AA9E">
	    <h5 class="card-title">SAES</h5>
	    <p class="card-text">Aquí podras revisar tu status y calificaciones dadas por profesores</p>
	    <a href="https://www.ipn.mx/saes/" class="btn btn-primary">INFO</a> </div>
    </div>
  </div>
  <div class="col-lg-4">
	<div class="card col-md-4 col-lg-12 bg-primary text-white"> <img class="card-img-top" src="Images/becas.png" width="250" height="250" alt="Card image cap">
	  <div class="card-body">
	    <h5 class="card-title">BECAS</h5>
	    <p class="card-text">Todo sobre los servicios ofrecidos a estudiantes y profesores dentro del plantel</p>
	    <a href="https://www.upiita.ipn.mx/estudiantes/extension-y-apoyos-educativos#pb-content-266" class="btn btn-danger">INFO</a> </div>
    </div>
  </div>
  <div class="col-lg-4">
	<div class="card col-md-4 col-lg-12 bg-danger"> <img class="card-img-top" src="Images/lb.jpg" width="250" height="250"alt="Card image cap">
	  <div class="card-body">
	    <h5 class="card-title">BIBLIOTECA</h5>
	    <p class="card-text">Recursos para estudiantes y documentos útiles</p>
	    <a href="https://www.upiita.ipn.mx/estudiantes/biblio" class="btn btn-primary">INFO</a> </div>
    </div>
  </div>
</div>
<!------------------------- END CARDS--------------------------------------->
<!----------------------------------------------------------------------->
<!------------------------- BODY--------------------------------------->
<!----------------------------------------------------------------------->	 
	  	  
	  
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