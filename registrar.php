<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>My Wishlist</title>
  <!-- My Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
  <div class="container h-100">
    <div class="d-flex justify-content-center h-100">
      <div class="user_card">
        <div class="d-flex justify-content-center">
          <div class="user_img_container_lg">
            <img src="https://i.ibb.co/CBCGHjM/pinterest-circle-logo-png-transparent.png" class="brand_logo" alt="Logo">
          </div>
        </div>
        <div class="d-flex justify-content-center form_container_register">
          <form action="insertar.php" method="POST" enctype="application/x-www-form-urlencoded">
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" id="caja1" name="usuario" class="form-control input_user" value="" placeholder="Nombre de Usuario" required autofocus>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
              </div>
              <input type="password" id="caja2" name="password" class="form-control input_user" value="" placeholder="Password" required>
            </div>
            <div class="input-group mb-3">
              <div class="input-group-append">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
              </div>
              <input type="email" name="correo" id="caja3" class="form-control input_pass" value="" placeholder="Correo Electrónico" required>
            </div>
            <div class="d-flex justify-content-center mt-3 login_container">
              <button value"Registrarse" type="submit" name="button" class="btn login_btn">Registrarme</button>
            </div>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>
