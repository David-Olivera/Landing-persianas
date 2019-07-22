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
          <li><a href="#contact">Contacto</a>
              <ul>
                  <li><a href="#contact">Informacion de contactos</a></li>
                  <li><a href="#persianas">Envianos un WhatsApp</a>
                  <ul>
                     <li><a href="https://web.whatsapp.com/send?phone=+5219981073559&amp;text=Hola, me gustaría recibir mas información." target="_blank" >¿Quieres obtener mas información?</a></li>
                     <li><a href="https://web.whatsapp.com/send?phone=+5219981073559&amp;text=Hola, me gustaría cotizar." target="_blank">¿Quieres cotizar?</a></li>
                  </ul>
                  </li>
              </ul>
            </li>
        
            <li><a href="#about">Nosotros</a></li>
          <li><a href="#products">Promociones</a></li>
          <li class="menu-has-children"><a href="#products">Productos</a>
            <ul>
              <li class="menu-has-children"><a href="#persianas">Persianas</a>
                <ul>
                  <li><a href="#persianas">Enrollables dobles</a></li>
                  <li><a href="#persianas">Enrollables traslucidas</a></li>
                  <li><a href="#persianas">Enrollables black out</a></li>
                </ul>
              </li>
              <li><a href="#toldos">Toldos</a>
                <ul>
                    <li><a href="#toldos">Automatizados</a></li>
                    <li><a href="#toldos">Manuales</a></li>
                  </ul>
              </li>
              <li><a href="#sombrillas">Sombrillas de sol</a></li>
              <li><a href="#mallas">Malla sombra</a></li>
              <li><a href="#lonas">Lonas de uso rudo y Papel tapiz</a></li>
              <li><a href="#tapetes">Tapetes decorativos</a></li>
            </ul>
          </li>
          <li><a href="#measure">Como tomar medidas</a></li>
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
          <h3 class="section-title">PROMOCIONES</h3>
          <p class="section-description">¡APROVECHA NUESTRAS PROMOCIONES!</p>
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
          <h3 class="section-title">Productos</h3>
          <p class="section-description">Somos fabricantes de persianas, toldos, anticiclónicas, malla solar y más</p>
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
              <img src="img/products/toldos.jpg" alt="">
              <div class="details">
                <h4>Toldos</h4>
                <span>Automatizados y Manuales</span>
              </div>
            </a>
          </div>

          
            
            <div class="col-lg-3 col-md-6 products-item filter-app">
            <a href="#sombrillas">
              <img src="img/products/sombrilla.jpg" alt="">
              <div class="details">
                <h4>Sombrillas de sol</h4>
                <span>Para exteriores grandes</span>
              </div>
            </a>
          </div>
            
                 <div class="col-lg-2 col-md-6 products-item filter-app">
            <a href="#sombrillas">
              <img src="img/products/sombrilla.jpg" alt="">
              <div class="details">
                <h4>Anticiclonicas</h4>
                <span>Para exteriores grandes</span>
              </div>
            </a>
          </div>

          <div class="col-lg-2 col-md-6 products-item filter-card">
            <a href="#mallas">
              <img src="img/products/malla.jpg" alt="">
              <div class="details">
                <h4>Malla sombra</h4>
                <span>Para estacionamientos y escuelas</span>
              </div>
            </a>
          </div>

          <div class="col-lg-2 col-md-6 products-item filter-card">
            <a href="#lonas">
              <img src="img/products/lonas.jpg" alt="">
              <div class="details">
                <h4>Lonas de uso rudo y Papel tapiz</h4>
                <span>Papel tapiz elegante y Lonas de uso rudo</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 products-item filter-web">
            <a href="#tapetes">
              <img src="img/products/tapetes.png" alt="">
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
            <h3 class="section-title">Persianas</h3>
            <p class="section-description">Somos fabricantes de persianas.</p>
          </div>
                   
          
        <!--==CUERPO DE LOS BOTONES==-->
          <div class="bs-example">
              
            <div class=" accordion" id="accordionExample">
                
                <!--PERSIANAS DOBLES-->  
                <div id="p-dobles"  class="card">
                    
                      <!--TITULO-->
                    <div class="card-header  boton_backgroup" id="headingTwo">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus"></i>PERSIANAS ENROLLABLES DOBLES</a>
                        </h2>
                    </div>
                    
                    <!--BOTON 1-->
                    <div id="collapseTwo" class="collapse fondo_gris" aria-labelledby="headingTwo" data-parent="#accordionExample">
                       
                      <!---->  
                        
                        <p>
                          <button class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Percinanas  1</button>
                          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">persianas 2</button>
                          <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">persianas 3</button>
                        </p>
                     
                        <div class="row">
                          <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                              <div class="card card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample2">
                              <div class="card card-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                              </div>
                            </div>
                          </div>
                        </div>
                    
                      <!---->
                        
                        
                        
                        
                        
                        
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_dobles));
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
                                <div class="item">
                                        <img  src="view/dashboard/img/productos/persianas/$ImgActual" alt="$tipoActual" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                    </div>
             </div>
                
                <!--PERSIANAS TRASLUCIDAS-->
                <div  class="card">
                    <div id="p-traslucidas" class="card-header boton_backgroup" id="headingOne">
                        <h2 class="mb-2 ">
                            <a class="btn btn-lig btn-block text-lg-left" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i>PERSIANAS ENROLLABLE TRASLUCIDAS</a>						
                        </h2>
                    </div>
                       <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                       
                           <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_traslucidas));
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
                                <div class="item">
                                        <img  src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
                                </div>
                              </div>
