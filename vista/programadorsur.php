<?php include 'partial/head.php'; ?>
<?php session_start(); 
	if (isset($_SESSION["usuario"])) {
	 	if ($_SESSION["usuario"]["privilegio"] == 2) {
	 		header("location:user/user.php");
	 	}
	 }else {
	 header("location:index.php");
  }
	 ?>
<?php include 'partial/nav.php'; ?>


<section class="hero">
  
    <div class="row">
      <div class="col s12 m12">
        <h3 class="center-align grey-text">Programador de turnos zona sur</h3>
        <iframe src="../calendario/index.html" frameborder="0" width="100%" height="100%" class="calendario"></iframe>
      </div>
    </div>
 
</section>
<?php include 'partial/footer.php'; ?>


