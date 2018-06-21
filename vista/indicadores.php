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
  
    <div class="row">
      <div class="col s12 m12">
        <h3 class="center-align grey-text">Indicadores de RRHH</h3>
        <h5 class="center-align grey-text">Eventos</h5>
        <iframe src="../tablas/eventos/index.php" frameborder="0" width="100%" height="100%" class="tabla"></iframe>
        
        <h5 class="center-align grey-text">Asistencias</h5>
        <iframe src="../tablas/incapacidades/index.php" frameborder="0" width="100%" height="100%" class="tabla"></iframe>
      </div>
    </div>
 
</section>
<?php include 'partial/footer.php'; ?>


