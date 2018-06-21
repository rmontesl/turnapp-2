<?php include 'partial/head.php'; ?>
<?php session_start(); 
	if (isset($_SESSION["usuario"])) {
	 	if ($_SESSION["usuario"]["privilegio"] == 1) {
	 		header("location:user/admin.php");
	 	}
	 }else {
	 header("location:index.php");
  }
	 ?>
<?php include 'partial/nav.php'; ?>

<section class="hero">
  <div class="container">
    <div class="row">
      <div class="col s12 m8 offset-m2">
        <img src="assets/img/devices2.png" alt="">
        <h3 class="center-align grey-text">Descargar manuales</h3>
        <table class="striped">
        <thead>
          <tr>
              <th>Documento</th>
              <th>Tipo de documento</th>
              <th>Peso</th>
              <th>Opciones</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Funciones del operario</td>
            <td>PDF</td>
            <td>114 kb</td>
            <td><a href="operario.php">Ver</a> / <a href="operario.pdf" target="_blank">Descargar</a></td>
          </tr>
          <tr>
            <td>Funciones del distribuidor</td>
            <td>PDF</td>
            <td>114 kb</td>
            <td><a href="distribuidor.php">Ver</a> / <a href="distribuidor.pdf" target="_blank">Descargar</a></td>
          </tr>
          <tr>
            <td>Funciones del comercializador</td>
            <td>PDF</td>
            <td>114 kb</td>
            <td><a href="comercializador.php">Ver</a> / <a href="comercializador.pdf" target="_blank">Descargar</a></td>
          </tr>
        </tbody>
      </table>
      </div>
    </div>
  </div>
</section>


<?php include 'partial/footer.php'; ?>