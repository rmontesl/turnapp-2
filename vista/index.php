<?php include 'partial/head.php'; ?>

<section class="bg">
  <div class="container">
    <div class="row">
      <div class="col s10 offset-s1 m4 offset-m4 bg-login">
        <div class="bg-logo">
          <img src="assets/img/turnapp.png" alt="" class="responsive-img">
        </div>
        <div class="bg-form">
          <form id="loginForm" action="ValidarCode.php" method="POST">
            <H5 class="grey-text center-align">Iniciar Sesión</H5>
            <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="usuario" type="text" class="validate" name="txtUsuario" placeholder="Ingrese su cedula aquí" required autofocus>
          <label for="usuario">Usuario</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="contraseña" type="password" class="validate" name="txtPassword" placeholder="Ingrese su contraseña aquí" required >
          <label for="contraseña">Contraseña</label>
        </div>
        <div class="input-field col s12">
          <button class="btn bg-btn" type="submit"><i class="material-icons right">send</i>Ingresar</button> 
        </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'partial/footer.php'; ?>