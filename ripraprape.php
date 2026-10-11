<?php
//imagen de fondo PLACEHOLDER - reemplazar por portada real de RipRapRape
$bg = array('1.png');
$i = rand(0, count($bg)-1);
$selectedBg = "$bg[$i]";
//proyecto ID
$secc=6;//mxfkdp=0;josecaos=1;lcne=2;tiniebla=3;audiolab=4;weblab=5;ripraprape=6;
require "mixheader.php";
?>
<style type="text/css">
  #index{
  background: url(img/<?php echo $selectedBg; ?>) no-repeat fixed center center / cover;
  background-color: #000;
  }
</style>
  <!-- header -->
  <?php require "mixmenu.php"; ?>
  <!---->
  <div class="fondo-cont" >
    <canvas id="lienzo" onclick="rompe()"></canvas>
    <div id="index" class="fondo">
      <div class="container contenedorSeccion">
        <?php require 'ventanas/ripraprape.php'; ?>
      </div>
    </div>
  </div>
  <!--  footer -->
  <script>
  var secc = <?php echo $secc ?>;
  </script>
  <?php require "mixfooter.php"; ?>
