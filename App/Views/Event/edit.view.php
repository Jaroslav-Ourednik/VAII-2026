<h1>Nová udalosť</h1>

<form method="post" action="<?= $link->url('event.update') ?>">
    <input type="hidden" name="id" value="<?= $event->getId() ?>">
    <p>
        <label for="title">Názov</label><br>
        <input type="text" id="title" name="title" required value="<?= htmlspecialchars($event->getTitle()) ?>">
    </p>
    <p>
        <label for="type">Typ</label><br>
        <select id="type" name="type">
            <option <?= $event->getType() === 'LAN party' ? 'selected' : '' ?>>LAN party</option>
            <option <?= $event->getType() === 'Stolové hry' ? 'selected' : '' ?>>Stolové hry</option>
            <option <?= $event->getType() === 'Online' ? 'selected' : '' ?>>Online</option>
        </select>
    </p>
    <p>
        <label for="event_date">Dátum a čas</label><br>
        <input type="datetime-local" id="event_date" name="event_date" required
            value="<?= str_replace(' ', 'T', $event->getEventDate()) ?>">
    </p>
    <p>
        <label for="location">Miesto</label><br>
        <input type="text" id="location" name="location" required
            value="<?= htmlspecialchars($event->getLocation()) ?>">
    </p>
    <p>
        <label for="description">Popis</label><br>
        <textarea id="description" name="description"><?= htmlspecialchars($event->getDescription() ?? '') ?></textarea>
    </p>
    <p>
        <label for="game_id">Hra</label><br>
        <select id="game_id" name="game_id">
            <option value="">Bez hry</option>
            <?php foreach ($games as $game) { ?>
                <option value="<?= $game->getId() ?>" <?= $event->getGameId() === $game->getId() ? 'selected' : '' ?>>
                    <?= htmlspecialchars($game->getName()) ?>
                </option>
            <?php } ?>
        </select>
    </p>
    <input type="submit" value="Uložiť">
</form>