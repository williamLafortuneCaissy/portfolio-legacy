<?php require_once "includes/bd.php" ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require_once "includes/head.php" ?>
    </head>
    <body>
        <header>
            <?php include_once "includes/header.php" ?>
        </header>
        <main class="home_container">
            <section class="home_section">
                <div class="header_logo_wrapper">
                    <h1 class="home_title">William Lafortune-Caissy <span class="home_title_caption">Intégrateur Web / Front-end</span></h1>
                </div>
            </section>
            <?php /*
            <div class="home_section">
                <div class="carousel page_wrapper">
                  <div class="uk-slidenav-position" data-uk-slideshow="{autoplay : true}">
                      <ul class="uk-slideshow">
                          <?php foreach ($bd['project'] as $projectKey => $project): ?>
                          <li><a href="<?php echo $projectKey . '.php' ?>"><img src="<?php echo 'img/' . $projectKey . '_header.jpg' ?>"></a></li>
                          <?php endforeach; ?>
                      </ul>
                      <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
                      <a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
                  </div>
                </div>
            </div>
            */ ?>
            <section class="home_section">
                <div class="home_section_wrapper">
                    <div class="uk-margin-bottom">
                        <img class="home_quote_image" src="img/williamLafortuneCaissy.jpg" alt="Photo professionnel de William Lafortune-Caissy">
                    </div>
                    <p class="home_quote_text">
                        L’apprentissage ne s’arrête jamais au courant d’une vie, il existe toujours des informations qui peuvent améliorer la qualité de notre travail. Ma recherche proactive envers de nouveaux outils me permet de me surpasser à chaque opportunité.
                    </p>
                    <div class="uk-margin-top">
                        <a href="William_Lafortune-Caissy_CV.pdf" class="btn" target="_blank">Consulter le CV</a>
                    </div>
                </div>
            </section>            
            <section class="home_section dynamic" id="dynamic_section">
                <div class="dynamic_bg"></div>
                <ul class="dynamic_container clearfix">
                    <li><h2 class="dynamic_title">En apprendre plus sur moi</h2></li>
                    <li class="dynamic_item" id="dynamic_item1">
                        <h3 class="dynamic_item_title">Mes compétences en design</h3>
                        
                        <p class="dynamic_item_text">
                            En tant qu'intégrateur front-end, je priorise la programmation plutôt que le design. Je fait plus souvent des recherches technologiques que des recherches d'inspirations. 
                        </p>
                        <p class="dynamic_item_text">
                            Par contre lorsqu'on a pas le temps de designer une page j'arrive facilement a reproduire le style visuel du site.
                        </p>
                    </li>                    
                    <li class="dynamic_item" id="dynamic_item2">
                        <h3 class="dynamic_item_title">Tu veux voir mes projets?</h3>
                        <p class="dynamic_item_text">
                            Mes projets datent du temps où j'étais à l'école, Ils ne sont <em>plus vraiment représentatif</em> de mes compétences. 
                        </p>
                        <p class="dynamic_item_text">
                            Tu peux aller les voir, mais je préfère plutôt <em>te garder sur la page d'accueil</em> pour que tu puisse en apprendre plus sur mes compétences actuelle.
                        </p>
                    </li>
                    <li class="dynamic_item" id="dynamic_item3">
                        <h3 class="dynamic_item_title">Mes champs d'intérêts</h3>
                        <p class="dynamic_item_text">
                            La meilleure manière de me connaître, c'est durant une entrevue. Par contre, je peux bien faire une courte liste de mes champs d'intérêts: 
                        </p>
                        <ul class="bullet_list">
                            <li><em>La programmation</em> : C'est sûr, j'en fais mon métier!</li>
                            <li><em>Les jeux vidéos</em> : je suis un compétiteur hors pair dans les jeux comme Super Smash Bros. ou Mario Kart!</li>
                            <li><em>Les sports</em> : Particulièrement, le Volley Ball, le Badminton et bien d'autres!</li>
                        </ul>
                    </li>
                </ul>
            </section>
            <section class="home_section wave">
                <div class="wave_tab_wrapper">
                    <div class="wave_tab_container">
                        <div class="wave_tab"></div>
                    </div>
                    <div class="wave_tab_arrow"></div>
                </div>
                <div class="wave_top home_section_wrapper">N'oublie pas d'inspecter les différents éléments de mon portfolio</div>
                <div class="wave_bottom home_section_wrapper">Tu pourrais trouver du css plutôt complexe </div>
            </section>
            <section class="home_section">
                FAQ section
            </section>
        </main>
        <footer>
            <?php include_once "includes/footer.php" ?>
        </footer>

        <!-- js -->
        <!-- <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script> -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/uikit.min.js"></script>

        <!-- components -->
        <script src="js/components/slideshow.min.js"></script>
        <script src="js/components/sticky.js"></script>

        <!-- TweenMax - Creates animations -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>

        <!-- scrollmagic - add trigggers -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>

        <!-- scrollmagic animation plugin - add tweens to scrollmagic -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.min.js"></script>
        
        <!-- custom -->
        <script src="js/_customJs/dynamic.js"></script>
    </body>
</html>
