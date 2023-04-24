<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE");
	header("Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization");
	header("Cache-Control: no-cache, no-store, must-revalidate");

	$description = "Servicios funerarios y un avanzado servicio de Telemedicina y Segunda Opinión Médica";
	$keywords = "Servicios funerarios, Protección familiar, Telemedicina, vida plena, Medicina interna, Medicina pediátrica, Cardiología";
	$title = "Gayosso Med | Telemedicina y Segunda Opinión Médica";
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php include 'includes/header.php'; ?>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M4RLSPD"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<main id="bdy_container">
		<nav id="navbar" class="navbar navbar-expand-lg navbar-light fixed-top navgayosso">
			<div class="container-xl">
				<a class="navbar-brand" href="/"><img src="assets/images/logo_gayosoo_med.png" width="130" alt="Gayosso med" title="Gayosso med"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navgayosso" aria-controls="navgayosso" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	   	</button>
				<div class="collapse navbar-collapse" id="navgayosso">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="/#proteccionfamiliar">¿QUÉ ES GAYOSSO MED?</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/#beneficios_gayossomed">BENEFICIOS</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/#registro">REGISTRO</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- eyecatcher -->
		<div id="home" class="gayosso_hero d-flex p-4 flex-column justify-content-end">
			<div class="container">
				<!-- Box txt -->
				<div class="box_hero">
					<h2 class="title_gayosso">Gayosso Med</h2>
					<p class="sub_gayosso">Ahora queremos que vivas más y más saludable. Por eso, te ofrecemos nuestro nuevo y avanzado servicio de Telemedicina y Segunda Opinión Médica.</p>
				</div>
				<!-- BTN APPS -->
				<div class="btn_main">
					<div class="text-center txt_down">
						<p class="txt_btn_main">Descarga nuestra aplicación o contáctanos al <a class="colorwhite" href="tel:+528009532054">8009532054</a> y al <a class="colorlight " href="tel:+525594173566">5594173566</a> para agendar una cita. </p>
					</div>
					<div class="text-center btn_apps">
						<a href="#" class="btn_img_app"><img src="assets/images/btn-googleplay.png" alt="Descarga aplicación Android"></a>
						<a href="#" class="btn_img_app"><img src="assets/images/btn-appstore.png" alt="Descarga aplicación ios"></a>
					</div>
				</div>
			</div>
		</div>
		<!--content-->
		<div id="proteccionfamiliar" class="background_img">
			<div class="sec1 middle-xs">
				<div class="col-12 col-sm-6 col-md-12 col-lg-6 image_left">
					<img src="assets/images/plan_de_proteccion_familiar.jpg" alt="Telemedicina y Segunda Opinión Médica">
				</div>
				<div class="col-12 col-sm-6 col-md-12 col-lg-6 last-xs content_txt_right">
					<h2 class="title_content title_bl">Plan de Protección<br>Familiar:</h2>
					<p>Hoy podemos ofrecerte más que servicios funerarios de primer nivel. Por eso creamos el programa:</p>
					<p><strong>Protección Familiar</strong> reunirá nuevos servicios que te ayudarán a cuidar de tu salud y a vivir de forma más plena. Como Gayosso Med, un conjunto de beneficios médicos con dos modalidades: Telemedicina y Segunda Opinión Médica.</p>
					<a href="#home" class="btn_blu">Descarga nuestra aplicación</a>
					<a href="" class="btn_gray" data-toggle="modal" data-target="#terminos">Ver términos y condiciones</a>
				</div>
			</div>
		</div>
		<!-- -->
		<div id="beneficios_gayossomed" class="background_bl">
			<div class="sz_img row middle-xs">
				<div class="sec2 col-12 col-sm-6 col-md-12 col-lg-6 last-xs">
					<div class="content_txt_left">
						<h2 class="title_content title_light">BENEFICIOS<br>
						GAYOSSO MED:</h2>
						<a class="icon"><img src="assets/images/i_med.png" alt="Descuentos en medicamentos"></a>
						<p>Descuentos desde el 5% al 25% en medicamentos.</p>
						<a class="icon"><img src="assets/images/i_far.png" alt="Descuentos en farmacias y laboratorios"></a>
						<p>Descuentos desde el 5% hasta el 25% en farmacias y laboratorios.</p>
						<a class="icon"><img src="assets/images/i_amb.png" alt="servicio de ambulancia al año"></a>
						<p>1 servicio de ambulancia al año.</p>
						<a class="icon"><img src="assets/images/i_cue.png" alt="Cuestionario de salud"></a>
						<p>Cuestionario de salud.</p>
						<a class="icon"><img src="assets/images/i_ase.png" alt="Asesorías de médicos, nutriólogos, psicólogos y pediatras"></a>
						<p>Asesorías ilimitadas de médicos, nutriólogos, psicólogos y pediatras.</p>
						<a class="icon"><img src="assets/images/i_app.png" alt="Aplicación móvil"></a>
						<p>Aplicación móvil.</p>
						<a class="icon"><img src="assets/images/i_tit.png" alt="Titular + 2 familiares directos"></a>
						<p>Titular + 2 familiares directos.</p>
						<a href="#home" class="btn_light">Descarga nuestra aplicación</a>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-12 col-lg-6 image_right">
					<img src="assets/images/beneficios_vide.jpg" alt="Plan de servicios medicos al cuidado de tu salud">
					<a href="" data-toggle="modal" data-target="#modalVideo"><img src="assets/images/icoplay.png" class="play" alt="icon play"></a>
				</div>
			</div>
		</div>
		<!-- -->
		<div class="background_img">
			<div class="sec1 middle-xs">
				<div class="col-12 col-sm-6 col-md-12 col-lg-6 image_left">
					<img src="assets/images/telemedicina.jpg" alt="Consulta en servicio de telemedicina">
				</div>
				<div class="col-12 col-sm-6 col-md-12 col-lg-6 last-xs content_txt_right">
					<h2 class="title_content title_bl">El servicio más avanzado<br> de Telemedicina.</h2>
					<p>Consulta a diferentes expertos desde tu aplicación, en tu dispositivo móvil o tu computadora de escritorio en cualquier momento que lo necesites, las 24 horas del día, los 7 días de la semana.</p>
				</div>
			</div>
		</div>
		<!-- -->
		<div class="background_bl text-center block_contrata">
			<h2 class="title_content">Si tu ya tienes el Plan de Protección Familiar:</h2>
			<div class="contd">
				<p>Contrata Gayosso Med por un costo anual<br> de <strong>$1,199</strong> por <strong>membresía adicional</strong> a tu Plan de Protección Familiar.</p>
			</div>
		</div>
		<!-- -->
		<div class="background_light">
			<div class="sz_img row middle-xs">
				<div class="sec2 col-12 col-sm-6 col-md-12 col-lg-6 last-xs ">
					<div class="content_txt_left">
						<h2 class="title_content title_bl">2DA. OPINIÓN MÉDICA</h2>
						<p class="especialidades">En esta modalidad puedes acceder a la opinión de médicos norteamericanos de 1er nivel y de habla hispana a través de teleconferencia.<br><br> Nuestros médicos pueden atender especialidades como:</p>
							<ul>
								<li>Medicina interna.</li>
								<li>Medicina pediátrica.</li>
								<li>Cardiología.</li>
								<li>Trastornos del sueño, entre muchas otras.</li>
							</ul>
						<p class="especialidades">Por ser cliente gayosso, tienes derecho a 1 consulta al año para ti, cónyugue o hijos son costo al padecer estos padecimientos.</p>
						<p class="especialidades"><strong>Para la validación y generación de cita de segunda opinión y dudas comunícate al Call center de Protección Familiar <a class="phon" href="tel:+528004610556">800 461 0556</a></strong></p>
					</div>
				</div>
				<div class="col-12 col-sm-6 col-md-12 col-lg-6 image_right">
					<img src="assets/images/2da_opinion_medica.jpg" alt="Acceso a opinión de médicos norteamericanos">
				</div>
			</div>
		</div>
		<!-- -->
		<div class="py-5 background_light text-center">
			<div class="container">
				<div class="row">
					<div class=" col-md-12 col-lg-12">
						<div class="mb-4">
							<div class="card-body">
								<h3 class="card-text"><strong>Adicionalmente hay tres padecimientos sin costo para el titular, ya que el mismo será asumido por Gayosso una vez al año.</strong></h3>
							</div>
						</div>
					</div>
					<div class=" col-md-12 col-lg-4">
						<div class="card mb-4 box_padecimientos">
							<div class="card-body">
								<h3>CÁNCER MAMA</h3>
								<p class="card-text">PARA MUJERES DE HASTA 55 AÑOS</p>
							</div>
						</div>
					</div>
					<div class=" col-md-12 col-lg-4">
						<div class="card mb-4 box_padecimientos">
							<div class="card-body">
								<h3>CÁNCER PROSTATA</h3>
								<p class="card-text">PARA HOMBRES DE HASTA 55 AÑOS</p>
							</div>
						</div>
					</div>
					<div class=" col-md-12 col-lg-4">
						<div class="card mb-4 box_padecimientos">
							<div class="card-body">
								<h3>LEUCEMIA</h3>
								<p class="card-text">PARA NIÑOS, NIÑAS Y ADOLESCENTES DE HASTA 20 AÑOS</p>
							</div>
						</div>
					</div>
					<div class="col-10 col-md-6 background_light">
						<div class="card noborder">
							<a href="#home" class="btn_blu">Descarga nuestra aplicación</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- -->
		<div class="boxplanlogos text-center">
			<h2>Si aún no tienes tu plan de Protección Familiar contrata ahora.</h2>
			<div class="py-3 text-center">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-12 col-lg-6">
							<div class="card mb-4 boxlogos noborder">
								<div class="centerblock">
									<p>El Plan de Protección Familiar tiene los siguientes beneficios: <strong>Plan de Previsión Funeraria, Gayosso Med y Gayosso Contigo.</strong></p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-12 col-lg-6">
							<div class="card mb-4 boxlogos noborder">
								<div class="centerblock">
									<img src="assets/images/log_prevision_gayosso.png" alt="Previsión Gayosso">
									<img src="assets/images/log_gayosso_med.png" alt="Gayosso Med">
									<img src="assets/images/log_gayosso_contigo.png" alt="Gayosso Contigo">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- -->
		<div id="registro" class="py-5 background_bl_img text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-6">
						<div class="card mb-4 boxform noborder">
							<h2 class="title_content title_light">CONOCE MÁS DE<br> GAYOSSO MED</h2>
							<p>Ingresa los siguientes datos para solicitar información sobre tu próximo Plan de Previsión Familiar y Gayosso Med. </p>
						</div>
					</div>
					<div class=" col-md-12 col-lg-6">
						<div class="card mb-4 boxform noborder np_0">
							<div class="card-body">
            	<form id="form-gayosso" class="form-signin">
            		<!-- -->
  					<label for="name" class="sr-only">Nombre</label>
  					<input type="text" id="name" class="form-control" placeholder="Nombre" required>
  					<!-- -->
  					<label for="lastname" class="sr-only">Apellido</label>
  					<input type="text" id="lastname" class="form-control" placeholder="Apellido" required >
					<!-- -->
  					<label for="phone" class="sr-only">Teléfono</label>
  					<input type="number" id="phone" class="form-control" placeholder="Teléfono" required>
					<!-- -->
  					<label for="email" class="sr-only">Email</label>
  					<input type="email" id="email" class="form-control" placeholder="Email" required>
					<!-- -->
  					<label for="state" class="sr-only">Estado</label>
  					<select type="text" id="state" class="form-control" placeholder="Estado" required>					  
					  	<option value="">Seleccione el estado</option>
						    <option value="Aguascalientes">Aguascalientes</option>
							<option value="Baja California">Baja California</option>
							<option value="Baja California Sur">Baja California Sur</option>
							<option value="Campeche">Campeche</option>
							<option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
							<option value="Colima">Colima</option>
							<option value="Chiapas">Chiapas</option>
							<option value="Chihuahua">Chihuahua</option>
							<option value="Ciudad de México">Ciudad de México</option>
							<option value="Durango">Durango</option>
							<option value="Guanajuato">Guanajuato</option>
							<option value="Guerrero">Guerrero</option>
							<option value="Hidalgo">Hidalgo</option>
							<option value="Jalisco">Jalisco</option>
							<option value="México">México</option>
							<option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
							<option value="Morelos">Morelos</option>
							<option value="Nayarit">Nayarit</option>
							<option value="Nuevo León">Nuevo León</option>
							<option value="Oaxaca">Oaxaca</option>
							<option value="Puebla">Puebla</option>
							<option value="Querétaro">Querétaro</option>
							<option value="Quintana Roo">Quintana Roo</option>
							<option value="San Luis Potosí">San Luis Potosí</option>
							<option value="Sinaloa">Sinaloa</option>
							<option value="Sonora">Sonora</option>
							<option value="Tabasco">Tabasco</option>
							<option value="Tamaulipas">Tamaulipas</option>
							<option value="Tlaxcala">Tlaxcala</option>
							<option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
							<option value="Yucatán">Yucatán</option>
							<option value="Zacatecas">Zacatecas</option>
					</select>
  					<!-- -->
  					<label for="interest" class="sr-only">Tema de interes</label>
  					<select type="text" id="interest" class="form-control" placeholder="Tema de interes"  required>
					  	<option value="">Seleccione su interes</option>		
						<option value="Protección Familiar">Protección Familiar</option>
						<option value="Gayosso Contigo">Gayosso Contigo</option>
						<option value="Gayosso MED">Gayosso MED</option>
						<option value="Previsión Gayosso">Previsión Gayosso</option>			  	
					</select>
  					<!-- -->
  					<button class="btn" type="submit"><a class="btn_light">Solicita información</a></button>
  				</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- -->
		<footer class="py-2 background_grn text-center">
			<?php include 'includes/footer.php'; ?>
		</footer>
		<!-- -->
	</main>


	<!-- modal -->
	<div class="modal fade" id="terminos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="myModalLabel">TÉRMINOS Y CONDICIONES </h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
         			 <span aria-hidden="true">&times;</span>
       				 </button>
				</div>
				<div class="modal-body">
					<ul>
						<li>Comprende únicamente de consultas vía telefónica y web.</li>
						<li>Las consultas presenciales generan un costo adicional mismo que deberá ser cubierto por el titular de la membresía.</li>
						<li>La membresía brinda cobertura para el titular y dos familiares (padres, cónyuges, hijos y hermanos). Aplican restricciones.</li>
						<li>Este servicio es válido siempre y cuando se tenga un plan de previsión contratado con Gayosso o se esté pagando a plazos. Sin embargo, es necesario contar con una cuenta al corriente en cuanto a los pagos se refiere.</li>
						<li>Es importante tener en cuenta que Grupo Gayosso actúa únicamente como tercero y no se hace responsable por recomendaciones o atención médica proporcionada por profesionales que pertenezcan a la red.</li>
						<li>El cargo anual se realizará de forma automática y es responsabilidad del cliente cancelar a los 30 (treinta) días naturales de anticipación antes del aniversario de la anualidad, en caso de no desear la renovación.</li>
					</ul>					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>
	<!-- modal video -->
	<div class="modal fade" id="modalVideo" tabindex="-1" data-backdrop="true" data-keyboard="true" role="dialog" aria-labelledby="myModalLabel" >
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button  id="cerrar-modal" type="button" class="close" data-dismiss="modal" aria-label="Close">
         			 <span aria-hidden="true">&times;</span>
       				 </button>
				</div>
				<div class="modal-body">
					<div class="embed-responsive embed-responsive-16by9">						
						<div id="player"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>



<script>
  function loadYouTubeAPI() {
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
  }



  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      height: '360',
      width: '640',
      videoId: 'bxjXMEErsKo',
      playerVars: {
            'autoplay': 0
          },
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
  }

  function onPlayerReady(event) {
  	$('#modalVideo').on('shown.bs.modal', function () {
    	event.target.playVideo();
    })
  }

 
  function onPlayerStateChange(event) {  	    
    $('#modalVideo').on('hidden.bs.modal', function (event) {		
        	player.stopVideo();        	     	
	})
  }

loadYouTubeAPI();
</script>

</body>
</html>