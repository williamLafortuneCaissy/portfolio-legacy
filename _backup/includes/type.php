<?php require_once "includes/bd.php" ?>
<?php
    foreach ($bd["project"] as $keyProject => $valueProject) {
        if ($valueProject['type']==$activePage) {
            $typeData[$keyProject] = $valueProject;
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php require_once "includes/head.php"  ?>
    </head>
    <body class="">
        <header>
            <?php include_once "includes/header.php" ?>
        </header>
        <main>
            <div class="page_container page_wrapper">
                <h1 class="main_title uk-h2"><?php echo $bd["type"][$activePage] ?></h1>
                <div class="uk-grid">
                <?php foreach ($typeData as $keyProject => $valueProject): ?>
                    <div class="uk-width-medium-1-2 uk-width-large-1-3">
                        <div class="gallerie_projet">
                            <img class="gallerie_projet_img" src="img/<?php echo $keyProject ?>_type.jpg">
                            <a href="<?php echo $keyProject ?>.php" class="overlay">
                                <span class="overlay_text">
                                    <?php echo $valueProject['title'] ?>
                                    <?php if ($valueProject['hint']) {
                                        echo '<span class="overlay_text_hint">( '.$valueProject['hint'].' )</span>';
                                    } ?>
                                </span>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </main>
        <footer class="footer_type">
            <?php include_once "includes/footer.php" ?>
        </footer>
    </body>
</html>
