<h1>Upraviť hru</h1>

<form method="post" action="<?= $link->url('game.update') ?>">
    <input type="hidden" name="id" value="<?= $game->getId() ?>">
    <p>
        <label for="name">Názov</label><br>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($game->getName()) ?>" required>
    </p>
    <p>
        <label for="platform">Platforma</label><br>
        <select id="platform" name="platform">
            <option <?= $game->getPlatform() === 'PC' ? 'selected' : '' ?>>PC</option>
            <option <?= $game->getPlatform() === 'Konzola' ? 'selected' : '' ?>>Konzola</option>
            <option <?= $game->getPlatform() === 'Stolová' ? 'selected' : '' ?>>Stolová</option>
        </select>
    </p>
    <p>
        <label for="max_players">Maximálny počet hráčov</label><br>
        <input type="number" id="max_players" name="max_players" min="1" value="<?= $game->getMaxPlayers() ?>" required>
    </p>
    <input type="submit" value="Uložiť">
</form>