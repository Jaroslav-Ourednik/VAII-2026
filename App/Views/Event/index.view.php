<h1>Zoznam udalostí</h1>
<a href="<?= $link->url('event.create') ?>">Pridať udalosť</a>
<a href="<?= $link->url('game.index') ?>">Hry</a>

<?php foreach ($events as $event) { ?>
    <?php
    $game = null;
    if ($event->getGameId() !== null) {
        $game = \App\Models\Game::getOne($event->getGameId());
    }
    ?>
    <p>
        <?= htmlspecialchars($event->getTitle()) ?> (<?= htmlspecialchars($event->getType()) ?>),
        <?= $event->getEventDate() ?>, <?= htmlspecialchars($event->getLocation()) ?>,
        <?= $game !== null ? htmlspecialchars($game->getName()) : 'bez hry' ?>
        <a href="<?= $link->url('event.delete', ['id' => $event->getId()]) ?>">Zmazať</a>
        <a href="<?= $link->url('event.edit', ['id' => $event->getId()]) ?>">Upraviť</a>
    </p>
<?php } ?>