<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="stylesheet" href="../recursos/css/product.css">
    <link rel="stylesheet" href="../recursos/css/style.css">
    <link href="../recursos/css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>





<?php include "cabezera-nav.php"; ?>



<section class="products_single">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-12">
        <div class="products_list_single">
          <div class="row no-gutters">
            <div class="col-md-6">
              <div class="product_item_image_wrapper">

                <img src="../recursos/img/img.png" alt="Product Image" class="product_item_image">
              </div>
            </div>
            <div class="col-md-6">
              <div class="product_item_content p-3">
                <h6 class="title">Saco de croquetas</h6>
                <div class="price">
                  $480
                </div>
                <div class="description">
                  Sacos de croquetas para perros de todas las edades.
                </div>
                <div class="product_item_footer">
                  <a href="#" class="details_link">
                    <button class="btn btn-primary-soft">Agregar al carrito</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="product_single_specification mb-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-tabs" id="mytab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Descripcion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="Des-tab" data-toggle="tab" href="#Des" role="tab" aria-controls="Des" aria-selected="true">Informacion adicional</a>
          </li>
          </li>
        </ul>
        <div class="tab-content" id="mytabcontent">
          <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="table-responsive mt-5">
              <table class="table table-bordered">
                <tbody>
                <tr>
                  <td>Razas grandes</td>
                  <td>Pelaje seco</td>
                </tr>
                <tr>
                  <td>Si</td>
                  <td>No</td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="tab-pane fade" id="Des" role="tabpanel" aria-labelledby="Des-tab">

            <div class="table-responsive mt-5">
              <table class="table table-bordered">
                <tbody>
                <tr>
                  <td>Otra informacion</td>
                  <td>Vitaminado</td>
                </tr>
                <tr>
                  <td>Calcio</td>
                  <td>Si</td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<?php include "footer-nav.php"; ?>

</body>
</html>
