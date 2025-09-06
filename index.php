<?php
//proyecto ID
$secc=0;//mxfkdp=0;josecaos=1;
require "mixheader.php";
?>
  <!-- header -->
  <?php require "mixmenu.php"; ?>
  <!---->
  <div class="fondo-cont" >
    <canvas id="lienzo" onclick="rompe()"></canvas>
    <img id="logoMain" class="logoMain" src="img/7.png" style="display: none" alt="Mixfuckedup">
    <div id="index" class="fondo">
      <!-- conenido ajax -->
      <div class="container contenedorSeccion">
        <?php 
        require 'ventanas/info.php';
        // require 'ventanas/contacto.php';
        ?>
      </div>
      <!---->
    </div>
  </div>
  <!--  footer -->
  <script>
  var secc = <?php echo $secc ?>;
  </script>
  <?php require "mixfooter.php"; ?>

