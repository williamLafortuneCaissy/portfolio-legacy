<div class="nav" data-uk-sticky>
    <a href="#offcanvas" class="uk-icon-bars nav_burger" data-uk-offcanvas></a>
    <!-- NAVIGATION -->
    <div id="offcanvas" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <div class="nav_logo_wrapper">
                <a class="" href="index.php">
                    <img src="img/logo_icon.jpg" alt="William Lafortune-Caissy" class="nav_logo_icon">
                </a>
            </div>
            <div>
                <ul class="nav_wrapper">
                <?php foreach ($bd["type"] as $keyType => $valueType): ?>
                    <li class="nav_item
                    <?php if ($keyType==$activeType) { echo "active"; } ?>"
                    >
                      <a class="nav_item_text" href="<?php echo $keyType ?>.php"> <?php echo $valueType ?> </a>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
