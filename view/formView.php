<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion de vente de moto</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon">
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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/>  
    <link rel="stylesheet" href="../assets/vendor/font/css/font-awesome.min.css"/>
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheets" href="../assets/vendor/font/css/font-awwesome.min.css">
    <link rel="stylesheets" href="../assets/css/style.css">  
    <link rel="stylesheets" href="../assets/css/style2.css">
    <link rel="stylesheet"  href="../assets/css/myStyle.css"/>
</head>
<body>
<header id="header" class="fixed-top ">
    <div class="container">
        <div class="logo float-left">
            <h1 class="text-light"><a href="../index.html"><span>Gestion&nbsp;parc&nbsp;moto</span></a></h1>
        </div>
        <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="#"><i class="fa fa-home"></i>&nbsp;Accueil</a></li>
          <li class="active"><a href="../formControl.Class.php"><i class="fa fa-plus"></i>&nbsp;Enregistrer</a></li>
          <li><a href="#"><i class="fa fa-motorcycle"></i>&nbsp;Stock</a></li>
          <li><a href="#"><i class="fa fa-shopping-cart"></i>&nbsp;Vendre</a></li>
        </ul>
        </nav>
    </div>
</header>
<main id="main">
<div class="container-fluid enregistrer">
    <fieldset class="feuillebox">            
    <form action="../controller/formController.php" method="POST">
        <fieldset>
            <legend>Caractéristiques de la moto</legend>
        <div class="form-row">
            <div class="col-md-6 mb-4">
                <fieldset class="fieldcadre">
                    <div class="input-group champinput">
                        <div class="input-group-prepend">
                            <span class="input-group-text inputlabel" id="inputGroupPrepend3">Numéro de série</span>
                        </div>
                        <input type="text" class="form-control inputborder" id="validationServerUsername" name="serialNumber" placeholder="entrer le numéro de serie..." aria-describedby="inputGroupPrepend3" required>
                    </div>
                </fieldset>                
            </div>
            <div class="col-md-6 mb-4">
                <fieldset class="fieldcadre">
                    <div class="input-group champinput">                        
                        <div class="input-group-prepend">
                            <span class="input-group-text inputlabel" id="inputGroupPrepend3">Marque</span>
                        </div>
                        <select class="form-control inputborder" id="validationServerUsername" name="brand" aria-describedby="inputGroupPrepend3" required>
                            <option value="YAMAHA">YAMAHA</option>
                            <option value="KTM">KTM</option>
                            <option value="HONDA">HONDA</option>
                            <option value="SUZIKI">SUZIKI</option>
                        </select>
                        <!-- <input type="text" class="form-control inputborder" id="validationServerUsername" name="brand" placeholder="entrer la marque de moto..." aria-describedby="inputGroupPrepend3" required>                         -->
                    </div>
                </fieldset>               
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-4">
                <fieldset class="fieldcadre">
                    <div class="input-group champinput">
                        <div class="input-group-prepend">
                            <span class="input-group-text inputlabel" id="inputGroupPrepend3">Modèle</span>
                        </div>
                        <input type="text" class="form-control inputborder" id="validationServerUsername" name="model" placeholder="entrer le modàle de moto..." aria-describedby="inputGroupPrepend3" required>
                    </div>
                </fieldset>                
            </div>
            <div class="col-md-6 mb-4">
                <fieldset class="fieldcadre">
                    <div class="input-group champinput">
                        <div class="input-group-prepend">
                            <span class="input-group-text inputlabel" id="inputGroupPrepend3">Cylindre</span>
                        </div>
                        <input type="text" class="form-control inputborder" id="validationServerUsername" name="cylinder" placeholder="entrer la valeur du cylindre..." aria-describedby="inputGroupPrepend3" required>
                    </div>
                </fieldset>                
            </div>
        </div>
        <div class="form-row">            
            <div class="col-md-6 mb-4">  
                <fieldset class="fieldcadre">
                    <div class="input-group champinput">
                        <div class="input-group-prepend">
                            <span class="input-group-text inputlabel" id="inputGroupPrepend3">Catégorie</span>
                        </div>
                        <input type="text" class="form-control inputborder" id="validationServerUsername" name="category" placeholder="entrer la catégorie de la moto..." aria-describedby="inputGroupPrepend3" required>
                    </div>
                </fieldset>           
            </div>
            <div class="col-md-6 mb-4">
                <fieldset class="fieldcadre">
                    <div class="input-group champinput">
                        <div class="input-group-prepend">
                            <span class="input-group-text inputlabel" id="inputGroupPrepend3">Prix</span>
                        </div>
                        <input type="number" class="form-control inputborder" id="validationServerUsername" name="price" placeholder="entrer le prix..." aria-describedby="inputGroupPrepend3" required>
                    </div>
                </fieldset>
            </div>
        </div>                                               
        </fieldset>
        <div class="row boutons">        
        <button class="btn btn-primary envoyer" type="submit">Enregistrer</button>
        <button class="btn btn-primary annuler" type="reset">Annuler</button> 
    </div>
    </form>
    </fieldset> 
</div>
<!-- <script src="scripts.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>  -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="fixed-bottom">
  <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Simplon</span></strong>. Tous droits Reservés<br>
      </div>
      <div class="credits">
            Designed by <a>Binome12</a>
      </div>
    </div>
  </footer>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <script src="scripts.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> 
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
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
</body>
</html>
