<body>

<h2>Nuevo Producto</h2>

<form action="insertar_producto.php" method="POST" enctype="application/x-www-form-urlencoded">
  <label for="fname">Marca:</label><br>
  <input type="text" id="box1" name="marca"><br><br>
  <label for="lname">Modelo:</label><br>
  <input type="text" id="box2" name="modelo"><br><br>
  <label for="lname">Precio:</label><br>
  <input type="text" id="box3" name="precio"><br><br>
  <label for="lname">Fotografía:</label><br>
  <input type="file" id="lbox4" name="fotografia"><br><br>
  <div class="d-flex justify-content-center mt-3 login_container">
    <button value"Registrarse" type="submit" name="button" class="btn login_btn">Registrar</button>
  </div>
</form>

</body>
