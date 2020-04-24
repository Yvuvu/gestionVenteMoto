<?php $title = 'Stock'; ?>

<?php ob_start(); ?>
<link href="assets/css/stock.css" rel="stylesheet">
<?php $additionalCss = ob_get_clean(); ?>

<?php ob_start(); ?>
class="fixed-top stock-header"
<?php $headerClass = ob_get_clean(); ?>

<?php ob_start(); ?>
<main>      
<center><a class="cd-nav-trigger cd-text-replace" href="#primary-nav" id="toggle">
  <span aria-hidden="true" class="cd-icon"></span>
</a></center>

<div class="arrow-container"><h2><img src="assets/img/handup.png" class="text-center hand" alt="..."></h2>
  <h2>Cliquez ici pour afficher les marques!</h2>
  <div class="arrow"></div>
</div>

<div id="menu" class="menu-container">
  
  <div id="item-1" class="menu-item red">
    <h1><img src="assets/img/logoyamaha.jpg" class="stock-logomarque" alt="..."><br>YAMAHA</h1>
    <p>You're created together also. Fly bearing behold itself be so is divide living seasons firmament fruitful of was you so god sea two together them. <br><a href="yamaha.html"><i class="icofont-arrow-right"></i>Afficher la liste des motos de cette marque</a></p>
  </div>
  <div id="item-2" class="menu-item blue">
    <h1><img src="assets/img/ktmlogo.png" class="stock-logomarque" alt="..."><br>KTM</h1>
        <p>You're created together also. Fly bearing behold itself be so is divide living seasons firmament fruitful of was you so god sea two together them. Dry you greater itself to.<br><a href="ktm.html"><i class="icofont-arrow-right"></i>Afficher la liste des motos de cette marque</a></p>
  </div>
  <div id="item-2" class="menu-item d-blue">
    <h1><img src="assets/img/hondalogo.png" class="stock-logomarque" alt="..."><br>HONDA</h1>
        <p>You're created together also. Fly bearing behold itself be so is divide living seasons firmament fruitful of was you so god sea two together them. Dry you greater itself to.<br><a href="honda.html"><i class="icofont-arrow-right"></i>Afficher la liste des motos de cette marque</a></p>
  </div>
  <div id="item-3" class="menu-item green">
    <h1><img src="assets/img/suzukilogo.png" class="stock-logomarque" alt="..."><br>SUZUKI</h1>
        <p>You're created together also. Fly bearing behold itself be so is divide living seasons firmament fruitful of was you so god sea two together them. Dry you greater itself to.<br><a href="suzuki.html"><i class="icofont-arrow-right"></i>Afficher la liste des motos de cette marque</a></p>
  </div>
  <div id="item-4" class="menu-item yellow">
    <h1><img src="assets/img/add.png" alt="..."><br>Ajouter une moto</h1>
        <p>You're created together also. Fly bearing behold itself be so is divide living seasons firmament fruitful of was you so god sea two together them. Dry you greater itself to.<br><a href="enregistrer.html"><i class="icofont-arrow-right"></i>Enregistrer une moto</a></p>
  </div>
</div>
</main><!-- End #main -->
<?php $content = ob_get_clean(); ?>

<?php ob_start(); ?>
class="fixed-bottom"
<?php $footerClass = ob_get_clean(); ?>

<?php ob_start(); ?>
<script src="assets/js/stock.js"></script>
<?php $additionalJs = ob_get_clean(); ?>

<?php require('template.php'); ?>
