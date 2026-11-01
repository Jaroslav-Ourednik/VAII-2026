<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= App\Configuration::APP_NAME ?></title>


    <link rel="icon" type="image/svg+xml" href="<?= $link->asset('images/Logo.svg') ?>">

    <link rel="stylesheet" href="<?= $link->asset('css/style.css') ?>">
    <link rel="stylesheet" href="<?= $link->asset('css/udalost.css') ?>">
    <link rel="stylesheet" href="<?= $link->asset('css/skupina.css') ?>">
    <script src="<?= $link->asset('js/script.js') ?>"></script>
</head>
<body>

    <header>
        <div class="logo-and-name">
            <img src="<?= $link->asset('images/Logo.svg') ?>" alt="Logo Nexus Rally">
            <p>Nexus Rally</p>
        </div>
        <nav>
            <div class="nav-left">
                <a href="<?= $link->url('home.index') ?>">Domov</a>
                <a href="<?= $link->url('event.index') ?>">Udalosti</a>
                <a href="<?= $link->url('group.index') ?>">Skupiny</a>
            </div>
            <div class="nav-right">
                <a href="#TODO">Prihlásiť sa</a>
                <a href="#TODO">Registrovať sa</a>
            </div>
        </nav>
    </header>

    <main>
        <?= $contentHTML ?>
    </main>

    <footer>
        <div class="footer-left">
            <h3>O projekte</h3>
            <p>
                Nexus Rally je miesto, kde nájdeš hráčov,
                herné skupiny a udalosti. Organizuj LAN party,
                večery so stolovými hrami alebo online hranie
                s ľuďmi, ktorí majú rovnaké záujmy.
            </p>
        </div>

        <div class="footer-right">
            <h3>Kontakt</h3>
            <a href="#">info@nexusrally.sk</a><br>
            <p>Autor projektu: Jaroslav Ouředník</p>
        </div>
    </footer>
</body>
</html>
