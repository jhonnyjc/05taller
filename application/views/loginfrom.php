
<?php
switch($msg){
    case '1':
      $mensaje="error de ingreso";
      break;

      case '2':
      $mensaje="acceso no valido";
      break;

      case '3':
      $mensaje="gracias por usar el sistema";
      break;

     default:
        $mensaje="ingrese sus datos";
      break; 


}

?>
 
<div class="login-box">
  <div class="login-logo center">
    <a href="../../index2.html"><b>TALLER</b>ELECTRONICO</a>
  </div>
  <!--<img src="imgtaller/logoPS2.jpg" height="100" width="400" alt="">-->
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"><?php echo $mensaje; ?></p>


     
      <?php
      echo form_open_multipart('usuarios/validarusuario');
      
      ?>
      
        <div class="input-group mb-3">
          <input type="text" name="login" class="form-control" placeholder="Login">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                recordar
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      
  <?php
  echo form_close();

  ?>



      <div class="social-auth-links text-center mb-3">
        <p>- bienvenido -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> iniciar con Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> iniciar con  Google+
        </a>
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">olvide mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Registrar nuevo usuario</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>