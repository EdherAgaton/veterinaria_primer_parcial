<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="vista/recursos/css/checkout.css">




</head>





<div class='container'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Orden</h2>
        <div class='line'></div>
        <table class='order-table'>
          <tbody>
          <tr>
            <td><img src='vista/recursos/img/img.png' class='full-width'></img>
            </td>
            <td>
              <br> Saco de croquetas<br> <span class='thin small'> Ganador<br><br></span>
            </td>
          </tr>
          <tr>
            <td>
              <div class='price'>$430</div>
            </td>
          </tr>
          </tbody>
        </table>

        <div class='line'></div>
        <div class='total'>
          <span style='float:left;'>
            <div class='thin dense'>Precio </div>
            <div class='thin dense'>IVA</div>
            TOTAL
          </span>
          <span style='float:right; text-align:right;'>
            <div class='thin dense'>$430</div>
            <div class='thin dense'>$55</div>
            $430
          </span>
        </div>
      </div>
    </div>
    <div class='credit-info'>
      <div class='credit-info-content'>
        <table class='half-input-table'>
          <tr>
            <td>Seleccion su tarjeta:</td>
            <td>
              <div class='dropdown' id='card-dropdown'>
                <div class='dropdown-btn' id='current-card'>Visa</div>
                <div class='dropdown-select'>
                  <ul>
                    <li>Master Card</li>
                    <li>American Express</li>
                  </ul>
                </div>
              </div>
            </td>
          </tr>
        </table>
        <img src='https://dl.dropboxusercontent.com/s/ubamyu6mzov5c80/visa_logo%20%281%29.png' height='80'
             class='credit-card-image' id='credit-card-image'></img>
        Numero de tarjeta
        <input class='input-field'></input>

        Nombre del titular
        <input class='input-field'></input>
        <table class='half-input-table'>
          <tr>
            <td> Venimiento
              <input class='input-field'></input>
            </td>
            <td>CVC
              <input class='input-field'></input>
            </td>
          </tr>
        </table>
        <button class='pay-btn'>Pagar</button>

      </div>

    </div>
  </div>
</div>





<script src="vista/recursos/js/cheackout.js"></script>
</html>
