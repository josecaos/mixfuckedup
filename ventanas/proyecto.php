<?php
//plantilla generica de contenido para un proyecto musical
//variables esperadas (definirlas antes de requerir este archivo):
//$proyectoNombre (string), $proyectoBio (string/html), $proyectoLinks (array de ['icon','label','url']), $proyectoMusica (string/html)
$proyectoNombre = $proyectoNombre ?? 'Proyecto';
$proyectoBio = $proyectoBio ?? '[PLACEHOLDER] Texto corto sobre el proyecto.';
$proyectoLinks = $proyectoLinks ?? [];
$proyectoMusica = $proyectoMusica ?? '<p><em>[PLACEHOLDER] Próximamente: pistas o reproductor embebido.</em></p>';
?>
<div class="contenido contenidoIndex">
    <div class="contenidoTop">
        <p><i class="fa fa-arrows-alt"></i></p>&nbsp;<strong class="headerContenido"><?php echo htmlspecialchars($proyectoNombre); ?></strong>
        <button onclick="cierraContenedor('page')" class='botonCierraContenedor'><i class="fa fa-arrow-up"></i></button>
        <button onclick="abreContenedor('page')" class='botonAbreContenedor'><i class="fa fa-arrow-down"></i></button>
    </div>
    <div class="item-page">
        <p><?php echo $proyectoBio; ?></p>
        <?php if (!empty($proyectoLinks)): ?>
        <ul class="linkRedesProyecto">
            <?php foreach ($proyectoLinks as $link): ?>
            <li><a href="<?php echo htmlspecialchars($link['url']); ?>" target="_blank"><i class="fa <?php echo htmlspecialchars($link['icon']); ?>"></i> <?php echo htmlspecialchars($link['label']); ?></a></li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
        <div class="musicaProyecto">
            <?php echo $proyectoMusica; ?>
        </div>
    </div>
</div>
