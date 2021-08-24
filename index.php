<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ProyectoNA</title>
  <meta name="description" content="la descripcion de la web">
  <?php include 'head.php';?>
</head>

<body>
<?php include 'nav.php';?>

<section class="mycontainer">

    <?php include 'article-paid.php'; ?><!--Articulos Pagos (Los articulos del HOME SLIDER)-->
    <div class="container">
      <div class="row myrow">
        <div class="col-lg-4 home-widget">
          <div class="header-titles" id="header-titles-left">
            <span><h4>¿Ya te registraste?</h4></span>
            <span><a href="#">Registrarse<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></span>
          </div>
        </div>
        <div class="col-lg-4 home-widget">
          <div class="header-titles" id="header-titles-center">
            <span><h4>¿Ya comparaste tus favoritos?</h4></span>
            <span><a href="#">Comparar<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></span>
          </div>
        </div>
        <div class="col-lg-4 home-widget">
          <div class="header-titles" id="header-titles-right">
            <span><h4>¿Ya publicaste tu vehículo?</h4></span>
            <span><a href="#">Publicar<i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></span>
          </div>
        </div>
        <?php include 'brands.php'; ?><!--Marcas-->
      </div>
    </div>
    <div class="container">
      <div class="col-lg-12 publicidad-widget">
        <img src="img/publicidad/publicidad1.jpg" alt="">
      </div>
    </div>
    <?php include 'article.php'; ?><!--Articulos (Carros publicados)-->

</section><!--Global container-->

<?php include 'footer.php'; ?>
</body>

</html>
