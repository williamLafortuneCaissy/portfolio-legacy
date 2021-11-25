




<!-- (projetDesign.php) Ne peux pas faire de foreach à cause du modal uikit2 -->

<!-- view
<?php foreach ($projectData['etapes'] as $etapesKey => $etapeValue): ?>
<li>
  <a href="<?php echo '#imageEtape_modal' . $etapesKey ?>" data-uk-modal>
    <img src="<?php echo 'img/' . $etapeValue ?>" alt="<?php echo 'étape #' . $etapesKey ?>">
  </a>
  <div id="<?php echo 'imageEtape_modal' . $etapesKey ?>" class="uk-modal">
    <div class="uk-modal-dialog">
      <a class="uk-modal-close uk-close"></a>
      <img class="" src="<?php echo 'img/' . $etapeValue ?>" alt="<?php echo 'étape #' . $etapesKey ?>">
    </div>
  </div>
</li>
<?php endforeach ?> -->

<!-- NavDot
<?php foreach ($projectData['etapes'] as $etapesKey => $etapeValue): ?>
<li class="uk-width-1-6 uk-width-medium-1-3" data-uk-slideshow-item="<?php echo $etapesKey ?>">
  <a class="projectDesign_carousel_nav_dot" href="#">
    <img src="<?php echo 'img/' . $etapeValue ?>" alt="<?php echo 'étape #' . $etapesKey ?>">
  </a>
</li>
<?php endforeach ?> -->

<!-- Modal
<?php foreach ($projectData['etapes'] as $etapesKey => $etapeValue): ?>
<div id="<?php echo 'imageEtape_modal_' . $etapesKey ?>" class="uk-modal">
  <div class="uk-modal-dialog">
    <a class="uk-modal-close uk-close"></a>
    <img class="" src="img/laventureDuPompier_0.jpg" alt="étape #">
  </div>
</div>
<?php endforeach ?> -->