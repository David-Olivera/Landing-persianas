<?php
  	
	require_once '../../../../config/conexion.php';
	$conexion= new Conexion(); 
	$sql="SELECT * FROM productos WHERE tipo_produ = 'Brazos' OR tipo_produ = 'Caida' OR tipo_produ = 'Pergolio';";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Toldos | Mr.Persianas</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- style -->
  <link rel="stylesheet" href="../../../../css/style.css">
  <!-- Favicons -->
  <link href="../../img/favicon.png" rel="icon">
</head>

<body>
  
    <?php
    include('../../partials/navigation-prom.php');
  ?>


  <!-- container dashboard -->

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="mr-md-3 mr-xl-5">
                    <h2>Bienvenidos al dashboard de Toldos</h2>
                    <p class="mb-md-0">Administración de información del apartador de toldos.</p>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal" >Agregar Imagen</button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Nueva Imagen</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!--OBTENGO FECHA Y HORA ACTUAL-->
                        <?php
                          date_default_timezone_set("America/Mexico_City");
                          $fecha=date("Y-m-d");
                          $hora=date("H:i:s");
                          
                        ?>
                      <!-- Modal body -->
                      
                        <div class="modal-body">
                                <form action="../../controller/agregar_toldo.php" method="POST" name="frmnoticia" enctype="multipart/form-data">
                                                                               
                                      <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="" type ="file" name="imagen" class="form-control" placeholder="Titulo" required>                         
                                      </div>
                                
                                      <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="" type="hidden"class="form-control" placeholder="Fecha" value="<?php echo $fecha ?>"  name="fecha"  required>
                                        <select class="form-control " name="tipo" id="exampleFormControlSelect1" autofocus required>
                                          <option value=""> -- Seleccione una opcion --</option>
                                          <option value="Brazos">Brazos ocultos</option>
                                          <option value="Caida">Caida libre</option>
                                        <option value="Pergolio">Pergolio</option>
                                        </select>    
                                     </div>
                  
                                     <div class="form-group text-center">
                                          <button   href="" class="btn btn-success">Agregar </button>
                                      </div>                                     
                                 </form> 
                          </div>
                    </div>
                   </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="recent-purchases-listing" class="table text-center">
                      <thead>
                        <tr>
                            <th>Imagen</th>
                            <th>Fecha de Subida</th>
                            <th>Tipo de Toldo</th>
                            <th>Opciones</th>
                        </tr>
                      </thead>
                      <tbody>
                      <!-- Script para eliminar con js -->
                      <script>
                      function eliminar(articulo){
                        if(confirm("Estas seguro de eliminar el articulo")){
                          location.href="../../controller/eliminar_toldo.php?id="+articulo;
                        };
                      }
                    </script>
                      <!-- Funcion para traer todos los registros de promociones -->
                      <?php
                      $resultado =array_filter($conexion->seleccionarValores($sql));
                      $i = 0;
                      foreach($resultado as $datos){
                        $idActual = $datos['id_producto'];
                        $ImgActual = $datos['imagen_produ'];
                        $fechaActual = $datos['fecha_produ'];
                        $tipoActual = $datos['tipo_produ'];
                        $i++;
                        echo<<<HTML
                        <tr>
                           <td><img src="../../img/productos/toldos/$ImgActual"/></td>
                          <td>$fechaActual</td>
                          <td>$tipoActual</td>
                          <td><button onclick="eliminar($idActual)" type="button" class="btn btn-danger">Eliminar</button> </td>
                        </tr>
HTML;


                      }
                       ?> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
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
      <!-- container-scroller ends -->
    </div>
    <!-- Menu Vertical end -->
  </div>
  <!-- End container Dashboard -->
    <!-- page-body-wrapper ends -->
  </div>
 <!-- plugins:js -->
 <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="../../vendors/chart.js/Chart.min.js"></script>
  <script src="../../vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/dashboard.js"></script>
  <script src="../../js/data-table.js"></script>
  <script src="../../js/jquery.dataTables.js"></script>
  <script src="../../js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
