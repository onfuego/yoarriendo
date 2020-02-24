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

    <title>YoArriendo.cl</title>
</head>

<body>
    <!-- navbar -->
    <div class="container-fluid bg-primary fixed-top lead">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand font-weight-bold" href="index.html">YoArriendo.cl</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <!-- Logo Corporativo -->
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
                    </li><!-- Logo Corporativo -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <!-- Búsqueda -->
                <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Buscar Producto..." aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form><!-- Búsqueda -->
            </div>
        </nav>
    </div><!-- navbar -->

    <!-- Sistema de columnas -->
    <div class="container-fluid mt-5 pt-5">
        <div class="row">
            <!-- Columna Izquierda -->
            <div class="col-sm-4 col-lg-3">
                <!-- Información Personal -->
                <div class="card">
                    <div class="text-center subir">
                    </div>
                    <div class="card-body text-center">
                        <h6 class="card-title font-weight-bold">Buscar Producto</h6>
                        <a href="#" class="btn btn-primary">Borrar Filtros</a>
                        <a href="#" class="btn btn-primary">Filtrar</a>
                        <input type="text" class="form-control my-3" name="" value="">
                    </div>
                </div><!-- Información Personal -->

            </div><!-- Columna Izquierda -->

            <!-- Columna Derecha -->
            <div class="col-sm-8 col-lg-9 mt-sm-0 mt-3">
                <div class="card mr-sm-3">
                    <ul class="list-group list-group-flush">
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
                    </ul>
                </div>
            </div><!-- Columna Derecha -->


        </div>
    </div><!-- Sistema de columnas -->

    <footer class="container-fluid bg-primary text-center text-white mt-3 py-3 fixed-bottom">
        <p>Todos los derechos Reservados YoArriendo.cl</p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
