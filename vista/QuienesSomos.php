<?php include 'partial/head.php'; ?>
<?php session_start(); 
  if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"]["privilegio"] == 2) {
      header("location:user.php");
    }
   }else {
   header("location:index.php");
  }
   ?>
<?php include 'partial/nav.php'; ?>

<section class="hero">
	<div class="container">
		<div class="row">
			<div class="col s12 m6">
				<img src="assets/img/devices2.png" class="img-hero">
				
			</div>
      <div class="col s12 m6">
        <h2 class="grey-text center-align">Quienes somos</h2>
        <p class="grey-text justify-align">Somos una empresa comunitaria conformada por cincuenta (50) asociaciones constituidas cada una por cinco beneficiarios, ubicados en los municipios de Campo de la Cruz, Suan, Manatí, Baranoa, Sabanalarga, Usiacurí, Palmar de Varela, Ponedera y Santo Tomás. 
Granos del Atlántico es una marca propia de producción y comercialización de productos a granel para el consumo humano que contribuye a la mejora de la calidad de vida de 250 familias a través de un modelo sostenible e innovador de generación de ingresos para la población víctima del conflicto armado.</p>
      </div>
		</div>
	</div>
</section>
<section class="objetivos">
	<div class="container">
		<div class="row">
			<h2 class="grey-text center-align">Bodegas</h2>
    <div class="col s12 m4">
      <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="assets/img/planta.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text ">Bodega oriental<i class="material-icons right">more_vert</i></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text ">Bodega oriental<i class="material-icons right">close</i></span>
      <p class="grey-text"><i class="material-icons">add_location</i> Palmar de varela</p>
    </div>
  </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="assets/img/planta.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text ">Bodega central<i class="material-icons right">more_vert</i></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text ">Bodega central<i class="material-icons right">close</i></span>
      <p class="grey-text"><i class="material-icons">add_location</i> Usiacurí</p>
    </div>
  </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="assets/img/planta.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text ">Bodega sur<i class="material-icons right">more_vert</i></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text ">Bodega sur<i class="material-icons right">close</i></span>
      <p class="grey-text"><i class="material-icons">add_location</i> Campo de la cruz</p>
    </div>
  </div>
    </div>
  </div>
	</div>
</section>


<?php include 'partial/footer.php'; ?>