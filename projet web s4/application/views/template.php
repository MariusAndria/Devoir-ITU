<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php  echo css_loader('bootstrap.min') ;?>" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php  echo css_loader('shop-homepage') ;?>" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <section>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">exam final s4</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('Welcome') ;?>">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Load/Changer_Caisse') ;?>">Changer Caisse</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </section>
  <!-- Page Content -->
  <div class="container">

      <div class="row">

            <div class="col-lg-3">

              <h1 class="my-4">Caisse <?php echo $caisse; ?></h1>
              <div class="list-group">
                <a href="#" class="list-group-item">Menu 1</a>
                <a href="#" class="list-group-item">Menu 2</a>
                <a href="#" class="list-group-item">Menu 3</a>
              </div>

            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-9">

              <div class="row">
        		      <?php include($template); ?>
              </div>
            </div>
            <!-- /.col-lg-9 -->

          </div>
          <!-- /.row -->
  <section>
  </div>
  <!-- /.container -->
  </section>
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php  echo js_loader('jquery.min') ;?>"></script>
  <script src="<?php  echo js_loader('bootstrap.bundle.min') ;?>"></script>

</body>

</html>
