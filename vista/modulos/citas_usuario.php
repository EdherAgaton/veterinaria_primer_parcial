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
    <title>Citas</title>
</head>
<body>


<?php include "cabezera-nav.php"; ?>

<br>
<a href="#" style="color: black; margin-left: 35px; text-decoration: none;"> Inicio </a> /
<a href="perfil_usuario.php" style="color: black; text-decoration: none;"> Mi perfil</a>/
<a href="perfil_usuario.php" style="color: black; text-decoration: none;"> Citas</a>
<br><br>
<center>
    <div class="animated fadeIn" style="width: 95%;">
        <div class="row">

            <div class="col-md-12">

                <div class="card" style="width: 100%; overflow-x: auto;">
                    <div class="card-header" style="display: flex; flex-direction: space-between;">

                        <div class="col-md-10">
                            <strong class="card-title">Citas</strong>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                
                                <tr>
                                    <th>ID</th>
                                    <th>Veterinario</th>
                                    <th>Dueño</th>
                                    <th>Asunto de la cita</th>
                                    <th>Precio</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td data-label="ID">1</td>
                                    <td data-label="Veterinario">Juan Peréz Fernandéz</td>
                                    <td data-label="Dueño">Andrés Garcia</td>
                                    <td data-label="Asunto de la cita">Corte de Cabello</td>
                                    <td data-label="Precio">$250</td>
                                    <td data-label="Fecha">10/06/24</td>
                                    <td data-label="Hora">10:00 am</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td data-label="ID">1</td>
                                    <td data-label="Veterinario">Juan Peréz Fernandéz</td>
                                    <td data-label="Dueño">Andrés Garcia</td>
                                    <td data-label="Asunto de la cita">Corte de Cabello</td>
                                    <td data-label="Precio">$250</td>
                                    <td data-label="Fecha">10/06/24</td>
                                    <td data-label="Hora">10:00 am</td>
                                    
                                </tr>
                                <tr>
                                    <td data-label="ID">1</td>
                                    <td data-label="Veterinario">Juan Peréz Fernandéz</td>
                                    <td data-label="Dueño">Andrés Garcia</td>
                                    <td data-label="Asunto de la cita">Corte de Cabello</td>
                                    <td data-label="Precio">$250</td>
                                    <td data-label="Fecha">10/06/24</td>
                                    <td data-label="Hora">10:00 am</td>
                                </tr>
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
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>