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
      <div class="col s12 m12">
        <h2 class="grey-text center-align">Organigrama</h2>
        <img src="assets/img/organigrama.png" alt="" class="img-hero">
      </div>
		</div>
	</div>
</section>
<section class="objetivos">
	<div class="container">
		<div class="row">
			<h2 class="grey-text center-align">Perfiles</h2>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/user.png">
          
        </div>
        <div class="card-content">
          <span class="card-title grey-text">Operario</span>
          <p class="grey-text justify-align">Controla y realiza los procesos de recepción, manipulación, transformación y elaboración de productos alimentarios, respetando en todo momento las normas de calidad, de medio ambiente, seguridad y técnico-sanitarias previamente establecidas.</p>
        </div>
        <div class="card-action">
          <a href="manuales.php">Descargar el manual</a>
        </div>
      </div>
  </div>
  <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/user.png">
          
        </div>
        <div class="card-content">
          <span class="card-title grey-text">Distribuidor</span>
          <p class="grey-text justify-align">Se encarga de promocionar y vender los productos finalizados, se encarga de dar las condiciones y organizar los productos para su venta al público. Gestiona la venta al por mayor y al detal de cada producto manufacturado o empacado por la empresa.</p>
        </div>
        <div class="card-action">
          <a href="manuales.php">Descargar el manual</a>
        </div>
      </div>
    </div>
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="assets/img/user.png">
          
        </div>
        <div class="card-content">
          <span class="card-title grey-text">Comercializador</span>
          <p class="grey-text justify-align">Es el encargado de recibir los productos en la bodega y entrega los empacados a los clientes que solicitan pedidos a través del comercializador, es quien se encuentra a cargo del vehículo o motocarro en el que se trasladarán los productos de la empresa.</p>
        </div>
        <div class="card-action">
          <a href="manuales.php">Descargar el manual</a>
        </div>
      </div>
    </div>
  </div>
  </div>
    </div>
    
	</div>
</section>


<?php include 'partial/footer.php'; ?>