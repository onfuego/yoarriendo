<?php
session_start();
if (empty($_SESSION['nombre'])){
}
?>

<!DOCTYPE html>
<html>
  <head>

    <title>My Wishlist</title>
    <!-- My Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
    <div class="pull-right">
      <img src="https://i.ibb.co/CBCGHjM/pinterest-circle-logo-png-transparent.png" class="user_img_container_sm" alt="Logo">
    </div>

    <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <input class="search_input" type="text" name="" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
        </div>
      </div>
    </div>
    <div class="d-flex justify-content-center links">
      <p><a href="cerrar.php">Cerrar Sesion</a></p>
      <a href="registrar_producto.php" class="ml-2">Nuevo Producto</a>
      <a href="items.php" class="ml-2">Ver Productos</a>
    </div>
  </body>
</html>
