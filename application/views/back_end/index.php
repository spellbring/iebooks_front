

    <?php $this->load->view($_NavBar); ?>


  <!-- Header -->
    <header style="background-color: #006dcc">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="assets/template/img/logoi-ebooks.gif" alt="">
                    <div class="intro-text">
                        <span class="name">Bienvenidos</span>
                        <hr class="star-primary">
                        <span class="skills">A la clase de hoy</span>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
  <section id="portfolio">
        <div class="container">
    
        <?php if($objClases){ ?>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Clases Disponibles</h2>
                <hr class="star-primary">
            </div>
        </div>  
        <div class="row">
        <?php foreach ($objClases as $oClases) { ?>
                <div class="col-md-3">
                    <div class="panel" style="border: 1px">
                        <div class="panel-warning">
                            <div class="panel-heading">
                                <?php echo $oClases->descripcionclase ?>
                            </div>
                           
                             <div class="panel-body" style = "background-color: #faebcc">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nombre Profesional</label>
                                    </div>
                                    <div class="col-md-6">
                                      <?php echo $oClases->nombre_p. " ".$oClases->apellido_p?>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <button class="btn btn-default" data-toggle="modal" data-target=".bs-modal-sm"
                                                onclick="Global.prototype.modal_ajax('<?php echo base64_encode($oClases->idclase); ?>'
                                                           , 'agregar_usuario'
                                                           , '<?php echo base_url('home/abrir_clase'); ?>');">Ingresar</button>
                                    </div>
                                </div>
                             </div>
                         
                        </div>
                        
                    </div>
                        
                    
                </div>                
        <?php } ?>   
         </div>
       
  <?php }else { ?>
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>No existen clases Disponibles</h2>
                <hr class="star-primary">
            </div>
        </div> 
  <?php } ?>
   </div>
    </section>
        

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Dirección</h3>
                        <p>Nueva Providencia 3840</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Búsquenos en Redes Sociales</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Sobre I-Ebook</h3>
                        <p>Software con fines educativos.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; I-Ebooks.cl
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

<div class="modal bs-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="agregar_usuario">
        
            
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Espere mientras se abre la ventana</h4>
            </div>
            <div class="modal-body">
                <p>Si ve esta ventana por mucho tiempo, cierrela y vuelva a intentar.</p>
            </div>
            <div class="modal-footer no-border">
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="close_windows();" >Cerrar</button>
            </div>
            
            
        </div>
    </div>
</div>

    
   
 
