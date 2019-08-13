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