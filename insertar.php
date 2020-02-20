<?php
if (isset($_POST['usuario']) and isset($_POST['password']) and isset($_POST['correo'])){
  include 'conexion.php';
  $nombre_de_usuario=mysqli_real_escape_string($conexion, $_POST['usuario']);
  $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
  $correo_electronico=mysqli_real_escape_string($conexion, $_POST['correo']);
  $insertar=mysqli_query($conexion, 'insert into registros(nombre, passwor, correo) values
  ("'.$nombre_de_usuario.'","'.$password.'","'.$correo_electronico.'")') or die ('No se pudo registrar<br>'.mysqli_error($conexion));
  mysqli_close($conexion);
  header ('location: ./');

}else {
  header('location: ./');
}
?>
