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
        <h3 class="center-align grey-text">Funciones del operario</h3>
        <p class="grey-text justify-align">
          Mi compromiso es con la gestión estratégica de Granos del Atlántico a través del cumplimiento de las siguientes funciones:
          <ol class="grey-text">
            <li>1. Cumplir las funciones específicas del rol OPERARIO:</li>
            <ol>
              <li>Recepción de materia prima.</li>
              <li>Realizar muestreo y análisis de la mercancía para determinar si se acepta o rechaza el pedido.</li>
              <li>Almacenar la materia prima y el material de empaque.</li>
              <li>Realizar fumigación a la materia prima de manera preventiva y verificar los tiempos de fumigación. 1.5. Limpieza manual al grano y retiro de impurezas.</li>
              <li>Limpieza manual al grano y retiro de impurezas.</li>
              <li>Almacenar material limpio y selecto.</li>
              <li>Realizar muestreo y análisis fisicoquímico para proceso de empaque y embalaje.</li>
              <li>Verificar los registros de muestreo y análisis de los pesos netos del producto empacado.</li>
              <li>Almacenar producto terminado</li>
              <li>Asistir el cargue de los productos terminados en los vehículos de distribución.</li>
              <li>Lavado de maquinas y mantenimiento.</li>
            </ol>
            <li>A guardar rigurosa moral y buen trato para con sus compañeros de trabajo y con el público en general.</li>
            <li>A abstenerse de propiciar desavenencias con sus compañeros de labores.</li>
            <li>A cuidar su presentación personal y manejo de uniforme, conforme a los requerimientos de su cargo.</li>
            <li>A guardar buena conducta en todo sentido y a obrar con espíritu de leal colaboración y disciplina general.</li>
            <li>A ejecutarlosprocesos trabajossiguiendolasinstrucciones,losprocesosyprocedimientosque
garantizan los estándares de calidad establecidos por GRANOS DEL ATLÁNTICO.</li>
<li>A recibir y aceptar de buena manera las ordenes, instrucciones y correcciones relacionadas con su trabajo.</li>
<li>A laborar la jornada ordinaria en los turnos y dentro de las horas señaladas, pudiendo hacer éste
ajustes o cambios de horario cuando se estime conveniente.</li>
<li>Programar diariamente su trabajo y asistir puntualmente a las reuniones y/o capacitaciones a las
cuales hubiere sido citado.</li>
<li>Avisar oportunamente y por escrito, ausencia laboral, como también todo cambio en su dirección,
teléfono o ciudad de residencia.</li>
          </ol>

        </p>
        <a href="manuales.php" class="center-align">Volver al listado</a>
        
      </div>
    </div>
  </div>
</section>


<?php include 'partial/footer.php'; ?>