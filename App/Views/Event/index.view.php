<h1>Zoznam udalostí</h1>
<a href="<?= $link->url('event.create') ?>">Pridať udalosť</a>

<?php foreach ($events as $event) { ?>
    <p>
        <?= $event->getTitle() ?> (<?= $event->getType() ?>),
        <?= $event->getEventDate() ?>, <?= $event->getLocation() ?>
        <a href="<?= $link->url('event.delete', ['id' => $event->getId()]) ?>">Zmazať</a>
        <a href="<?= $link->url('event.edit', ['id' => $event->getId()]) ?>">Upraviť</a>
    </p>
<?php } ?>