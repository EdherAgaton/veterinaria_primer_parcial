

<link rel="stylesheet" href="vista/recursos/css/cart.css">





<div class="container px-3 my-5 clearfix">
  <!-- Shopping cart table -->
  <div class="card" style="width: 95%" >
    <div class="card-header" >
      <h2>Carrito</h2>
    </div>
    <div class="card-body" >
      <div class="table-responsive">
        <table class="table table-bordered m-0">
          <thead>
          <tr>
       
            <th class="text-center py-3 px-4" style="min-width: 400px;">Nombre del Producto</th>
            <th class="text-right py-3 px-4" style="width: 100px;">Precio</th>
            <th class="text-center py-3 px-4" style="width: 120px;">Cantidad</th>
            <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
            <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title="" data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
          </tr>
          </thead>
          <tbody>

          <tr>
            <td class="p-4">
              <div class="media align-items-center">
                <img src="vista/recursos/img/img.png" class="d-block ui-w-40 ui-bordered mr-4" alt="">
                <div class="media-body">
                  <a href="#" class="d-block text-dark">Saco de croquetas</a>
                  <small>


                    <span class="text-muted">Ganador</span>
                  </small>
                </div>
              </div>
            </td>
            <td class="text-right font-weight-semibold align-middle p-4">$57.55</td>
            <td class="align-middle p-4"><input type="text" class="form-control text-center" value="2"></td>
            <td class="text-right font-weight-semibold align-middle p-4">$115.1</td>
            <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title="" data-original-title="Remove">×</a></td>
          </tr>



          </tbody>
        </table>
      </div>
      <!-- / Shopping cart table -->

      <div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
        <div class="mt-4">
          <label class="text-muted font-weight-normal">Codigo Promocional</label>
          <input type="text" placeholder="ABC" class="form-control">
        </div>
        <div class="d-flex">
          <div class="text-right mt-4 mr-5">
            <label class="text-muted font-weight-normal m-0">Descuento</label>
            <div class="text-large"><strong>$20</strong></div>
          </div>
          <div class="text-right mt-4">
            <label class="text-muted font-weight-normal m-0">Precio Total</label>
            <div class="text-large"><strong>$1164.65</strong></div>
          </div>
        </div>
      </div>

      <div class="float-right">
        <a href="index.php?pagina=index" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Volver</a>
        <a href="index.php?pagina=pagar" class="btn btn-lg btn-danger mt-2">Pagar</a>

      </div>

    </div>
  </div>
</div>


