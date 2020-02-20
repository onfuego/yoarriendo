<?php
	$conexion=mysqli_connect('localhost','root','','productos');
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>

<br>

	<table border="1">
		<tr>
			<td>Marca</td>
			<td>Modelo</td>
			<td>Precio</td>
		</tr>

		<?php
		$sql="SELECT * from registros";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['marca'] ?></td>
			<td><?php echo $mostrar['modelo'] ?></td>
			<td><?php echo $mostrar['precio'] ?></td>
		</tr>
	<?php
	}
	 ?>
	</table>

</body>
</html>
