<?php
//proyecto ID
$secc=0;//mxfkdp=0;josecaos=1;lcne=2;tiniebla=3;audiolab=4;weblab=5;
require "mixheader.php";
?>
<body>
  <!-- header -->
  <?php require "mixmenu.php"; ?>
  <!---->
  <div class="fondo-cont" >
    <canvas id="lienzo" onclick="rompe()"></canvas>
    <img id="logoMain" class="logoMain" src="img/1.png" style="display: none" alt="">
    <div id="index" class="fondo">
      <!-- conenido ajax -->
      <div class="contenedorSeccion">
        <?php #require 'ventanas/info.php';
        #require 'ventanas/twitter.php';
        #require 'ventanas/contacto.php';
        ?>
      </div>
      <!---->
    </div>
  </div>
  <!--  footer -->
  <?php require "mixfooter.php"; ?>
  <script>
  var secc = <?php echo $secc ?>;
  </script>
  <script type="text/javascript" src="js/jquery.udraggable.js"></script>
  <script type="text/javascript" src="js/jquery.event.ue.js"></script>
  <!-- <script type="text/javascript" src="js/speak/ajaxify.js"></script> -->
  <!-- <script type="text/javascript" src="js/speak/jquery-history.js"></script> -->
  <script type="text/javascript" src="js/speak/speakClient.js"></script>
  <script type="text/javascript" src="js/speak/speakGenerator.js"></script>
  <script type="text/javascript" src="js/mixspeakedup.js"></script>
  <script type="text/javascript" src="js/mixfuckedup.js"></script>
  <!-- -->
  <script type="text/javascript" src="js/paper-full.min.js"></script>
  <script type="text/paperscript" src="js/papel.js" canvas="lienzo"></script>
  <!-- <script type="text/javascript" src="js/html2canvas.min.js"></script> -->
</body>
</html>
