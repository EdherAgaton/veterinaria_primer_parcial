<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Responsivo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .site-footer {
            background-color: #F63D3D;
            color: #1f1f1f;
            padding: 20px 0;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: flex-start;
        }

        .footer-section {
            margin: 20px;
            flex: 1;
            min-width: 200px; /* Asegura que las secciones no sean demasiado estrechas */
        }

        .footer-section h3 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #1f1f1f;
        }

        .footer-section ul {
            list-style: none;
            padding: 0;
        }

        .footer-section ul li {
            margin: 5px 0;
        }

        .footer-section ul li a {
            color: #fff;
            text-decoration: none;
        }

        .footer-section ul li a:hover {
            text-decoration: underline;
        }

        .footer-section p {
            margin: 10px 0;
        }

        .social-icons a {
            margin: 0 10px;
        }

        .social-icons img {
            width: 30px;
            height: 30px;
        }

        .payment-methods {
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .payment-methods img {
            width: 50px;
            height: auto;
            margin: 0 10px;
        }

        @media (max-width: 768px) {
            .footer-section {
                text-align: center;
                flex: 1 1 100%;
            }

            .payment-methods {
                margin-top: 20px;
                flex: 1 1 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>

<footer class="site-footer">
    <div class="footer-section">
        <h3>Corporativo</h3>
        <ul>
            <li><a href="vista/modulos/nosotros.php">Nosotros</a></li>
            <li><a href="vista/modulos/contacto.php">Contáctanos</a></li>
        </ul>
    </div>
    <div class="footer-section">
        <h3>Información</h3>
        <ul>
            <li><a href="vista/modulos/product.php">Tienda en Línea</a></li>
        </ul>
    </div>
    <div class="footer-section">
        <h3>Servicios</h3>
        <ul>
            <li><a href="vista/modulos/servicios.php">Servicios Generales</a></li>
        </ul>
    </div>
    <div class="footer-section">
        <h3>Conoce Nuestras redes sociales</h3>
        <div class="social-icons">
            <a href="#"><img src="../recursos/img/icons8-facebook-nuevo-50.png" alt="Facebook"></a>
            <a href="#"><img src="../recursos/img/icons8-instagram-50.png" alt="Instagram"></a>
        </div>
    </div>
    <div class="payment-methods">
        <img src="../recursos/img/visa.png" alt="Visa">
        <img src="../recursos/img/mastercard.png" alt="MasterCard">
        <img src="../recursos/img/amex.png" alt="American Express">
    </div>
</footer>

</body>
</html>
