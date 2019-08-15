<?php
  require_once 'controller/traer_productos.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Mr.Persianas</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
     <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  
  <!-- Fuentes de google -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/personalized.css" rel="stylesheet">  
    <link href="css/actualiz.css" rel="stylesheet">
     <link href="css/icon.css" rel="stylesheet">

    
    
</head>
<style>
  .bs-example{
      margin: 20px;
  }
  .accordion .fa{
    font-size: 15px;
    position: absolute;
    right: 0;
    top: 35px;
    padding-right: 30px;
  }
</style>
<script>
  $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show")..onClick(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
      
      // Toggle plus minus icon on show hide of collapse element
      $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
      }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
      });
  });
</script>
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
          <li class="menu-active"><a href="#hero">Inicio</a></li>
              <li class="menu-has-children"><a href="#products">Productos</a>
            <ul>
              <li class="menu-has-children"><a href="#persianas">Persianas</a>
                <ul>
                  <li><a href="#persianas">Enrollables</a>
                    <ul>
                        <li><a href="#persianas">Black out</a></li>
                        <li><a href="#persianas">Traslucidas decorativas</a></li>
                        <li><a href="#persianas">Semistraslucidas</a></li>
                        <li><a href="#persianas">Screen</a></li>
                    </ul>
                    </li>
                  <li><a href="#persianas">Duo</a>
                        <ul>
                        <li><a href="#persianas">Blaccer traslucida</a></li>
                       </ul>
                    </li>
                  <li><a href="#persianas">Sheer elegance</a>
                     <ul>
                        <li><a href="#persianas">Black out</a></li>
                       <li><a href="#persianas">Trasluicida</a></li>
                       <li><a href="#persianas">Semi traslucida</a></li>
                       </ul>
                    </li>
                    <li><a href="#persianas">Sangri-lla</a>
                     <ul>
                        <li><a href="#persianas">Traslucida</a></li>
                       </ul>
                    </li>
                    <li><a href="#persianas">Romanas</a>
                     <ul>
                         <li><a href="#persianas">Black out</a></li>
                       <li><a href="#persianas">Trasluicida</a></li>
                       <li><a href="#persianas">Semi traslucida</a></li>
                     </ul>
                    </li>
                    <li><a href="#persianas">Madera Horizontales</a>
                    </li>
                    <li><a href="#persianas">Tela Verticales</a></li>
                    <li><a href="#persianas">Aluminio horizontales</a></li>
                </ul>
              </li>
              <li><a href="#toldos">Toldos</a>
                <ul>
                    <li><a href="#toldos">Brazos ocultos</a></li>
                    <li><a href="#toldos">Caida libre</a></li>
                    <li><a href="#toldos">Pergola</a></li>
                  </ul>
              </li>
              <li><a href="#sombrillas">Sombrillas de sol</a></li>
                <li><a href="#anticiclonicas">Anticiclonicas, Cortinas Europeas</a></li>
                <li><a href="">Otros productos</a>
             <ul> 
              <li><a href="#mallas">Malla sombra</a></li>
              <li><a href="#lonas">Papel tapiz</a></li>
              <li><a href="#tapetes">Tapetes decorativos</a></li>
             </ul>
                 </li>
            </ul>
          </li>
          <li><a href="#contact">Contacto</a>
              <ul>
                  <li><a href="#contact">Información de contactos</a></li>
                  <li><a href="#persianas">Envíanos un WhatsApp</a>
                  <ul>
                     <li><a href="https://web.whatsapp.com/send?phone=+5219981073559&amp;text=Hola, me gustaría recibir mas información." target="_blank" >¿Quieres obtener mas información?</a></li>
                     <li><a href="https://web.whatsapp.com/send?phone=+5219981073559&amp;text=Hola, me gustaría cotizar." target="_blank">¿Quieres cotizar?</a></li>
                  </ul>
                  </li>
              </ul>
            </li>
        
            <li><a href="#about">Nosotros</a></li>
          <li><a href="#products">Promociones</a></li>
           <li><a href="view/inicio_sesion.php">Login</a></li>
          </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <img src="img/logo_blanco.png" alt="Mr.Persianas"><br>
      <a href="#about" class="btn-get-started">Conocenos</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

         
    <!--==========================
      Promociones
    ============================-->
  <section id="products">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title zoom_title">PROMOCIONES</h3>
          <p class="section-description zoom">¡APROVECHA NUESTRAS PROMOCIONES!</p>
        </div>    
        <div class="row" id="products-wrapper">   
        <?php
        $resultado =array_filter($conexion->seleccionarValores($sql));
        $i = 0;
        foreach($resultado as $datos){
          $idActual = $datos['id_promocion'];
          $ImgActual = $datos['imagen_promo'];
          $fechaActual = $datos['fecha_promo'];
          $i++;
            echo <<<HTML
                <div id="promo_col" class="col-lg-6 col-md-6 products-item filter-app">
                    <a>
                      <img  id="imgs" src="view/dashboard/img/promociones/$ImgActual" alt=""  >
                    </a>
                </div>
HTML;
          }
        ?>

        </div>
      </div>
    </section>
      
    <!--==========================
      Todos los productos
    ============================-->
        
    <section id="products">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title zoom_title">Productos</h3>
          <p class="section-description zoom">Somos fabricantes de persianas, toldos, anticiclónicas, malla solar y más</p>
        </div>
        <div class="row" id="products-wrapper">
          <div class="col-lg-6 col-md-6 products-item filter-app">
            <a href="#persianas">
              <img src="img/products/persianas.jpg" alt="">
              <div class="details">
                <h4>Persianas</h4>
                <span>Enrollables dobles, traslucidad, back out</span>
              </div>
            </a>
          </div>

          <div class="col-lg-6 col-md-6 products-item filter-app">
            <a href="#toldos">
              <img src="img/products/toldoss.jpg" alt="">
              <div class="details">
                <h4>Toldos</h4>
                <span>Automatizados y Manuales</span>
              </div>
            </a>
          </div>

          
            
            <div class="col-lg-4 col-md-6 products-item filter-app">
            <a href="#sombrillas">
              <img src="img/products/sombrillas.jpg" alt="">
              <div class="details">
                <h4>Sombrillas de sol</h4>
                <span>Para exteriores grandes</span>
              </div>
            </a>
          </div>
            
                 <div class="col-lg-4 col-md-6 products-item filter-app">
            <a href="#sombrillas">
              <img src="img/products/anticiclonicas.jpg" alt="">
              <div class="details">
                <h4>Anticiclonicas</h4>
                <span>Para exteriores grandes</span>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 products-item filter-card">
            <a href="#mallas">
              <img src="img/products/mallas.jpg" alt="">
              <div class="details">
                <h4>Malla sombra</h4>
                <span>Para estacionamientos y escuelas</span>
              </div>
            </a>
          </div>

          <div class="col-lg-2}6 col-md-6 products-item filter-card">
            <a href="#lonas">
              <img src="img/products/papel.jpg" alt="">
              <div class="details">
                <h4>Papel tapiz</h4>
                <span>Papel tapiz elegante</span>
              </div>
            </a>
          </div>

          <div class="col-lg-6 col-md-6 products-item filter-web">
            <a href="#tapetes">
              <img src="img/products/tapetess.jpg" alt="">
              <div class="details">
                <h4>Tapetes decorativos</h4>
                <span>Gran variedad y alta calidad</span>
              </div>
            </a>
          </div>
            
           
        </div>

      </div>
    </section><!-- #products -->

    <!--==========================                                         ============================-->
    <!--==========================                                         ============================-->
    <!--==========================                                         ============================-->
    <!--==========================     Seccion de productos individuales   ============================-->
    <!--==========================                                         ============================-->
    <!--==========================                                         ============================-->
    <!--==========================                                         ============================-->
    
      
   <!--==========================
      persianas
    ============================-->
    <section  id="persianas">
      <div class=" container persianas-container wow fadeIn">
          
         <!--==HEADER==-->
                  <div class="section-header">
            <h3 class="section-title zoom_title">Persianas</h3>
            <p class="section-description zoom">Somos fabricantes de persianas.</p>
          </div>
                   
          
        <!--==CUERPO DE LOS BOTONES==-->
          <div class="bs-example">
              
            <div class="accordion" id="accordionExample">
                
                <!--PERSIANAS DOBLES-->  
                <div id="p-dobles"  class="card">
                    
                      <!--TITULO-->
                    <div class="card-header  boton_backgroup" id="headingTwo">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus"></i>PERSIANAS ENROLLABLES</a>
                        </h2>
                    </div>
                    
                    <!--BOTON 1-->
                    <div id="collapseTwo" class="collapse fondo_gris" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <!--SUBMENU-->
                  
                        <!--==CUERPO DE LOS BOTONES==-->
          <div class="bs-example-2">
              
            <div class="accordion" id="accordionExample2">
                
                <!--PERSIANAS DOBLES-->  
                <div id="p-dobles"  class="card">
                    
                      <!--TITULO-->
                    <div class="card-header boton_backgroup-2" id="headingTen">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseTen"><i class="fa fa-plus"></i>BLACK OUT</a>
                        </h2>
                    </div>
                    
                    <!--BOTON 1-->
                    <div id="collapseTen" class="collapse fondo_gris" aria-labelledby="headingTen" data-parent="#accordionExample2">
               
                      
                     
                        <div class="container" >
                        <div class="row ">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_k));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img class="img" src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                    
                </div>
                
                
                
                
                
                
                
                <!--PERSIANAS DUO-->
                <div  class="card">
                    <div id="p-traslucidas" class="card-header boton_backgroup-2" id="headingEleven">
                        <h2 class="mb-2 ">
                            <a class="btn btn-lig btn-block text-lg-left" data-toggle="collapse" data-target="#collapseEleven"><i class="fa fa-plus"></i>SEMITRASLUCIDAS</a>						
                        </h2>
                    </div>
                       <div id="collapseEleven" class="collapse" aria-labelledby="headingEleven" data-parent="#accordionExample2">
                       
                                                  
                    <!--PERSIANAS BLACK OUT LLAMADA DE IMAGENES-->
                    
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_enrollables_semi));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img" src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                    
        
                 <!--PERSIANAS BLACK OUT LLAMADA DE IMAGENES-->  
                
                       </div>
                </div>
                
                <!--PERSIANAS BLACKOUT-->
                <div  class="card">
                    <div id="p-black" class="card-header boton_backgroup-2" id="headingthirteen">
                        <h2 class="mb-2">
                            <a class="btn btn-lig btn-block text-lg-left " data-toggle="collapse" data-target="#collapseThirteen"><i class="fa fa-plus"></i>TRASLUCIDAS</a>                     
                        </h2>
                    </div>
                    <div id="collapseThirteen" class="collapse" aria-labelledby="headingThirteen" data-parent="#accordionExample2">
                       
              
                      
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_enrollables_tras));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img"  src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
               
                        </div>
                    
                </div>
                        
                 <!--PERSIANAS BLACK OUT LLAMADA DE IMAGENES-->  
                        
                    </div>
                </div>
                    
                    
                         <!--PERSIANAS BLACKOUT-->
                <div  class="card">
                    <div id="p-black" class="card-header boton_backgroup-2" id="headingFourteen">
                        <h2 class="mb-2">
                            <a class="btn btn-lig btn-block text-lg-left " data-toggle="collapse" data-target="#collapseFourteen"><i class="fa fa-plus"></i>SCREEN</a>                     
                        </h2>
                    </div>
                    <div id="collapseFourteen" class="collapse" aria-labelledby="headingFourteen" data-parent="#accordionExample2">
                       
                 
                      
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_enrollables_screen));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img" src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                
                        </div>
                    
                </div>
                        
                 <!--PERSIANAS BLACK OUT LLAMADA DE IMAGENES-->  
                        
                    </div>
                </div>
                
                
            </div>
        </div>
                        
                        
                        
                        
                        <!--SUBMENU-->
                        
                        
                        
                    </div>
                    
                </div>
                
                </div>
                
                
                
                
                
                <!--PERSIANAS DUO-->
                <div  class="card">
                    <div id="p-traslucidas" class="card-header boton_backgroup" id="headingOne">
                        <h2 class="mb-2 ">
                            <a class="btn btn-lig btn-block text-lg-left" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i>PERSIANAS DUO</a>						
                        </h2>
                    </div>
                       <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                       
                                      <!--==CUERPO DE LOS BOTONES==-->
          <div class="bs-example-3">
              
            <div class="accordion" id="accordionExample3">
                
                <!--PERSIANAS DOBLES-->  
                <div id="p-dobles"  class="card">
                    
                      <!--TITULO-->
                    <div class=" card-header  boton_backgroup-2" id="headingFiveteen">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseFiveteen"><i class="fa fa-plus"></i>BLACK OUT</a>
                        </h2>
                    </div>
                    
                    <!--BOTON 1-->
                    <div id="collapseFiveteen" class="collapse fondo_gris" aria-labelledby="headingFiveteen" data-parent="#accordionExample3">
               
                      
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_duo));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img" src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                    
                </div>
  
                
                
            </div>
        </div>
                        
                        
                        
                        
                 
                        
                        
                    </div>
                           
                           
                           
                           
                       </div>
                </div>
                
                <!--PERSIANAS BLACKOUT-->
                <div  class="card">
                    <div id="p-black" class="card-header boton_backgroup" id="headingThree">
                        <h2 class="mb-2">
                            <a class="btn btn-lig btn-block text-lg-left " data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-plus"></i>PERSIANAS SHEER ELEGANCE</a>                     
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        
               
                                        <!--==CUERPO DE LOS BOTONES==-->
          <div class="bs-example-4">
              
            <div class="accordion" id="accordionExample4">
                
                <!--PERSIANAS DOBLES-->  
                <div id="p-dobles"  class="card">
                    
           <!--TITULO-->
                    <div class=" card-header  boton_backgroup-2" id="headingF">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseF"><i class="fa fa-plus"></i>BLACK OUT</a>
                        </h2>
                    </div>
                    
                    <!--BOTON 1-->
                    <div id="collapseF" class="collapse fondo_gris" aria-labelledby="headingF" data-parent="#accordionExample4">
               
                      
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores( $sql_persianas_sheer_black));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img" src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                    
                </div>
  
                
                
                
                
                
                
                
                <!--PERSIANAS DUO-->
                <div  class="card">
                    <!--TITULO-->
                    <div class=" card-header  boton_backgroup-2" id="headingFi">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseFi"><i class="fa fa-plus"></i>SEMITRASLUCIDAS</a>
                        </h2>
                    </div>
                    
                    <!--BOTON 1-->
                    <div id="collapseFi" class="collapse fondo_gris" aria-labelledby="headingFi" data-parent="#accordionExample4">
               
                      
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_sheer_semi));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img" src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                    
                </div>
                        </div>
                    
        
                 <!--PERSIANAS BLACK OUT LLAMADA DE IMAGENES-->  
                
                       </div>
                </div>
                
                <!--PERSIANAS BLACKOUT-->
                <div  class="card">
                      <!--TITULO-->
                    <div class=" card-header  boton_backgroup-2" id="headingFo">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseFo"><i class="fa fa-plus"></i>TRASLUCIDAS</a>
                        </h2>
                    </div>
                    
                    <!--BOTON 1-->
                    <div id="collapseFo" class="collapse fondo_gris" aria-labelledby="headingFo" data-parent="#accordionExample4">
               
                      
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_sheer_tras));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img"  src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                    
                </div>
                    
                    
           
                
                
            </div>
        </div>
                        
                        
                        
                        
                        <!--SUBMENU-->
                        
                        
                        
                    </div>
                    
                        
                       
                    </div>
                
                
                
                
                
                  <!--PERSIANAS DUO-->
                <div  class="card">
                    <div id="p-traslucidas" class="card-header boton_backgroup" id="headingSHAN">
                        <h2 class="mb-2 ">
                            <a class="btn btn-lig btn-block text-lg-left" data-toggle="collapse" data-target="#collapseSHAN"><i class="fa fa-plus"></i>PERSIANAS SHANGRI-LLA</a>						
                        </h2>
                    </div>
                       <div id="collapseSHAN" class="collapse" aria-labelledby="headingSHAN" data-parent="#accordionExample">
                       
                                      <!--==CUERPO DE LOS BOTONES==-->
          <div class="bs-example-3">
              
            <div class="accordion" id="accordionExample3">
                
                <!--PERSIANAS DOBLES-->  
                <div id="p-dobles"  class="card">
                    
                      <!--TITULO-->
                    <div class=" card-header  boton_backgroup-2" id="headingFe">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseFe"><i class="fa fa-plus"></i>TRASLUCIDAS</a>
                        </h2>
                    </div>
                    
                    <!--BOTON 1-->
                    <div id="collapseFe" class="collapse fondo_gris" aria-labelledby="headingFe" data-parent="#accordionExample3">
               
                      
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_shangrila));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item  div-img">
                                        <img  class="img" src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                    
                </div>
  
                
                
            </div>
        </div>
                        
                        
                        
                        
                        <!--SUBMENU-->
                        
                        
                        
                    </div>
                           
                           
                           
                           
                       </div>
                </div>
                
                
                
                
                  <!--PERSIANAS BLACKOUT-->
                <div  class="card">
                    <div id="p-black" class="card-header boton_backgroup" id="headingROMA">
                        <h2 class="mb-2">
                            <a class="btn btn-lig btn-block text-lg-left " data-toggle="collapse" data-target="#collapseROMA"><i class="fa fa-plus"></i>PERSIANAS ROMANAS</a>                     
                        </h2>
                    </div>
                    <div id="collapseROMA" class="collapse" aria-labelledby="headingROMA" data-parent="#accordionExample">
                        
               
                                        <!--==CUERPO DE LOS BOTONES==-->
          <div class="bs-example-4">
              
            <div class="accordion" id="accordionExample4">
                
                <!--PERSIANAS DOBLES-->  
                <div id="p-dobles"  class="card">
                    
           <!--TITULO-->
                    <div class=" card-header  boton_backgroup-2" id="headingFeee">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseFeee"><i class="fa fa-plus"></i>BLACK OUT</a>
                        </h2>
                    </div>
                    
                    <!--BOTON 1-->
                    <div id="collapseFeee" class="collapse fondo_gris" aria-labelledby="headingFeee" data-parent="#accordionExample4">
               
                      
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_romana_black));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img" src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                    
                </div>
  
                
                
                
                
                
                
                
                <!--PERSIANAS DUO-->
                <div  class="card">
                    <!--TITULO-->
                    <div class=" card-header  boton_backgroup-2" id="headingFio">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseFio"><i class="fa fa-plus"></i>TRASLUCIDA</a>
                        </h2>
                    </div>
                    
                    <!--BOTON 1-->
                    <div id="collapseFio" class="collapse fondo_gris" aria-labelledby="headingFio" data-parent="#accordionExample4">
               
                      
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_romana_tras));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img" src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                    
                </div>
                        </div>
                    
        
                 <!--PERSIANAS BLACK OUT LLAMADA DE IMAGENES-->  
                
                       </div>
                </div>
                
                <!--PERSIANAS BLACKOUT-->
                <div  class="card">
                      <!--TITULO-->
                    <div class=" card-header  boton_backgroup-2" id="headingFoo">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseFoo"><i class="fa fa-plus"></i>SEMITRASLUCIDA</a>
                        </h2>
                    </div>
                    
                    <!--BOTON 1-->
                    <div id="collapseFoo" class="collapse fondo_gris" aria-labelledby="headingFoo" data-parent="#accordionExample4">
               
                      
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_romana_semi));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img" src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                    
                </div>
                    
                    
           
                
                
            </div>
        </div>
                        
                        
                        
                        
                        <!--SUBMENU-->
                        
                        
                        
                    </div>
                    
                        
                       
                    </div>
                
                
                
                    <!--PERSIANAS DUO-->
                <div  class="card">
                    <div id="p-traslucidas" class="card-header boton_backgroup" id="headingALU">
                        <h2 class="mb-2 ">
                            <a class="btn btn-lig btn-block text-lg-left" data-toggle="collapse" data-target="#collapseALU"><i class="fa fa-plus"></i>ALUMINIO</a>						
                        </h2>
                    </div>
                       <div id="collapseALU" class="collapse" aria-labelledby="headingALU" data-parent="#accordionExample">
                       
                                      <!--==CUERPO DE LOS BOTONES==-->
          <div class="bs-example-3">
              
            <div class="accordion" id="accordionExample3">
                
                <!--PERSIANAS DOBLES-->  
                <div id="p-dobles"  class="card">
                    
                      <!--TITULO-->
                    <div class=" card-header  boton_backgroup-2" id="headingFeQ">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseFeQ"><i class="fa fa-plus"></i>VERTICALES ALUMINIO</a>
                        </h2>
                    </div>
                    
                    <!--BOTON 1-->
                    <div id="collapseFeQ" class="collapse fondo_gris" aria-labelledby="headingFeQ" data-parent="#accordionExample3">
               
                      
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_aluminio));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img" src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                    
                </div>
  
                
                
            </div>
        </div>
                        
                        
                        
                        
                        <!--SUBMENU-->
                        
                        
                        
                    </div>
                           
                           
                           
                           
                       </div>
                </div>
                
                
                
                    <!--PERSIANAS DUO-->
                <div  class="card">
                    <div id="p-traslucidas" class="card-header boton_backgroup" id="headingHOR">
                        <h2 class="mb-2 ">
                            <a class="btn btn-lig btn-block text-lg-left" data-toggle="collapse" data-target="#collapseHOR"><i class="fa fa-plus"></i>HORIZONTALES</a>						
                        </h2>
                    </div>
                       <div id="collapseHOR" class="collapse" aria-labelledby="headingHOR" data-parent="#accordionExample">
                       
                                      <!--==CUERPO DE LOS BOTONES==-->
          <div class="bs-example-3">
              
            <div class="accordion" id="accordionExample3">
                
                <!--PERSIANAS DOBLES-->  
                <div id="p-dobles"  class="card">
                    
                      <!--TITULO-->
                    <div class=" card-header  boton_backgroup-2" id="headingFeR">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseFeR"><i class="fa fa-plus"></i>MADERA</a>
                        </h2>
                    </div>
                    
                    <!--BOTON 1-->
                    <div id="collapseFeR" class="collapse fondo_gris" aria-labelledby="headingFeR" data-parent="#accordionExample3">
               
                      
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_horizontal_madera));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img" src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                    
                </div>
  
                
                
            </div>
        </div>
                        
                        
                        
                        
                        <!--SUBMENU-->
                        
                        
                        
                    </div>
                           
                           
                           
                           
                       </div>
                </div>
                
                
                
                    <!--PERSIANAS DUO-->
                <div  class="card">
                    <div id="p-traslucidas" class="card-header boton_backgroup" id="headingVER">
                        <h2 class="mb-2 ">
                            <a class="btn btn-lig btn-block text-lg-left" data-toggle="collapse" data-target="#collapseVER"><i class="fa fa-plus"></i>VERTICALES</a>						
                        </h2>
                    </div>
                       <div id="collapseVER" class="collapse" aria-labelledby="headingVER" data-parent="#accordionExample">
                       
                                      <!--==CUERPO DE LOS BOTONES==-->
          <div class="bs-example-3">
              
            <div class="accordion" id="accordionExample3">
                
                <!--PERSIANAS DOBLES-->  
                <div id="p-dobles"  class="card">
                    
                      <!--TITULO-->
                    <div class=" card-header  boton_backgroup-2" id="headingFeA">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseFeA"><i class="fa fa-plus"></i>TELA</a>
                        </h2>
                    </div>
                    
                    <!--BOTON 1-->
                    <div id="collapseFeA" class="collapse fondo_gris" aria-labelledby="headingFeA" data-parent="#accordionExample3">
               
                      
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_vertical_tela));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img" src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                    
                </div>
  
                
                
            </div>
        </div>
                        
                        
                        
                        
                        <!--SUBMENU-->
                        
                        
                        
                    </div>
                           
                           
                           
                           
                       </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                </div>
                
                
            </div>
        </div>
        
    
      
    </section><!-- #facts -->
      
    <!--==========================
      toldos
    ============================-->
    <section id="toldos">
      <div class="container persianas-container wow fadeIn">
          <div class="section-header">
            <h3 class="section-title zoom_title">TOLDOS</h3>
            <p class="section-description zoom">Contamos con toldos manuales o automatizados.</p>
          </div>
          <div class="bs-example">
            <div class=" accordion" id="accordionExample">
                
                <!--TOLDOS AUTOMATIZADOS-->  
                <div   class="card">
                    <div id="t-auto" class="card-header boton_backgroup" id="headingTwo">
                        <h2 id="div-auto" class=" mb-2">
                            <a  class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseFour">BRAZOS OCULTOS<i class="fa fa-plus"></i> </a>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                           
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_toldos_brazos));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img" src="view/dashboard/img/productos/toldos/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                           
                    </div>
                </div>
                
               
                
                 <!--MANUALES-->  
                <div  class="card">
                    <div id="t-manu" class="card-header boton_backgroup" id="headingTwo">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseFive">CAIDA LIBRE <i class="fa fa-plus"></i></a>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        
                        
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_toldos_caida));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img" src="view/dashboard/img/productos/toldos/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                           
                        
                    </div>
                </div>
                
                
                      <!--MANUALES-->  
                <div  class="card">
                    <div id="t-manu" class="card-header boton_backgroup" id="headingSix">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseSix">TIPO PERGOLA <i class="fa fa-plus"></i></a>
                        </h2>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                        
                        
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_toldos_pergolio));
                            $i = 0;
                            foreach($resultado as $datos){
                              $idActual = $datos['id_producto'];
                              $ImgActual = $datos['imagen_produ'];
                              $fechaActual = $datos['fecha_produ'];
                              $tipoActual = $datos['tipo_produ'];
                              $i++;
                                echo <<<HTML
                        <!--AREA DE TEXTO--> 
                              <div class="col-lg-6 col-md-6 card-body">     
                                <div class="item div-img">
                                        <img  class="img" src="view/dashboard/img/productos/toldos/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                           
                        
                    </div>
                </div>
                
                
            </div>
        </div>
        
      </div>
      
    </section><!-- #facts -->

     
     <!--==========================
      Sombrillas de sol
    ============================-->
    
      <section class="productos" id="sombrillas">
          <div class="section-header">
            <h3 class="section-title zoom_title">SOMBRILLAS DE SOL</h3>
            <p class="section-description ">Elige entre una gran variedad de sombrillas (encuentra sombrillas para jardín) con las que contamos y aprovecha todos sus grandes beneficios para la protección solar..</p>
          </div>
    <div class="container persianas-container wow fadeIn">      
      <div class="bs-example">
            <div class=" accordion" id="accordionExample">
                
                <!--TOLDOS AUTOMATIZADOS-->  
                <div   class="card">
                    <div id="t-auto" class="card-header boton_backgroup" id="headingsombrilla">
                        <h2 id="div-auto" class=" mb-2">
                            <a  class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseSom">SOMBRILLAS<i class="fa fa-plus"></i> </a>
                        </h2>
                    </div>
                    <div id="collapseSom" class="collapse" aria-labelledby="headingSom" data-parent="#accordionExample">
                           
                        <div class="container">
                        <div class="row">    
                        <?php
              $resultado =array_filter($conexion->seleccionarValores($sql_sombrilla));
              $i = 0;
              foreach($resultado as $datos){
                $idActual = $datos['id_producto'];
                $ImgActual = $datos['imagen_produ'];
                $fechaActual = $datos['fecha_produ'];
                $i++;
            echo <<<HTML
            <div id="col_products" class="col-lg-6 col-md-6 card-body">     
                           
                           <div class="item div-img">
                                   <img  class="img" src="view/dashboard/img/productos/sombrillas_sol/$ImgActual" alt="" style="width:100%;height: 400px;" >
                                 </div>
              </div>
HTML;
          }
        ?>    
                    </div>
                        </div>
                           
                    </div>
                </div>
                
               
       
                
            </div>
        </div>
          </div>
      </section>
       
     <!--==========================
      Mallas de sombra
    ============================-->
   
      <section class="productos" id="mallas">
          <div class="section-header">
            <h3 class="section-title zoom_title">MALLAS DE SOMBRA</h3>
            <p class="section-description zoom">Mallas sombra para estacionamiento o escuelas.</p>
          </div>
  <div class="container persianas-container wow fadeIn">      
      <div class="bs-example">
            <div class=" accordion" id="accordionExample">
                
                <!--TOLDOS AUTOMATIZADOS-->  
                <div   class="card">
                    <div id="t-auto" class="card-header boton_backgroup" id="headingsombrilla">
                        <h2 id="div-auto" class=" mb-2">
                            <a  class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseMal">MALLAS DE SOMBRA<i class="fa fa-plus"></i> </a>
                        </h2>
                    </div>
                    <div id="collapseMal" class="collapse" aria-labelledby="headingMal" data-parent="#accordionExample">
                           
                        <div class="container">
                        <div class="row">    
               <?php
              $resultado =array_filter($conexion->seleccionarValores($sql_mallas));
              $i = 0;
              foreach($resultado as $datos){
                $idActual = $datos['id_producto'];
                $ImgActual = $datos['imagen_produ'];
                $fechaActual = $datos['fecha_produ'];
                $i++;
            echo <<<HTML
            <div id="col_products" class="col-lg-6 col-md-6 card-body">     
                           
                           <div class="item div-img">
                                   <img  class="img" src="view/dashboard/img/productos/mallas_sombra/$ImgActual" alt="" style="width:100%;height: 400px;">
                                 </div>
              </div>
HTML;
          }
        ?>    
                    </div>
                        </div>
                           
                    </div>
                </div>
                
               
       
                
            </div>
        </div>
          </div>
      </section>
        
       <!--==========================
     Lonas de uso rudo y papel tapiz
    ============================-->
  
      
      <section class="productos" id="lonas">
          <div class="section-header">
            <h3 class="section-title zoom_title">PAPEL TAPIZ</h3>
            <p class="section-description zoom">Elija entre la gran variedad de papel tapiz que tenemos para usted.</p>
          </div>
          
  <div class="container persianas-container wow fadeIn">      
      <div class="bs-example">
            <div class=" accordion" id="accordionExample">
                
                <!--TOLDOS AUTOMATIZADOS-->  
                <div   class="card">
                    <div id="t-auto" class="card-header boton_backgroup" id="headingsombrilla">
                        <h2 id="div-auto" class=" mb-2">
                            <a  class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapsePap">PAPEL TAPIZ<i class="fa fa-plus"></i> </a>
                        </h2>
                    </div>
                    <div id="collapsePap" class="collapse" aria-labelledby="headingPap" data-parent="#accordionExample">
                           
                        <div class="container">
                        <div class="row">    
             <?php
              $resultado =array_filter($conexion->seleccionarValores($sql_lonas));
              $i = 0;
              foreach($resultado as $datos){
                $idActual = $datos['id_producto'];
                $ImgActual = $datos['imagen_produ'];
                $fechaActual = $datos['fecha_produ'];
                $i++;
            echo <<<HTML
            <div id="col_products" class="col-lg-6   col-md-6 card-body">     
                           
                           <div class="item div-img">
                                   <img  class="img" src="view/dashboard/img/productos/lonas_tapiz/$ImgActual" alt="" style="width:100%;height: 400px;">
                                 </div>
              </div>
HTML;
          }
        ?>       
                    </div>
                        </div>
                           
                    </div>
                </div>
                
               
       
                
            </div>
        </div>
          </div>
      </section>
        <!--==========================
    Tapetes decorativos
    ============================-->
   
    <section class="productos" id="tapetes">
          <div class="section-header">
            <h3 class="section-title zoom_title">TAPETES DECORATIVOS</h3>
            <p class="section-description zoom">tapetes en alfombra o típo modular.</p>
          </div>
          
      <div class="container persianas-container wow fadeIn">      
      <div class="bs-example">
            <div class=" accordion" id="accordionExample">
                
                <!--TOLDOS AUTOMATIZADOS-->  
                <div   class="card">
                    <div id="t-auto" class="card-header boton_backgroup" id="headingsombrilla">
                        <h2 id="div-auto" class=" mb-2">
                            <a  class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseTap">TAPETES DECORATIVOS<i class="fa fa-plus"></i> </a>
                        </h2>
                    </div>
                    <div id="collapseTap" class="collapse" aria-labelledby="headingTap" data-parent="#accordionExample">
                           
                        <div class="container">
                        <div class="row">    
      
        <?php
              $resultado =array_filter($conexion->seleccionarValores($sql_tapetes));
              $i = 0;
              foreach($resultado as $datos){
                $idActual = $datos['id_producto'];
                $ImgActual = $datos['imagen_produ'];
                $fechaActual = $datos['fecha_produ'];
                $i++;
            echo <<<HTML
            <div id="col_products" class="col-lg-6   col-md-6 card-body">     
                           
                           <div class="item div-img">
                                   <img  class="img" src="view/dashboard/img/productos/tapetes/$ImgActual" alt="" style="width:100%;height: 400px;">
                                 </div>
              </div>
HTML;
          }
        ?>   
                    </div>
                        </div>
                           
                    </div>
                </div>
                
               
       
                
            </div>
        </div>
          </div>
      </section>
        <!--==========================
    Anticiclonicas
    ============================-->
      
         <section class="productos" id="anticiclonicas">
          <div class="section-header">
            <h3 class="section-title zoom_title">ANTICICLONICAS</h3>
            <p class="section-description zoom">Tipo europea.</p>
          </div>
   <div class="container persianas-container wow fadeIn">      
      <div class="bs-example">
            <div class=" accordion" id="accordionExample">
                
                <!--TOLDOS AUTOMATIZADOS-->  
                <div   class="card">
                    <div id="t-auto" class="card-header boton_backgroup" id="headingsombrilla">
                        <h2 id="div-auto" class=" mb-2">
                            <a  class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseAnt">ANTICICLONICAS EUROPEAS<i class="fa fa-plus"></i> </a>
                        </h2>
                    </div>
                    <div id="collapseAnt" class="collapse" aria-labelledby="headingAnt" data-parent="#accordionExample">
                           
                        <div class="container">
                        <div class="row">    
       <?php
              $resultado =array_filter($conexion->seleccionarValores($sql_mallas_anticiclonicas));
              $i = 0;
              foreach($resultado as $datos){
                $idActual = $datos['id_producto'];
                $ImgActual = $datos['imagen_produ'];
                $fechaActual = $datos['fecha_produ'];
                $i++;
            echo <<<HTML
            <div id="col_products" class="col-lg-6   col-md-6 card-body">     
                           
                           <div class="item div-img">
                                   <img  class="img" src="view/dashboard/img/productos/mallas_anticiclonicas/$ImgActual" alt="" style="width:100%;height: 400px;">
                                 </div>
              </div>
HTML;
          }
        ?>     
                    </div>
                        </div>
                           
                    </div>
                </div>
                
               
       
                
            </div>
        </div>
          </div>   
      </section>
       
      
      
      
      
      
      
      
      
      
     <!--==========================
      Seccion acerca de la empresa
    ============================-->
    <section id="about" >
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">PRIVACIDAD Y ESTILO QUE VAN DE LA MANO</h2>
            <p>Todos nuestros productos se fabrican de acuerdo a la necesidad de cada cliente y  son de excelente calidad con precios altamente competitivos.</p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><p>LINEA DE PERSIANAS CLASICA, ELEGANCE Y PREMIUM:</p></h4>
              <p class="description">Contamos con asesoría personalizada en interiorismo para brindarle la mejor opción en la selección correcta de sus PERSIANAS.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-pencil"></i></div>
              <h4 class="title"><p>FORMAS DE PAGO:</p></h4>
              <p class="description">Aceptamos todas las tarjetas de débito o crédito Visa, MasterCard y American Epress, contamos con meses sin intereses.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-check" aria-hidden="true"></i></div>
              <h4 class="title"><p>NUESTROS PRODUCTOS SE FABRICAN A LA MEDIDA:</p></h4>
              <p class="description">Una vez que nuestro cliente selecciona el modelo de persiana, telas, texturas y tonos, casi de forma artesanal fabricamos sus persianas a la medida requerida, ya que nuestro tiempo de fabricación es muy rápido.</p>
              
            <a type="button" id="btn-conocenos" href="#products" class="btn btn-warning">Conoce Nuestros Productos</a>
            </div>
          </div>
                      <div class="col-lg-1 order-lg-2 order-1 wow fadeInRight"> </div>
          <div class="col-lg-5 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section>  
    
      
      
      
      
      
      
      
      
      
      
      
      
    <!--==========================
    Call To Action Section
    ============================-->
    <section id="measure">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-3 ">
              <img  class="img" src="img/medidor.png" alt="" style="width:100%;height: 400px;">
          </div>
          <div class="col-lg-4 text-center text-lg-left">
            <h3 class="cta-title">Como tomar medidas</h3>
            <p class="cta-text">Tomar medidas para colocar persianas puede ser un poco abrumador, pero en realidad es bastante directo y sencillo.</p>
          </div>
          <div class="col-lg-5 text-center">
            <iframe width="500" height="330" src="https://www.youtube.com/embed/p0632Oert0s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>

      </div>
    </section><!-- #measure -->


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contactanos</h3>
          <p class="section-description">Envianos un correo o llamanos. Cotiza con nosotros o soluciona tus dudas.</p>
        </div>
      </div>


      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info icon_naranja">
             
              <div>
                <a href="mailto:ventas@mrpersianas.com.mx?&subject=Solicitud de información&body=Hola, quisiera solicitar mas información"> <i class="fa fa-envelope icon_naranja"></i>
                <p>ventas@mrpersianas.com.mx</p></a>  
              </div>
              
              <div>
                <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=ventasmrpersinas@gmail.com&subjectbox=Solicitud de información&body=Hola,%20Quisiera%20solicitar%20información" target="_blank"><i class="fa fa-envelope icon_naranja"></i>
                <p>ventasmrpersinas@gmail.com</p></a>
              </div>

              <div>
                <a href="tel:+529983326326" class="link"><i class="fa fa-phone icon_naranja"></i>
                <p>998 107 35 59</p></a>
              </div>
            </div>


            <div class="social-links">
           <div class="icon_facebook"> <a title="Siguenos en nuestra pagina de Facebook" href="https://www.facebook.com/mrpersianas2015/?ref=br_rs" target="_blank"><i  class="fa fa-facebook "></i></a> Facebook<br><br></div>
                
                <div class="icon_whatsapp"><a title="Contactanos por WhatsApp" href="https://web.whatsapp.com/send?phone=+5219981073559&amp;text=Hola, me gustaría recibir mas información." target="_blank" ><i class="fa fa-whatsapp"></i></a> WhatsApp<br><br></div>
                <div class="icon_youtube"><a title="Siguenos en nuestro canal de YouTube" href="https://www.youtube.com/channel/UC2bYdc7SPkVW8lC2XFiry1w" target="_blank" ><i class="fa fa-youtube"></i></a> Youtube<br><br></div>
                <div class="icon_instagram"><a title="Siguenos en Instagram" href="https://www.instagram.com/mr.persianas/?hl=es-la" target="_blank" ><i class="fa fa-instagram"></i></a> Instagram <br><br></div>
                <div class="icon_twitter"><a title="Siguenos en Twitter" href="https://twitter.com/MrPersianas" target="_blank" ><i class="fa fa-twitter"></i></a> Twitter </div>
            </div>

          </div>

         <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Su mensaje ha sido enviado. ¿Gracias!</div>
              <div id="errormessage"></div>
              <form action="enviar_correo.php" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Escribe almenos 4 letras." />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo" data-rule="email" data-msg="Escribe un correo valido." />
                  <div class="validation"></div>
                </div>
                <div class="form-group">    
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Motivo" data-rule="minlen:4" data-msg="Escribe almenos 8 letras." />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Porfavor escribe un mensaje." placeholder="¿En que podemos ayudarle?"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Enviar mensaje</button></div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #contact -->

  </main>

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
       <strong>Monkey.exe</strong>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>


  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
    

</body>
</html>
