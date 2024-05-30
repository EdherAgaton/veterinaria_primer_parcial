
    <div class="container">
        <div class="form-header">
            <h1><span>Mascota</span> Feliz</h1>
        </div>
        <div class="form-steps">
            <div class="step active">
                <span>1</span>
                <p>Personal</p>
            </div>
            <div class="step">
                <span>2</span>
                <p>Contacto</p>
            </div>
            <div class="step">
                <span>3</span>
                <p>Seguridad</p>
            </div>
        </div>
        <form id="register-form">
            <div class="form-step active" id="step-1">
                <h2>Información Personal</h2>
                <p>Introduce tus datos personales correctamente</p>
                <label for="name">Nombre</label>
                <input type="text" id="name" name="name" placeholder="e.g. Enrique">
                <label for="surname">Apellido</label>
                <input type="text" id="surname" name="surname" placeholder="e.g. Gaytán">
                <label for="dob">Fecha de Nacimiento</label>
                <div class="dob">
                    <input type="text" id="dob-day" name="dob-day" placeholder="DD">
                    <input type="text" id="dob-month" name="dob-month" placeholder="MM">
                    <input type="text" id="dob-year" name="dob-year" placeholder="YYYY">
                </div>
                <div class="form-buttons">
                    <button type="button" id="next-1">Siguiente</button>
                </div>
            </div>
            <div class="form-step" id="step-2">
                <h2>Contacto</h2>
                <label for="phone">Teléfono</label>
                <input type="text" id="phone" name="phone" placeholder="+525555555555">
                <label for="address">Dirección</label>
                <input type="text" id="address" name="address" placeholder="Street Address">
                <input type="text" id="address2" name="address2" placeholder="App, Suite, Building">
                <label for="city">Ciudad</label>
                <input type="text" id="city" name="city" placeholder="City">
                <label for="state">Estado</label>
                <input type="text" id="state" name="state" placeholder="State/Province">
                <label for="zip">Código Postal</label>
                <input type="text" id="zip" name="zip" placeholder="Postal/Zip Code">
                <label for="country">País</label>
                <select id="country" name="country">
                    <option value="" selected>Selecciona una opción</option>
                    <option value="mx">México</option>
                    <option value="us">Estados Unidos</option>
                    <option value="ca">Canadá</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
                <div class="form-buttons">
                    <button type="button" id="prev-2">Regresar</button>
                    <button type="button" id="next-2">Siguiente</button>
                </div>
            </div>
            <div class="form-step" id="step-3">
                <h2>Seguridad</h2>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Dirección de Correo Electrónico">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" placeholder="Nombre de Usuario">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Contraseña">
                <label for="confirm-password">Confirmar Contraseña</label>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirmar Contraseña">
                <div class="form-buttons">
                    <button type="button" id="prev-3">Regresar</button>
                    <button type="submit" id="register">Registrarse</button>
                </div>
            </div>
        </form>
    </div>
   