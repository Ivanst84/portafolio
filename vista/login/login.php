
  <?php require_once("../../config.php"); 
  
  if(isset($_POST["enviar"]) and $_POST["enviar"]=="si"){
    require_once("../../modelo/Usuario.php");
    /*TODO: Inicializando Clase */
    $usuario = new Usuario();
    $usuario->login();
  }
?>
<script src="https://www.google.com/recaptcha/api.js?render=6LdlqqIiAAAAAAnzJDC4_ZF7K743HAxpfXavtrYK"></script>
<script>
grecaptcha.ready(function() {
    grecaptcha.execute('6LdlqqIiAAAAAAnzJDC4_ZF7K743HAxpfXavtrYK', {action: 'login'}).then(function(token) {
        document.getElementById('recaptcha-response').value = token;
    });
});
</script>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:image:type" content="image/png">

    <link rel="stylesheet" href="../public/css/estilos.css">

    

    <title>URC::Acceso</title>
</head>

<body>
    <div class="page-center">
        <div class="page-center-in">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">
                    <form class="sign-box" action="" method="post" id="login_form">

                    <input type="hidden" name="recaptcha-response" id="recaptcha-response">

                            <input type="hidden" id="rol_id" name="rol_id" value="1">



                            <!-- Capturando mensaje de error -->
                            <?php
            if (isset($_GET["m"])){
              switch($_GET["m"]){
                case "1";
                  ?>
                            <div class="alert alert-warning" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong class="d-block d-sm-inline-block-force">Error!</strong> Datos Incorrectos
                            </div>
                            <?php
                break;

                case "2";
                  ?>
                            <div class="alert alert-warning" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong class="d-block d-sm-inline-block-force">Error!</strong> Campos vacios
                            </div>
                            <?php
                break;
              }
            }
          ?>
                
<style>
.login-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

/* Ajusta los estilos según tu preferencia */
.logo {
  margin-bottom: 1rem;
}

.form-title {
  margin-bottom: 2rem;
}

.signup-link-container {
  margin-top: 1rem;
}

.signup-link {
  margin-left: 0.5rem;
  text-decoration: none;
  color: #007bff;
}
</style>   
  
                            <div class="login-container text-align: center">
  <div class="logo">
    <span class="logo-text">Union Revolucionaria</span>
  </div>
  <form class="login-form" action="" method="POST">
    <h2 class="form-title ">Iniciar sesión</h2>
    <div class="form-group">
      <label for="email" class="form-label">Usuario</label>
      <input type="text" id="email" name="email" class="form-control" placeholder="Ingrese email" required>
    </div>
    <div class="form-group">
      <label for="pass" class="form-label">Contraseña</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Ingrese Contraseña" required>
    </div>
    <input type="hidden" name="enviar" class="form-control" value="si">
    <button type="submit" class="btn btn-info btn-block">Acceder</button>
  </form>
  <div class="signup-link-container">
    <p class="signup-link-text">¿No tienes permiso URC?</p>
    <a href="../view/Permisos" class="signup-link">Regístrate</a>
  </div>
</div>
                    </form>
                </div>
            </div>
        </div>


</body>

</html>