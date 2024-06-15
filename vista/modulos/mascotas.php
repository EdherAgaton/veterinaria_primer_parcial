<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../recursos/css/perfil_usuario.css" rel="stylesheet">
    <link rel="stylesheet" href="../recursos/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ec9c316b9a.js" crossorigin="anonymous"></script>
    <title>Mascotas</title>


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
    <a href="mascotas.php" style="color: black; text-decoration: none;"> Mascota</a>
    <br><br>

<center>
    <div class="animated fadeIn" style="width: 95%;">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="width: 100%; overflow-x: auto;">
                    <div class="card-header" style="display: flex; flex-direction: space-between;">

                        <div class="col-md-10">
                            <strong class="card-title">Mascotas</strong>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                
                                <tr>
                                    <th>ID</th>
                                    <th>Dueño</th>
                                    <th>Nombre de la Mascota</th>
                                    <th>Foto</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Juan Perez</td>
                                    <td>Canela</td>
                                    <th><img src="img/blanco.jpg" alt="" class="foto"></th>
                                    <td><!--<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalEditarPerfil">Editar</button>-->
                                         <a href="perfil_mascota.php"><button type="button" class="btn btn-info">Detalle</button></a></td>
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

<div class="modal fade" id="modalEditarPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Perfil Mascota</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Nombre</span>
                </div>
                <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="Nombre" aria-label="Username" aria-describedby="basic-addon1" id="NOMBRE" value="">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Correo Eléctronico</span>
                </div>
                <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo Electronico" aria-label="Username" aria-describedby="basic-addon1" value="">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Dirección</span>
                </div>
                <input type="text" class="form-control" placeholder="Direccion" id="nombre" name="nombre" aria-label="Username" aria-describedby="basic-addon1" id="NOMBRE" value="">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">Telefono</span>
                </div>
                <input type="number" class="form-control" placeholder="Telefono" id="nombre" name="nombre" aria-label="Username" aria-describedby="basic-addon1" id="NOMBRE" value="">
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">Imagen</span>
                </div>
                <div class="custom-file">
                  <input type="file" class="custom-file-input foto" id="foto" name="foto" >
                  <label class="custom-file-label" for="foto">Cambiar foto</label>
                </div>
              
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </div>
  </div>

    
</body>
<script src="js/modal.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>
</body>
</html>