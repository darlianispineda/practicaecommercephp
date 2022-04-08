<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../util/css/css/all.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="../util/css/adminlte.min.css">

  <link rel="stylesheet" href="../util/css/toastr.min.css">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
      
    <a href="../index.php"><img src="../util/img/logo.jpg" class="profile-user-img img-fluid img-circle"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Inicie sesión</p>

      <form id="form-login">
        <div class="input-group mb-3">
          <input id="user" type="text" class="form-control" placeholder="User" require>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input id="pass" type="password" class="form-control" placeholder="Password" require>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="social-auth-links text-center mb-3">
        
        <button href="#" class="btn btn-block btn-primary" type="submit">
           Iniciar sesión
        </button>
        
      </div>
      </form>

      
     

      <p class="mb-1">
        <a href="">He olvidado mi contraseña</a>
      </p>
      <p class="mb-0">
        <a href="register.php" class="text-center">Registrarse</a>
      </p>
    </div>
   
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../util/js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../util/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../util/js/adminlte.min.js"></script>


<script src="../util/js/toastr.min.js"></script>

<script src="login.js"></script>
</body>
</html>
