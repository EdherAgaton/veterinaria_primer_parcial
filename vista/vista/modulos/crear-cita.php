<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Citas</title>
    <style>
        .price-range-container {
            display: none;
        }
    </style>
</head>
<body>
    <div class="appointment-container">
        <div class="appointment-form-box">
            <div class="appointment-form-content">
                <div class="appointment-form-left">
                    <h2>Hola Registra tu Cita Aquí</h2>
                    <form action="">
                        <div>
                            <label>Escriba una descripción breve de la cita</label>
                            <textarea placeholder="Descripción"></textarea>
                        </div>
                        <div>
                            <label>Especialidad</label>
                            <select id="specialty">
                                <option value="">Seleccione especialidad</option>
                                <option value="Embarazo">Consulta de Embarazo</option>
                                <option value="Cirugía General">Cirugía General</option>
                                <option value="Nutrición">Nutrición</option>
                                <option value="Vacunación">Vacunación</option>
                                <option value="Desparasitación">Desparasitación</option>
                            </select>
                        </div>
                        <div id="price-range-container" class="price-range-container">
                            <label>Rango de precios</label>
                            <input type="text" id="price-range" readonly>
                        </div>
                        <div>
                            <label>Especialista</label>
                            <input type="text" placeholder="Especialista">
                        </div>
                        <div>
                            <label>Fecha de la cita</label>
                            <input type="date">
                        </div>
                        <div>
                            <label>Hora de la cita</label>
                            <select>
                                <option>08:00-09:00</option>
                                <option>09:00-10:00</option>
                                <option>11:00-12:00</option>
                                <option>14:00-15:00</option>
                                <option>15:00-16:00</option>
                                <option>16:00-17:00</option>
                                <option>17:00-18:00</option>
                                <option>18:00-19:00</option>
                                <option>19:00-20:00</option>
                            </select>
                        </div>
                        <button type="submit" class="appointment-btn-register">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('specialty').addEventListener('change', function() {
            var specialty = this.value;
            var priceRangeContainer = document.getElementById('price-range-container');
            var priceRange = document.getElementById('price-range');

            var prices = {
                'Embarazo': '250 MXN',
                'Cirugía General': '1000 - 5000 MXN',
                'Nutrición': '150 MXN',
                'Vacunación': '20 - 100 MXN',
                'Desparasitación': '10 - 100 MXN'
            };

            if (specialty) {
                priceRange.value = prices[specialty] || '';
                priceRangeContainer.style.display = 'block';
            } else {
                priceRange.value = '';
                priceRangeContainer.style.display = 'none';
            }
        });
    </script>
</body>
</html>
