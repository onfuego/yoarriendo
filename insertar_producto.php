<?php
if (isset($_POST['marca']) and isset($_POST['modelo']) and isset($_POST['precio'])){
  include 'conexion_productos.php';
  $marca_producto=mysqli_real_escape_string($conexion, $_POST['marca']);
  $modelo_producto=mysqli_real_escape_string($conexion, $_POST['modelo']);
  $precio_producto=mysqli_real_escape_string($conexion, $_POST['precio']);
  $insertar=mysqli_query($conexion, 'insert into registros(marca, modelo, precio) values
  ("'.$marca_producto.'","'.$modelo_producto.'","'.$precio_producto.'")') or die ('No se pudo registrar<br>'.mysqli_error($conexion));
  mysqli_close($conexion);
  header ('location: ./');

}else {
  header('location: ./');
}
?>
