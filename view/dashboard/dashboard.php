<?php
  session_start();
  if(empty($_SESSION['user']))
  {
    header("location: ../iniciar_sesion.php");
  }
	require_once '../../config/conexion.php';
  $conexion= new Conexion;	
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard | Mr.Persianas</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- style -->
  <link rel="stylesheet" href="../../css/style.css">
  <!-- Favicons -->
  <link href="../../img/favicon.png" rel="icon">
</head>
<body>
  <?php
    include('partials/navigation-dash.php');
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
                    <h2>ADMINISTRADOR DE CONTENIDO MR. PERSIANAS</h2>
                    <p class="mb-md-0">Gestiona la informacion de tu pagina web para un mejor de control de tus productos.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title"></h1>
                  <p class="card-description">
                    ADMINISTRA TU CONTENIDO.
                  </p>
                  <div class="template-demo">
                    <img src="../../img/logo-dashboard.jpg" alt="Dashboard" class="img-thumbnail">
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
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>

    <!-- Menu Vertical end -->
  </div>
  <!-- End container Dashboard -->
    <!-- page-body-wrapper ends -->
  </div>
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

