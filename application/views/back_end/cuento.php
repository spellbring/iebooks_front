<?php $this->load->view($_NavBar);?>


<iframe id="Maintail" src="assets/resources/media/animaciones/CerditoValiente/1/project.html" width="100%" height="600px" style="overflow-x: hidden; overflow-y: hidden;"> </iframe>
<script type="text/javascript">
$(function () {
	$('.tlt').textillate();
	$('#tltText2').hide();
	$('#tltText3').hide();
	$('#tltText4').hide();
});
</script>

<div class="footer">
	<nav class="navbar navbar-inverse navbar-fixed-bottom" 
		role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<div class="row">
					<div class="col-md-1"><a id="back" class="navbar-brand" href="Home">Volver</a> </div>
					<div class="col-md-10">
						<p class="tlt" id="tltText1" data-in-effect="fadeIn" style="color:white;"><?php echo utf8_encode('Había una granja situada a las afueras de un pueblo, llamada la granja de Bimbo. En esta granja había muchos animales, vacas, ovejas, gallinas y un pequeño cerdito llamado Pinki, quien había sido el último en llegar, pues tan sólo tenía dos meses de vida, era un cachorrito. Pinki, era un cerdito muy juguetón, al que le gustaba mucho estar con las ovejasmientras que estaban en el prado pastando. Solía correr detrás de las ovejas hasta que, Pluto, el perro pastor, le regañaba por no dejar a las ovejas comer tranquilas, y entonces las dejaba de molestar, hasta que Pluto se distraía.')?></p>
						<p class="tlt" id="tltText2" data-in-effect="fadeIn" style="display:none; color:white;"><?php echo utf8_encode('Pinki era un cerdito muy valiente, pues un día cuando se encontraban las ovejas en el prado vió como se acercaba un lobo sigilosamente, pasando desapercibido por delante de Pluto, que estaba echado la siesta.')?></p>
						<p class="tlt" id="tltText3" data-in-effect="fadeIn" style="display:none; color:white;"><?php echo utf8_encode('De repente, el lobo salió de entre los matorrales y fué a por las ovejas, pero Pinki rápidamente salió a avisar a las ovejas para que salieran corriendo todo lo rápido que pudieran hacia donde se encontraba Pluto. Éste, al escuchar los balidos de las ovejas, se despertó y fuea defenderlas, asustando al lobo.')?></p>
						<p class="tlt" id="tltText4" data-in-effect="fadeIn" style="display:none; color:white;"><?php echo utf8_encode('Desde entonces, Pinki, pasó a llamarse el cerdito valiente de la granja de Bimbo, pues gracias a él, las ovejas no fueron heridas por parte de aquel lobo malvado. Así fue como las ovejas y el cerdito Pinki, comenzaron una relación de amistad para siempre, además, a las ovejas ya no les molestaba que el cerdito jugara con ellas.')?></p>
				
					</div>
					<div class="col-md-1"><a id="cuento1" data-id="1" class="navbar-brand" href="#">Siguiente</a></div>
				</div>
				
				
				
				
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse"
				id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><span></span></li>
				</ul>
			</div>
		</div>
	</nav>
</div>



<script>
	
	
    $(document).on("click", "#cuento1", function() {
    	event.preventDefault();
      	var position = parseInt($(this).attr('data-id'));
      	position = position + 1;
       	$('#cuento1').attr('data-id', position);
       	if(position === 1){
       		$('#tltText1').show();
       		$('#tltText2').hide();
       	}
		if(position === 2){
			$('#tltText1').hide();
			$('#tltText2').show();
       	}
		if(position === 3){
			$('#tltText2').hide();
			$('#tltText3').show();
		}
		if(position === 4){
			$('#tltText3').hide();
			$('#tltText4').show();
		}
		if(position === 5){
			$("#cuento1").hide();
		}
       
       	$('#Maintail').attr('src', 'assets/resources/media/animaciones/CerditoValiente/'+position+'/project.html');
       	
       
    });
    </script>


</body>

</html>









