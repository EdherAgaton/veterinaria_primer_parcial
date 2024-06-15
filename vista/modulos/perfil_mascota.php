<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../recursos/css/perfil_usuario.css" rel="stylesheet">
    <link rel="stylesheet" href="../recursos/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.0/css/select.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedcolumns/3.2.2/css/fixedColumns.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/scroller/2.0.2/css/scroller.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/keytable/2.1.2/css/keyTable.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.0.0/css/rowGroup.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/searchpanes/1.2.1/css/searchPanes.bootstrap.min.css">

    <script src="https://kit.fontawesome.com/ec9c316b9a.js" crossorigin="anonymous"></script>
    <title>Perfil Mascota</title>


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
</head>

<body>

<?php include "cabezera-nav.php"; ?>
<br>
<a href="#" style="color: black; margin-left: 35px; text-decoration: none;"> Inicio </a> /
<a href="perfil_usuario.php" style="color: black; text-decoration: none;"> Mi perfil</a>/
<a href="mascotas.php" style="color: black; text-decoration: none;"> Mascotas</a>/
<a href="perfil_mascota.php" style="color: black; text-decoration: none;"> Perfil Mascota</a>
<br>
<br>
<div class="container">
    <div class="row">
        <form method="post" id="perfil">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad">
                <div class="panel panel-success"><br>
                    <h2 class="panel-title">
                        <center>
                            <font size="5"><i class="fas fa-solid fa-paw"></i>PERFIL MASCOTA</font>
                        </center>
                    </h2>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 " align="center">
                                <div id="load_img">
                                    <img class="img-responsive" src="img/blanco.jpg" alt="Foto" style=" border-radius: 7px;
                            box-shadow: 0 0 12px rgba(0, 0, 0, .5)">
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- <div class="form-group">
                                                          <input class='filestyl' data-buttonText="Logo" type="file" name="imagefile" id="imagefile" >
                                                      </div>-->
                                    </div>

                                </div>
                            </div>
                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-condensed">
                                    <tbody>
                                    <tr>
                                    <tr>
                                        <td>Especie:</td>
                                        <td>Perro</td>
                                    </tr>
                                    <td class='col-md-3'>Nombre:</td>
                                    <td>Canela</td>
                                    </tr>
                                    <tr>
                                        <td>Dueño:</td>
                                        <td>Juan Perez</td>
                                    </tr>
                                    <tr>
                                        <td>Raza:</td>
                                        <td>Coquer</td>
                                    </tr>
                                    <tr>
                                        <td>Sexo:</td>
                                        <td>Hembra</td>
                                    </tr>
                                    <tr>
                                        <td>Color:</td>
                                        <td>Blanco</td>
                                    </tr>
                                    <tr>
                                        <td>Fecha de nacimiento:</td>
                                        <td>10/05/2019</td>
                                    </tr>
                                    <tr>
                                        <td>Peso:</td>
                                        <td>10kg</td>
                                    </tr>
                                    <td>Edad:</td>
                                    <td>5 años</td>
                                    </tr>
                                    <tr>
                                        <td>Señas Particulares:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Antecedentes:</td>
                                        <td></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- <div class="panel-footer text-center">
                                  <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalEditarPerfil" >Editar</button>  </center>
                                        </div>-->
                        </div>
                    </div>
                </div>


                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



                <?php include "footer-nav.php"; ?>

</body>
<script src="js/modal.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

</html>