HTML;
                              }
                            ?>
                        
                    </div>
                        </div>
                           
                       </div>
                </div>
                
                <!--PERSIANAS BLACKOUT-->
                <div  class="card">
                    <div id="p-black" class="card-header boton_backgroup" id="headingThree">
                        <h2 class="mb-2">
                            <a class="btn btn-lig btn-block text-lg-left " data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-plus"></i>PERSIANAS ENROLLABLES BLACK OUT</a>                     
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_persianas_black));
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
                                <div class="item">
                                        <img  src="view/dashboard/img/productos/persianas/$ImgActual" alt="" style="width:100%;height:300px;">
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
      toldos
    ============================-->
    <section id="toldos">
      <div class="container persianas-container wow fadeIn">
          <div class="section-header">
            <h3 class="section-title">TOLDOS</h3>
            <p class="section-description">Contamos con toldos manuales o automatizados.</p>
          </div>
          <div class="bs-example">
            <div class=" accordion" id="accordionExample">
                
                <!--TOLDOS AUTOMATIZADOS-->  
                <div   class="card">
                    <div id="t-auto" class="card-header boton_backgroup-2" id="headingTwo">
                        <h2 id="div-auto" class=" mb-2">
                            <a  class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseFour">AUTOMATIZADOS<i class="fa fa-plus"></i> </a>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                           
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_toldos_automaticos));
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
                                <div class="item">
                                        <img  src="view/dashboard/img/productos/toldos/$ImgActual" alt="" style="width:100%;height:300px;">
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
                    <div id="t-manu" class="card-header boton_backgroup-2" id="headingTwo">
                        <h2 class=" mb-2">
                            <a class="btn btn-lig  btn-block text-lg-left" data-toggle="collapse" data-target="#collapseFive">MANUALES <i class="fa fa-plus"></i></a>
                        </h2>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                        
                        
                        <div class="container">
                        <div class="row">    
                        <?php
                            $resultado =array_filter($conexion->seleccionarValores($sql_toldos_manuales));
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
                                <div class="item">
                                        <img  src="view/dashboard/img/productos/toldos/$ImgActual" alt="" style="width:100%;height:300px;">
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
            <h3 class="section-title">SOMBRILLAS DE SOL</h3>
            <p class="section-description">Elige entre una gran variedad de sombrillas (encuentra sombrillas para jardín) con las que contamos y aprovecha todos sus grandes beneficios para la protección solar..</p>
          </div>
          
      
      <div class="container">
        <div class="row about-container">

             <!-- Traer los registros de sombrillas de sol -->
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
                           
                           <div class="item">
                                   <img  src="view/dashboard/img/productos/sombrillas_sol/$ImgActual" alt="" style="width:100%;height: 400px;" >
                                 </div>
              </div>
