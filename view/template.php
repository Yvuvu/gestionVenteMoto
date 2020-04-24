<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/moto12.jpg" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
  <link href="../assets/vendor/DataTables/DataTables-1.10.20/css/jquery.dataTables.min.css" rel="stylesheet"/>

  <!-- Template CSS Files -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <?= $additionalCss ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top stock-header">
    <div class="container">

        <div class="logo float-left">
            <h1 class="text-light"><a href="../index.html"><img src="../assets/img/logo1.jpg" alt="" class="img-fluid"><span>Vente de motos</span></a></h1>
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="../index.html">Accueil</a></li>
                <li><a href="../enregistrer.html">Enregistrer</a></li>
                <li><a href="../stock.html">Stock</a></li>
                <li><a href="../vendre.html">Vendre</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <?= $content ?>

  <!-- ======= Footer ======= -->
  <footer class="fixed-bottom" id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Simplon</span></strong>. Tous droits réservés
      </div>
      <div class="credits">
        Designed by <a>Binome12</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../assets/vendor/counterup/counterup.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/jquery-ui-1.12.1/external/jquery/jquery.js"></script>
  <script src="../assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
  <script src="../DataTables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
  <script src="../DataTables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="../DataTables/Select-1.3.1/js/dataTables.select.min.js"></script>

  <!-- Website JS Files -->
  <script src="../assets/js/main.js"></script>
  <?= $additionalJs ?>

</body>

</html>