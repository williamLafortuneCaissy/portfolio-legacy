<?php require_once "includes/bd.php" ?>
<?php $projectData =  $bd["project"][$activePage] ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php require_once "includes/head.php"  ?>
</head>
<body>
  <header>
    <?php include_once "includes/header.php" ?>
  </header>
  <main>
    <div class="page_container page_wrapper">
      <h1 class="main_title uk-h2"><?php echo $projectData['title']; ?></h1>
      <?php if ($activePage=='laventureDuPompier'): ?>
        <div class="projectDesign">
          <div class="uk-grid">
            <div class="uk-width-medium-1-3">
              <div class="projetDesign_tag_relative">
                <span class="tag projetDesign_tag">Image modèle</span>
                <a href="#imageModele_modal" data-uk-modal>
                  <img class="projectDesign_model_img" src="<?php echo 'img/' . $projectData['imageModele'] ?>" alt="">
                </a>
                <div id="imageModele_modal" class="uk-modal">
                  <div class="uk-modal-dialog">
                    <a class="uk-modal-close uk-close"></a>
                    <img class="" src="<?php echo 'img/' . $projectData['imageModele'] ?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="uk-width-medium-2-3" data-uk-slideshow>
              <ul class="uk-slideshow projectDesign_carousel_img">
                <li class="projetDesign_tag_relative">
                  <span class="tag projetDesign_tag">Image finale</span>
                  <a href="#imageEtape_modal_0" data-uk-modal>
                    <img src="img/laventureDuPompier_0.jpg" alt="étape 0">
                  </a>
                </li>
                <li class="projetDesign_tag_relative">
                  <span class="tag projetDesign_tag">Étape 1</span>
                  <a href="#imageEtape_modal_1" data-uk-modal>
                    <img src="img/laventureDuPompier_1.jpg" alt="étape 1">
                  </a>
                </li>
                <li class="projetDesign_tag_relative">
                  <span class="tag projetDesign_tag">Étape 2</span>
                  <a href="#imageEtape_modal_2" data-uk-modal>
                    <img src="img/laventureDuPompier_2.jpg" alt="étape 2">
                  </a>
                </li>
                <li class="projetDesign_tag_relative">
                  <span class="tag projetDesign_tag">Étape 3</span>
                  <a href="#imageEtape_modal_3" data-uk-modal>
                    <img src="img/laventureDuPompier_3.jpg" alt="étape 3">
                  </a>
                </li>
                <li class="projetDesign_tag_relative">
                  <span class="tag projetDesign_tag">Étape 4</span>
                  <a href="#imageEtape_modal_4" data-uk-modal>
                    <img src="img/laventureDuPompier_4.jpg" alt="étape 4">
                  </a>
                </li>
                <li class="projetDesign_tag_relative">
                  <span class="tag projetDesign_tag">Étape 5</span>
                  <a href="#imageEtape_modal_5" data-uk-modal>
                    <img src="img/laventureDuPompier_5.jpg" alt="étape 5">
                  </a>
                </li>
              </ul>
              <ul class="uk-grid uk-grid-small uk-dotnav projectDesign_carousel_nav">
                <li class="uk-width-1-6 uk-width-medium-1-3" data-uk-slideshow-item="0">
                  <a class="projectDesign_carousel_nav_dot" href="#">
                    <img src="img/laventureDuPompier_0.jpg" alt="étape 0">
                  </a>
                </li>
                <li class="uk-width-1-6 uk-width-medium-1-3" data-uk-slideshow-item="1">
                  <a class="projectDesign_carousel_nav_dot" href="#">
                    <img src="img/laventureDuPompier_1.jpg" alt="étape 1">
                  </a>
                </li>
                <li class="uk-width-1-6 uk-width-medium-1-3" data-uk-slideshow-item="2">
                  <a class="projectDesign_carousel_nav_dot" href="#">
                    <img src="img/laventureDuPompier_2.jpg" alt="étape 2">
                  </a>
                </li>
                <li class="uk-width-1-6 uk-width-medium-1-3" data-uk-slideshow-item="3">
                  <a class="projectDesign_carousel_nav_dot" href="#">
                    <img src="img/laventureDuPompier_3.jpg" alt="étape 3">
                  </a>
                  <li class="uk-width-1-6 uk-width-medium-1-3" data-uk-slideshow-item="4">
                    <a class="projectDesign_carousel_nav_dot" href="#">
                      <img src="img/laventureDuPompier_4.jpg" alt="étape 4">
                    </a>
                  </li>
                </li>
                <li class="uk-width-1-6 uk-width-medium-1-3" data-uk-slideshow-item="5">
                  <a class="projectDesign_carousel_nav_dot" href="#">
                    <img src="img/laventureDuPompier_5.jpg" alt="étape 5">
                  </a>
                </li>
              </ul>
            </div>
            <div>
              <div id="imageEtape_modal_0" class="uk-modal">
                <div class="uk-modal-dialog">
                  <a class="uk-modal-close uk-close"></a>
                  <img class="" src="img/laventureDuPompier_0.jpg" alt="étape #">
                </div>
              </div>
              <div id="imageEtape_modal_1" class="uk-modal">
                <div class="uk-modal-dialog">
                  <a class="uk-modal-close uk-close"></a>
                  <img class="" src="img/laventureDuPompier_1.jpg" alt="étape #">
                </div>
              </div>
              <div id="imageEtape_modal_2" class="uk-modal">
                <div class="uk-modal-dialog">
                  <a class="uk-modal-close uk-close"></a>
                  <img class="" src="img/laventureDuPompier_2.jpg" alt="étape #">
                </div>
              </div>
              <div id="imageEtape_modal_3" class="uk-modal">
                <div class="uk-modal-dialog">
                  <a class="uk-modal-close uk-close"></a>
                  <img class="" src="img/laventureDuPompier_3.jpg" alt="étape #">
                </div>
              </div>
              <div id="imageEtape_modal_4" class="uk-modal">
                <div class="uk-modal-dialog">
                  <a class="uk-modal-close uk-close"></a>
                  <img class="" src="img/laventureDuPompier_4.jpg" alt="étape #">
                </div>
              </div>
              <div id="imageEtape_modal_5" class="uk-modal">
                <div class="uk-modal-dialog">
                  <a class="uk-modal-close uk-close"></a>
                  <img class="" src="img/laventureDuPompier_5.jpg" alt="étape #">
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php else: ?>
        <div class="header_imgBanner">
          <div>
            <a href="#projet_img" data-uk-modal>
              <img class="uk-width-1-1" src="<?php echo 'img/' . $activePage . '_header.jpg' ?>">
            </a>
          </div>
          <div id="projet_img" class="uk-modal">
            <div class="uk-modal-dialog uk-modal-dialog-large">
              <a class="uk-modal-close uk-close"></a>
              <img class="uk-align-center" src="<?php echo 'img/' . $activePage . '_header_modal.jpg' ?>">
            </div>
          </div>
        </div>
      <?php endif; ?>
      <?php if (isset($projectData['link'])): ?>
        <a href="<?php echo $projectData['link'] ?>" class="bt project_button" target="_blank">Voir le projet</a>
      <?php endif; ?>
      <?php if (isset($projectData['github']) && $projectData['github'] == 'true'): ?>
        <a href="https://github.com/williamLafortuneCaissy/<?php echo $activePage ?>" class="bt project_button" target="_blank">Voir les fichiers sources</a>
      <?php endif; ?>
      <div>
      <?php if (isset($projectData['video'])): ?>
        <div class="project_video uk-margin-bottom"><?php echo $projectData['video']; ?></div>
      <?php endif; ?>
        <div><?php include 'includes/projectDescription.php' ?></div>
      </div>


      <a href="<?php echo $projectData['type'] ?>.php" class="bt revert">Retour</a>
    </div>
  </main>
  <footer>
    <?php include_once "includes/footer.php" ?>
  </footer>
</body>
</html>