HTML;
          }
        ?>              
                    </div>
                        </div>
                           
      
     
         
      </section>
       
     <!--==========================
      Mallas de sombra
    ============================-->
   
      <section class="productos" id="mallas">
          <div class="section-header">
            <h3 class="section-title">MALLAS DE SOMBRA</h3>
            <p class="section-description">Mallas sombra para estacionamiento o escuelas.</p>
          </div>
          
      
      <div class="container">
        <div class="row about-container">
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
                           
                           <div class="item">
                                   <img  src="view/dashboard/img/productos/mallas_sombra/$ImgActual" alt="" style="width:100%;height: 400px;">
                                 </div>
              </div>
HTML;
          }
        ?>        
                        
                    </div>
                        </div>
                           
      
     
         
      </section>
        
       <!--==========================
     Lonas de uso rudo y papel tapiz
    ============================-->
  
      
      <section class="productos" id="lonas">
          <div class="section-header">
            <h3 class="section-title">LONAS DE USO RUDO Y PAPEL TAPIZ</h3>
            <p class="section-description">Papel tapiz elegance y lonas de uso rudo.</p>
          </div>
          
      
      <div class="container">
        <div class="row about-container">

           
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
                           
                           <div class="item">
                                   <img  src="view/dashboard/img/productos/lonas_tapiz/$ImgActual" alt="" style="width:100%;height: 400px;">
                                 </div>
              </div>
HTML;
          }
        ?>        
                        
                    </div>
                        </div>
                           
      
     
         
      </section>
        <!--==========================
    Tapetes decorativos
    ============================-->
   
    <section class="productos" id="tapetes">
          <div class="section-header">
            <h3 class="section-title">TAPETES DECORATIVOS</h3>
            <p class="section-description">Tapetes decorativos de alta calidad.</p>
          </div>
          
      
      <div class="container">
        <div class="row about-container">

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
                           
                           <div class="item">
                                   <img  src="view/dashboard/img/productos/tapetes/$ImgActual" alt="" style="width:100%;height: 400px;">
                                 </div>
              </div>
HTML;
          }
        ?>     
                        
                    </div>
                        </div>
                           
      
     
         
      </section>
       
      
      
      
      
      
      
      
      
      
     <!--==========================
      Seccion acerca de la empresa
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Somos Fabricantes</h2>
            <p>Nos dedicamos a dar soluciones integrales en la decoracion de interiores y exteriores, con la mejor calidad y precios altamente competitivos</p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><p>Línea exclusiva de persianas nivel premium</p></h4>
              <p class="description">Solo se muestra en visita personalizada</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-pencil"></i></div>
              <h4 class="title"><p>Nuestros productos se fabrican a la medida</p></h4>
              <p class="description">De acuerdo al proyecto que solicite el cliente</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-check" aria-hidden="true"></i></div>
              <h4 class="title"><p>Precios especiales para hotelería.</p></h4>
              <p class="description">Todas nuestras persianas enrollables y toldos se fabrican con la mejor calidad en materiales y se diseñan al gusto del cliente lo pueden solicitar de forma motorizada o manual</p>
              
            <a type="button" id="btn-conocenos" href="#products" class="btn btn-warning">Conoce Nuestros Prodcutos</a>
            </div>
          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section>  
    
      
      
      
      
      
      
      
      
      
      
      
      
    <!--==========================
    Call To Action Section
    ============================-->
    <section id="measure">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-6 text-center text-lg-left">
            <h3 class="cta-title">Como tomar medidas</h3>
            <p class="cta-text">Tomar medidas para colocar personas puede ser un poco abrumador, pero en realidad es bastante directo y sencillo.</p>
          </div>
          <div class="col-lg-5 text-center">
            <iframe width="600" height="330" src="https://www.youtube.com/embed/p0632Oert0s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
              Nuestro facebook: <a title="Siguenos en nuestra pagina de Facebook" href="https://www.facebook.com/mrpersianas2015/?ref=br_rs" target="_blank"><i class="fa fa-facebook"></i></a><br><br>
              Nuestro WhatsApp: <a title="Contactanos por WhatsApp" href="https://web.whatsapp.com/send?phone=+5219981073559&amp;text=Hola, me gustaría recibir mas información." target="_blank" ><i class="fa fa-whatsapp"></i></a>
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
        &copy; Copyright <strong>Monkey.exe</strong>. Todos los derechos reservados.
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
