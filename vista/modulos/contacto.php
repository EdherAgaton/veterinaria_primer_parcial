<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Monstruitos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="contact">
        <div class="container">
            <div class="section-header text-center">
            <h2>Contáctanos</h2>
            </div>
            <div class="row align-items-center contact-information">
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Dirección</h3>
                            <p>Lago Atitlán 144, Agua Azul, 57500 Cdad. Nezahualcóyotl, Méx., Mexico.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-phone-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Llámanos</h3>
                            <p>+525582048722</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Envíanos un email</h3>
                            <p>Moustritos@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="contact-info">
                        <div class="contact-icon">
                            <i class="fa fa-share"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Síguenos</h3>
                            <div class="contact-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row contact-form">
                <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1118.730406583096!2d-99.03932388738457!3d19.414758279149662!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fceb3485a367%3A0xead7fce94e3a4c70!2sMonstruitos!5e0!3m2!1sen!2sbd!4v1717058665245!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Tu nombre" required="required" data-validation-required-message="Por favor, ingresa tu nombre" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Tu correo electrónico" required="required" data-validation-required-message="Por favor, ingresa tu correo electrónico" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Asunto" required="required" data-validation-required-message="Por favor, ingresa un asunto" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Por favor, ingresa tu mensaje"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="custom-btn-register" type="submit" id="sendMessageButton">Enviar mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
