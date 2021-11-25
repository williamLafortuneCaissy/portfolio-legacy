<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Primary Meta Tags -->
        <title>Projet Ecommerce</title>
        <meta name="title" content="William Lafortune-Caissy | Portfolio">

        <!-- font -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <!--icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- css -->
        <link rel="stylesheet" href="css/style.css">
    </head>
    <?php include('data/list.php') ?>

    <body>
        <h1 class="text-center">Chandails à manches courtes</h1>
        <aside id="filter" class="filter">
            <div class="filter__container">
                <button id="filterClose" class="btn btn-sm filter__close"><i class="bi-x"></i></button>
                <h2 class="filter__title">Filtre</h2>
                <div class="mb-3">
                    <div class="filter__label">Tailles</div>
                    <div class="d-flex mx-n2">
                        <div class="mx-2">
                            <input class="d-none" type="checkbox" name="sizeXs" id="sizeXs" checked>
                            <label for="sizeXs" class="size__label">Xs</label>
                        </div>
                        <div class="mx-2">
                            <input class="d-none" type="checkbox" name="sizeS" id="sizeS" checked>
                            <label for="sizeS" class="size__label">S</label>
                        </div>
                        <div class="mx-2">
                            <input class="d-none" type="checkbox" name="sizeM" id="sizeM" checked>
                            <label for="sizeM" class="size__label">M</label>
                        </div>
                        <div class="mx-2">
                            <input class="d-none" type="checkbox" name="sizeL" id="sizeL" checked>
                            <label for="sizeL" class="size__label">L</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="filter__label">Couleurs</div>
                    <div class="d-flex mx-n1">
                        <div class="mx-1">
                            <input class="d-none" type="checkbox" name="colorYellow" id="colorYellow" checked>
                            <label for="colorYellow" class="color__label color__label--yellow"><span class="visually-hidden">Jaune</span></label>
                        </div>
                        <div class="mx-1">
                            <input class="d-none" type="checkbox" name="colorRed" id="colorRed" checked>
                            <label for="colorRed" class="color__label color__label--red"><span class="visually-hidden">Jaune</span></label>
                        </div>
                        <div class="mx-1">
                            <input class="d-none" type="checkbox" name="colorPurple" id="colorPurple" checked>
                            <label for="colorPurple" class="color__label color__label--purple"><span class="visually-hidden">Jaune</span></label>
                        </div>
                        <div class="mx-1">
                            <input class="d-none" type="checkbox" name="colorGreen" id="colorGreen" checked>
                            <label for="colorGreen" class="color__label color__label--green"><span class="visually-hidden">Jaune</span></label>
                        </div>
                        <div class="mx-1">
                            <input class="d-none" type="checkbox" name="colorBlue" id="colorBlue" checked>
                            <label for="colorBlue" class="color__label color__label--blue"><span class="visually-hidden">Jaune</span></label>
                        </div>
                        <div class="mx-1">
                            <input class="d-none" type="checkbox" name="colorWhite" id="colorWhite" checked>
                            <label for="colorWhite" class="color__label color__label--white"><span class="visually-hidden">Jaune</span></label>
                        </div>
                        <div class="mx-1">
                            <input class="d-none" type="checkbox" name="colorBlack" id="colorBlack" checked>
                            <label for="colorBlack" class="color__label color__label--black"><span class="visually-hidden">Jaune</span></label>
                        </div>

                    </div>
                </div>

                <div class="mb-3">
                    <div class="filter__label">Prix</div>
                    <div class="row g-1 align-items-center">
                        <div class="col-auto">
                            <label class="visually-hidden" for="priceMin">Min</label>
                            <input class="form-control price__input" type="text" name="priceMin" id="priceMin">
                        </div>
                        <div class="col-auto">-</div>
                        <div class="col-auto">
                            <label class="visually-hidden" for="priceMin">Min</label>
                            <input class="form-control price__input" type="text" name="priceMin" id="priceMin">
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <button id="filterToggler" class="btn btn-primary tshirt__filterBtn"><i class="bi-filter"></i></button>
        <main class="container tshirt__container">
            <?php foreach($data as $tshirt): ?>
                <div class="tshirt text-center">
                    <h2 class="h4">T-Shirt de base en coton pour homme</h2>
                    <img class="tshirt__img mb-2" src="img/tshirts/black.png" alt="T-Shirt de base en coton pour homme - Noir">

                    <div class="row align-items-end">
                        <div class="col-3 text-start">
                            <div class="tshirt__price--old">79.99$</div>
                            <span class="tshirt__price">39</span><span class="tshirt__cents">99$</span>
                        </div>
                        <div class="col-6 tshirt__stars text-warning text-center">
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-fill"></i>
                            <i class="bi-star-half"></i>
                            <i class="bi-star"></i>
                        </div>
                        <div class="col-3 text-end"><i class="bi-eye-fill"></i></div>
                    </div>
                </div>
            <?php endforeach ?>
        </main>
    </body>

    <script>
        const filterToggler = document.getElementById("filterToggler");
        const filterClose = document.getElementById("filterClose");
        const filter = document.getElementById("filter");

        filterToggler.onclick = function() {
            filter.classList.toggle('filter--open');
        };

        filterClose.onclick = function() {
            filter.classList.remove('filter--open');
        };

    </script>
</html>
