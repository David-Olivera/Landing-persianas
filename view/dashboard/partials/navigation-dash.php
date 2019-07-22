<div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="dashboard.php"><img src="images/logo_colores.png" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="dashboard.php"><span alt="logo" class="mdi mdi-account-circle"></span></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile">
            <a class="nav-link" href="../../core/cerrar_sesion.php" id="profileDropdown">Cerrar Sesion
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- Menu Vertical -->
    <div class="container-fluid page-body-wrapper">
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-animation menu-icon"></i>
              <span class="menu-title">Productos</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/products/persianas.php">Persianas</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/products/toldos.php">Toldos</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/products/sombrillas.php">Sombrillas de sol</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/products/mallas_sombra.php">Malla sombra</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/products/lona_rudo_papel_tapiz.php">Lonas y Papel tapiz</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/products/tapetes_decorativos.php">Tapetes Decorativos</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/promotions/promotion_elements.php">
              <i class="mdi mdi-basket menu-icon"></i>
              <span class="menu-title">Promociones</span>
            </a>
          </li> 
        </ul>
      </nav>