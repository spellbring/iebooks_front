<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h4 class="modal-title">Seleccionar Material Interactivo.</h4>
</div>
<div class="modal-body">
    <?php if($obj_clase_material){ ?>
        <div class="row">
            <?php foreach($obj_clase_material as $objm){ ?>
                  <div class="col-sm-4 portfolio-item">
                      <a href="cuento" class="portfolio-link">
                        <div class="caption">
                          <?php echo $objm->nombre_material ?>
                        </div>
                        <img src="assets/template/img/portfolio/<?php echo $objm->material_interactivo_idmaterial_interactivo ?>.png" class="img-responsive" alt="">
                    </a>
                  </div>
            <?php } ?>
        <?php } ?>
        </div>
        </div>
      
       
 
</div>
<div class="modal-footer no-border">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
   
</div>
