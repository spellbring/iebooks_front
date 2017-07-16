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
						<p class="tlt" id="tltText1" data-in-effect="fadeIn" style="color:white;"><?php echo utf8_encode('Hab�a una granja situada a las afueras de un pueblo, llamada la granja de Bimbo. En esta granja hab�a muchos animales, vacas, ovejas, gallinas y un peque�o cerdito llamado Pinki, quien hab�a sido el �ltimo en llegar, pues tan s�lo ten�a dos meses de vida, era un cachorrito. Pinki, era un cerdito muy juguet�n, al que le gustaba mucho estar con las ovejasmientras que estaban en el prado pastando. Sol�a correr detr�s de las ovejas hasta que, Pluto, el perro pastor, le rega�aba por no dejar a las ovejas comer tranquilas, y entonces las dejaba de molestar, hasta que Pluto se distra�a.')?></p>
						<p class="tlt" id="tltText2" data-in-effect="fadeIn" style="display:none; color:white;"><?php echo utf8_encode('Pinki era un cerdito muy valiente, pues un d�a cuando se encontraban las ovejas en el prado vi� como se acercaba un lobo sigilosamente, pasando desapercibido por delante de Pluto, que estaba echado la siesta.')?></p>
						<p class="tlt" id="tltText3" data-in-effect="fadeIn" style="display:none; color:white;"><?php echo utf8_encode('De repente, el lobo sali� de entre los matorrales y fu� a por las ovejas, pero Pinki r�pidamente sali� a avisar a las ovejas para que salieran corriendo todo lo r�pido que pudieran hacia donde se encontraba Pluto. �ste, al escuchar los balidos de las ovejas, se despert� y fuea defenderlas, asustando al lobo.')?></p>
						<p class="tlt" id="tltText4" data-in-effect="fadeIn" style="display:none; color:white;"><?php echo utf8_encode('Desde entonces, Pinki, pas� a llamarse el cerdito valiente de la granja de Bimbo, pues gracias a �l, las ovejas no fueron heridas por parte de aquel lobo malvado. As� fue como las ovejas y el cerdito Pinki, comenzaron una relaci�n de amistad para siempre, adem�s, a las ovejas ya no les molestaba que el cerdito jugara con ellas.')?></p>
				
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









