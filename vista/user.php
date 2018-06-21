<?php include 'partial/head.php'; ?>
<?php session_start(); 
	if (isset($_SESSION["usuario"])) {
	 	if ($_SESSION["usuario"]["privilegio"] == 1) {
	 		header("location:admin.php");
	 	}
	 }else {
	 header("location:index.php");
  }
	 ?>
<?php include 'partial/navuser.php'; ?>

<section class="hero">
	<div class="container">
		<div class="row">
			<div class="col s12 m8 offset-m2">
				<img src="assets/img/devices2.png" class="img-hero">
				<h2 class="grey-text center-align">Bienvenido, <?php echo $_SESSION["usuario"]["nombre"]; ?></h2>
				<p class="grey-text justify-align">TurnApp apunta a que el proceso productivo del Portal de Oportunidades, enfocado en Granos del Atlántico, cumpla con estándares sociales y ambientales, además de adquirir compromisos con la transparencia y la medición de impacto, que permita finalmente una generación de ingresos responsable para la mejora de la sociedad, evidenciando la construcción de un sistema orgánico de desarrollo y eficiencia intergrupal.</p>
			</div>
		</div>
	</div>
</section>
<section class="objetivos">
	<div class="container">
		<div class="row">
			<h2 class="grey-text center-align">Objetivos de la plataforma</h2>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/ob1.png" class="objetivos-img">
          
        </div>
        <div class="card-content">
        	<span class="card-title grey-text center-align">Organizar</span>
          <p class="justify-align grey-text">Estructuramos el sistema organizacional del talento humano de Granos del Atlántico a través de la estrategia orgánica de administración eficaz por equipos.</p>
        </div>
        
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/ob2.png" class="objetivos-img">
          
        </div>
        <div class="card-content">
        	<span class="card-title grey-text center-align">Analizar</span>
          <p class="justify-align grey-text">Diseñamos bajo un enfoque diferencial la estructura del proceso de desarrollo organizacional para la estandarización de los protocolos de Granos del Atlántico.</p>
        </div>
        
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/ob3.png" class="objetivos-img">
        </div>
        <div class="card-content">
        	<span class="card-title grey-text center-align">Agendar</span>
          <p class="justify-align grey-text">Diseñamos del manual del proceso organizativo que define funciones, horarios de trabajo, inclusive turnos y tiempos.</p>
        </div>
        
      </div>
    </div>
  </div>
	</div>
</section>
<section class="footer">
	<div class="container">
		<div class="row">
		<div class="col s6"><p class="left-align white-text">Versión 0.1.1</p></div>
		<div class="col s6"><p class="right-align white-text">Un producto <a href="http://conaccion.co" target="_blank">ConAcción</a></p>
		</div>
	</div>
		
		
	</div>
</section>

<?php include 'partial/footer.php'; ?>