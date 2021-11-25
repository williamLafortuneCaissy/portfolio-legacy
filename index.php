<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Primary Meta Tags -->
        <title>William Lafortune-Caissy | Portfolio</title>
        <meta name="title" content="William Lafortune-Caissy | Portfolio">
        <meta name="description" content="Je suis un intégrateur web à la recherche d'une nouvelle équipe dans laquelle je vais m'intégrer aisément. Je peux travailler en HTML, CSS, JS, PHP et plus!">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.williamlafortunecaissy.ca/">
        <meta property="og:title" content="William Lafortune-Caissy | Portfolio">
        <meta property="og:description" content="Je suis un intégrateur web à la recherche d'une nouvelle équipe dans laquelle je vais m'intégrer aisément. Je peux travailler en HTML, CSS, JS, PHP et plus!">
        <meta property="og:image" content="img/meta-image.png">

        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
        <link rel="manifest" href="img/favicon/site.webmanifest">
        <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="theme-color" content="#ffffff">

        <!-- font -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!--icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- css -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <main class="home_container">
            <?php require_once 'part/home/hero.php' ?>
            
            <section class="home__section text-center">
                <div class="container container--narrow">
                    <div class="fs-4 mb-2 fw-500 sidelines">Projet e-commerce</div>
                    <div class="">En cours de développent</div>
                    <a class="btn-ecommerce mt-3" target="_blank" href="https://xd.adobe.com/view/84f947c1-e6d9-43f5-b624-1621cccb19fe-d1aa/?hints=off">Voir</a>
                </div>
            </section>

            <section id="cv" class="home__section section_cv">
                <div class="container container--narrow">
                    <h2 class="fs-4 fw-400 hide_print">Curriculum vitae</h2>
                    <?php require_once 'part/home/cv.php' ?>
                </div>
            </section>
        </main>
    </body>
</html>
