<?php
$bg = array('2.png', '3.png', '4.png','5.png');
 //
$i = rand(0, count($bg)-1); // generate random number size of the array
$selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
//proyecto ID
$secc=1;//mxfkdp=0;josecaos=1;lcne=2;tiniebla=3;audiolab=4;weblab=5;
require "mixheader.php";
?>
<body>
<style type="text/css">
  <!--
  #index{
  background: url(img/<?php echo $selectedBg; ?>) no-repeat fixed center center / cover;
  }
  -->
</style>
	<div class="fondo-cont" >
        <div id="index" class="fondo">
            <div class="contenedorSeccion">
                <?php #require 'ventanas/info.php';
                 			#require 'ventanas/twitter.php';
                      #require 'ventanas/contacto.php'; ?>
          </div>
        </div>
	</div>
     <!--  header menu + footer -->
        <?php require "mixmenu.php"; ?>
        <?php require "mixfooter.php"; ?>
    <script>
        var secc = <?php echo $secc?>; //mxfkdp=0;josecaos=1;lcne=2;tiniebla=3;audiolab=4;weblab=5
    </script>
    <script type="text/javascript" src="js/jquery.udraggable.js"></script>
    <script type="text/javascript" src="js/jquery.event.ue.js"></script>
    <script type="text/javascript" src="js/speak/speakClient.js"></script>
    <script type="text/javascript" src="js/mixspeakedup.js"></script>
    <script type="text/javascript" src="js/mixfuckedup.js"></script>
</body>
</html>
