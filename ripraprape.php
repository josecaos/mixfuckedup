<?php
//imagen de fondo PLACEHOLDER - reemplazar por portada real de RipRapRape
$bg = array('1.png');
$i = rand(0, count($bg)-1);
$selectedBg = "$bg[$i]";
//proyecto ID
$secc=6;//mxfkdp=0;josecaos=1;lcne=2;tiniebla=3;audiolab=4;weblab=5;ripraprape=6;menoshumanos=7;mitote=8;morir=9;devilmente=10;egohisteria=11;
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
        <?php
        $proyectoNombre = 'RipRapRape';
        $proyectoBio = '[PLACEHOLDER] Texto corto sobre RipRapRape. Reemplazar con la biografía/descripción real del proyecto.';
        $proyectoLinks = [
          ['icon' => 'fa-globe', 'label' => 'Sitio', 'url' => 'https://ripraprape.qzz.io'],
          ['icon' => 'fa-music', 'label' => 'Bandcamp [PLACEHOLDER]', 'url' => '#'],
          ['icon' => 'fa-spotify', 'label' => 'Spotify [PLACEHOLDER]', 'url' => '#'],
          ['icon' => 'fa-youtube-play', 'label' => 'YouTube [PLACEHOLDER]', 'url' => '#'],
        ];
        $proyectoMusica = '<p><em>[PLACEHOLDER] Próximamente: pistas o reproductor embebido.</em></p>';
        require 'ventanas/proyecto.php';
        ?>
      </div>
    </div>
  </div>
  <!--  footer -->
  <script>
  var secc = <?php echo $secc ?>;
  </script>
  <?php require "mixfooter.php"; ?>
