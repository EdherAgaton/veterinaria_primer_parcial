<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../recursos/css/perfil_usuario.css" rel="stylesheet">
    <link rel="stylesheet" href="../recursos/css/style.css">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ec9c316b9a.js" crossorigin="anonymous"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../recursos/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../recursos/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../recursos/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="./recursos/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />


    <!-- Template Stylesheet -->
    <link href="../recursos/css/style.css" rel="stylesheet">
    <link href="../recursos/css/form.css" rel="stylesheet">
    <link  href="../recursos/css/estilos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">


    <!--   -->
    <title>Historial</title>
</head>

<body>

<?php include "cabezera-nav.php"; ?>


<br>
<a href="#" style="color: black; margin-left: 35px; text-decoration: none;"> Inicio </a> /
<a href="perfil_usuario.php" style="color: black; text-decoration: none;"> Mi perfil</a>/
<a href="historial.php" style="color: black; text-decoration: none;"> Mi Historial</a>
<br><br>
<center>
    <div class="animated fadeIn" style="width: 95%;">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="width: 100%; overflow-x: auto;">
                    <div class="card-header" style="display: flex; flex-direction: space-between;">

                        <div class="col-md-10">
                            <strong class="card-title">
                                <center>Historial De Pedidos</center>
                            </strong>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">No. de Pedido</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Estatus</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Arena Para Gato
                                </td>
                                <td><img src="img/arena.jpg" class="imagen" alt=""></td>
                                <td>$150.00</td>
                                <td>Entregado</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Shampoo para perro</td>
                                <td><img src="img/shampoo.jpg" class="imagen" alt=""></td>
                                <td>$75.00</td>
                                <td>Entregado</td>
                            </tr>
                            </tbody>
                        </table>


                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>

<br><br><br><br><br><br>

<?php include "footer-nav.php"; ?>
</body>

</html>