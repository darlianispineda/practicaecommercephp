<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Registro</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../util/css/css/all.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="../util/css/adminlte.min.css">

  <link rel="stylesheet" href="../util/css/toastr.min.css">
</head>

<body class="hold-transition login-page">
<div class="mt-5">
  <div class="login-logo">
      
    <a href="../index.php"><img src="../util/img/logo.jpg" class="profile-user-img img-fluid img-circle"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Registrarse</p>

      <form id="form-register">
          <div class="col-sm-12">
              <div class="form-group">
                    <label for="username">User Name</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Ingrese username">
             </div>
          </div>
          <div class="row">
              <div class="col-sm-6">
                 <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Ingrese contraseña">
                  </div>
                  
                  <div class="form-group">
                    <label for="nombres">Nombres</label>
                    <input type="text" name="nombres" class="form-control" id="nombres" placeholder="Ingrese sus nombres">
                  </div>

                  <div class="form-group">
                    <label for="dni">DNI</label>
                    <input type="text" name="dni" class="form-control" id="dni" placeholder="Ingrese su dni">
                  </div>

                  <div class="form-group">
                    <label for="tlf">Telefono</label>
                    <input type="text" name="tlf" class="form-control" id="tlf" placeholder="Ingrese su tlf">
                  </div>

              </div>
              <div class="col-sm-6">
                  <div class="form-group">
                    <label for="passrepeat">Repetir  contraseña</label>
                    <input type="password" name="passrepeat" class="form-control" id="passrepeat" placeholder="Repita la contraseña">
                  </div>

                  <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos" class="form-control" id="apellidos" placeholder="Ingrese sus apellidos">
                  </div>

                  <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="mail" name="email" class="form-control" id="email" placeholder="Ingrese su email">
                  </div>
              </div>
          </div>

                <div class="col-sm-12">
                    <div class="form-group mb-0">
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="terms" class="custom-control-input" id="terms">
                        <label class="custom-control-label" for="terms">I agree to the <a href="#">terms of service</a>.</label>
                        </div>
                    </div> 
                  </div> 
          
          
                <div class="card-footer text-center">
                  <button type="submit" class="btn btn-lg bg-gradient-primary">Registrarse</button>
                </div>
              </form>

                <p class="mb-0">
                    <a href="login.php" class="text-center">Ya estoy registrado</a>
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

<!-- jquery-validation -->
<script src="../util/js/jquery.validate.min.js"></script>
<script src="../util/js/additional-methods.min.js"></script>

<script src="login.js"></script>

<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#form-register').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
