<?php
    include_once('clase_conexion.php');
	$mysql = new SQLConnection();
    $resultado = $mysql -> getPublications();
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>items</title>
</head>

<body>
    <?php
    foreach($resultado AS $row){
    ?>
    <!-- Articulo -->
    <li class="list-group-item">
        <div class="row my-3">
            <!-- avatar -->
            <div class="col-2 col-lg-1 col-sm-2">
                <img class="rounded-circle border" src="img/avatar-dhg.png" alt="" width="60px">
            </div><!-- avatar -->
            <!-- Contenido -->
            <div class="col-10 col-lg-11 col-sm-10">
                <p class="card-text float-right"><small class="text-muted">3 mins ago</small></p>
                <h6 class="font-weight-bold"><?php echo $row['title'] ?><h6>
                    <p><?php echo $row['description'] ?></p>
                    <h4><?php echo $row['price'] ?></h4>
                    <a href="#" class="btn btn-outline-primary">Más Información</a>
            </div><!-- Contenido -->
        </div>
    </li><!-- Articulo -->
    <?php
	}
	 ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
