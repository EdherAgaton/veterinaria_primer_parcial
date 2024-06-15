<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Monstruitos</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

         <!-- Favicon -->
         <link href="<?php echo $ruta, "/" ?>img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="vista/recursos/lib/animate/animate.min.css" rel="stylesheet">
        <link href="vista/recursos/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="vista/recursos/lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="vista/recursos/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- Template Stylesheet -->
        <link href="vista/recursos/css/style.css" rel="stylesheet">
        <link href="vista/recursos/css/form.css" rel="stylesheet">
        <link  href="vista/recursos/css/estilos.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    </head>

    <body>

        <?php include "modulos/cabezera.php"; ?>

        <?php
        $paginasSinCarrusel = ["about", "listaproductos", "crear-cita", "servicios", "nosotros", "contacto", "carrito", "registro", "login", "pagar", "perfil_usuario"];
        if (!isset($_GET["pagina"]) || !in_array($_GET["pagina"], $paginasSinCarrusel)) {
            include "modulos/carusel.php";
        }
        ?>
        
        <?php

             if(isset($_GET["pagina"])){

                if($_GET['pagina']=='about' || $_GET['pagina'] == 'inicio'){
                    include "modulos/".$_GET['pagina'].'.php';
                }

                if ($_GET['pagina']=='listaproductos') {
                    include "modulos/".$_GET['pagina'].'.php';
                }

                if ($_GET['pagina']=='crear-cita') {
                    include "modulos/".$_GET['pagina'].'.php';
                }

                if ($_GET['pagina']=='servicios') {
                    include "modulos/".$_GET['pagina'].'.php';
                }

                if ($_GET['pagina']=='nosotros') {
                    include "modulos/".$_GET['pagina'].'.php';
                }

                if ($_GET['pagina']=='contacto') {
                    include "modulos/".$_GET['pagina'].'.php';
                }

                if ($_GET['pagina']=='cart') {
                    include "modulos/".$_GET['pagina'].'.php';
                }

                if ($_GET['pagina']=='registro') {
                    include "modulos/".$_GET['pagina'].'.php';
                }
                if ($_GET['pagina']=='login') {
                    include "modulos/".$_GET['pagina'].'.php';
                }
                 if ($_GET['pagina']=='carrito') {
                     include "modulos/".$_GET['pagina'].'.php';
                 }

                 if ($_GET['pagina']=='pagar') {
                     include "modulos/".$_GET['pagina'].'.php';
                 }

                 if ($_GET['pagina']=='perfil_mascota') {
                    include "modulos/".$_GET['pagina'].'.php';
                }

                 if ($_GET['pagina']=='perfil_usuario') {
                     include "modulos/".$_GET['pagina'].'.php';
                 }


             }else{
                include "modulos/inicio.php";
             }
        ?>
        
        <!-- Contenido End -->
        



        <!-- Footer Start -->
        <?php include "modulos/footer.php"; ?>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

      <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="vista/recursos/lib/easing/easing.min.js"></script>
    <script src="vista/recursos/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="vista/recursos/lib/tempusdominus/js/moment.min.js"></script>
    <script src="vista/recursos/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="vista/recursos/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    
    <!-- Contact Javascript File -->
    <script src="vista/recursos/mail/jqBootstrapValidation.min.js"></script>
    <script src="vista/recursos/mail/contact.js"></script>
    <script src="vista/recursos/js/jquery-3.2.1.js"></script>
	<script src="vista/recursos/js/script.js"></script>

    <!-- Template Javascript -->
    <script src="vista/recursos/js/main.js"></script>
</body>
</html>
