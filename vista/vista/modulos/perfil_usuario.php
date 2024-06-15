<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">



  <link href="../recursos/css/perfil_usuario.css" rel="stylesheet">
    <link rel="stylesheet" href="../recursos/css/style.css">

  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/ec9c316b9a.js" crossorigin="anonymous"></script>


    <!--   -->
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
  <title>Perfil Usuario</title>
</head>



<body>

<?php include "cabezera-nav.php"; ?>

<!--

  <br>
  <a href="index.php" style="color: black; margin-left: 35px; text-decoration: none;"> Inicio </a> /
  <a href="perfil_usuario.html" style="color: black; text-decoration: none;"> Mi perfil</a>
  <br><br>

  -->

  <section class="seccion-perfil-usuario">
    <div class="perfil-usuario-header">
      <div class="perfil-usuario-portada">
        <div class="perfil-usuario-avatar">
        <img src="vista/recursos/img/usuario.jpg" alt="Imagen de usuario">
        </div>
        <button type="button" class="boton-editar" data-toggle="modal" data-target="#modalEditarPerfil">Editar
          Perfil</button>
      </div>
    </div>
    <div class="perfil-usuario-body">
      <div class="perfil-usuario-bio">
        <h3 class="titulo">Juan Peréz Fernandéz</h3>
        <i class="bi bi-1-circle-fill"></i>
      </div>
      <div class="perfil-usuario-datos">
        <ul class="lista-datos">
          <li><i class="icono fas fa-map-marker-alt"></i> Dirección: Calle Zandunga No. 399</li>
          <li><i class="icono fas fa-solid fa-paw"></i>Mascota: Canela</li>
          <li><i class="icono fas fa-phone-alt"></i> Telefono: 5548150247</li>
        </ul>
        <ul class="lista-datos">
          <li><i class="icono fas fa-regular fa-envelope"></i> Correo Electronico: juanperez@gmail.com</li>
        </ul>
      </div>
      <!--<div class="redes-sociales">
                <a href="" class="boton-redes facebook fab fa-facebook-f"><i class="icon-facebook"></i></a>
                <a href="" class="boton-redes twitter fab fa-twitter"><i class="icon-twitter"></i></a>
                <a href="" class="boton-redes instagram fab fa-instagram"><i class="icon-instagram"></i></a>
            </div>-->
      <div class="perfil-usuario-acciones">
        <a href="citas_usuario.php" style="text-decoration: none; "><button type="button" class="button">
            <i class="icono fas fa-solid fa-calendar"></i>Citas</button></a>
        <a href="historial.php" style="text-decoration: none; "><button type="button" class="button">
            <i class="icono fas fa-thin fa-clock"></i>Historial</button></a>
        <a href="mascotas.php" style="text-decoration: none;"><button type="button" class="button">
            <i class="icono fas fa-solid fa-paw"></i>Mascota</button></a>
        <!--<a href="#" style="text-decoration: none;"><button type="button" class="button">
            <i class="icono fas fa-shopping-cart"></i>Pedidos</button></a>-->
      </div>
  </section>



  <br><br><br><br><br><br>

<?php include "footer-nav.php"; ?>


  <div class="modal fade" id="modalEditarPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Perfil</h5>
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
              <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="Nombre"
                aria-label="Username" aria-describedby="basic-addon1" id="NOMBRE" value="">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Correo Eléctronico</span>
              </div>
              <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo Electronico"
                aria-label="Username" aria-describedby="basic-addon1" value="">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Dirección</span>
              </div>
              <input type="text" class="form-control" placeholder="Direccion" id="nombre" name="nombre"
                aria-label="Username" aria-describedby="basic-addon1" id="NOMBRE" value="">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Telefono</span>
              </div>
              <input type="number" class="form-control" placeholder="Telefono" id="nombre" name="nombre"
                aria-label="Username" aria-describedby="basic-addon1" id="NOMBRE" value="">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Imagen</span>
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input foto" id="foto" name="foto">
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

<script src="../recursos/js/modal.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</html>