<?php
	require_once '../config/conexion.php';
	$conexion= new Conexion(); 
	require_once '../controller/login.php';
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login | Mr.Persianas</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
     <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  
  <!-- Fuentes de google -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/personalized.css" rel="stylesheet">
    
</head>
<body>

 <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a style="color: #f09732;" id="titulop" href="#hero"> <h1> <sup>Mr.</sup>Persianas </h1> </a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="inicio_sesion.php">Login</a></li>
          <li><a href="../">Inicio</a></li>
          </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
	<div class="row">
          <div class="col-lg-10 mx-auto">
            <br>
            <h1 class="text-uppercase">
              <strong>INICIO DE SESIÓN</strong>
            </h1>
          </div>
          <div class="container">    
            <div style="margin:auto" id="loginbox" style="margin-top:50px;" class="mainbox col-md-8 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div style="" style="margin:auto" class="panel panel-info" >
              <div  class="panel-heading">
                <div style="padding-top:30px" class="panel-body" >
                         
                  <form method="POST" name="frmlogin"  action="<?php $_SERVER['PHP_SELF']; ?>" id="loginform" class="form-horizontal" role="form">   
                                      
                    <div style="margin-bottom: 25px" class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                      <input id="usuario" type="text" name="usuario" class="form-control" placeholder="Usuario" required>
                                                                                
                    </div>
                                  
                    <div style="margin-bottom: 25px" class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                      <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                    </div>

                   <div style="margin-top:10px" class="form-group">
                        <button   href="#" class="btn btn-block btn-success">Iniciar  </button>
                    </div>                                     
                  </form>
                </div>
              </div>
            </div>
          </div>   
         </div> 
        </div>
    </div>
  </section><!-- #hero -->

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
     
  
      <div class="copyright">
        &copy; Copyright <strong>Monkey.exe</strong>. Todos los derechos reservados.
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/jquery/jquery-migrate.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../lib/easing/easing.min.js"></script>
  <script src="../lib/wow/wow.min.js"></script>
  <script src="../lib/waypoints/waypoints.min.js"></script>
  <script src="../lib/counterup/counterup.min.js"></script>
  <script src="../lib/superfish/hoverIntent.js"></script>
  <script src="../lib/superfish/superfish.min.js"></script>


  <!-- Contact Form JavaScript File -->
  <script src="../contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="../js/main.js"></script>
    

</body>
</html>
