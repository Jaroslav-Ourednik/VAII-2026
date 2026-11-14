<h1>Zoznam hier</h1>

<p><a href="<?= $link->url('game.create') ?>">Pridať hru</a></p>

<?php foreach ($games as $game) { ?>
    <p>
        <?= htmlspecialchars($game->getName()) ?> (<?= htmlspecialchars($game->getPlatform()) ?>),
        max. <?= $game->getMaxPlayers() ?> hráčov
        <a href="<?= $link->url('game.edit', ['id' => $game->getId()]) ?>">Upraviť</a>
        <a href="<?= $link->url('game.delete', ['id' => $game->getId()]) ?>">Zmazať</a>
    </p>
<?php } ?>