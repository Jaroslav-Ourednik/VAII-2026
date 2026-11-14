<h1>Nová hra</h1>

<form method="post" action="<?= $link->url('game.store') ?>">
    <p>
        <label for="name">Názov</label><br>
        <input type="text" id="name" name="name" required>
    </p>
    <p>
        <label for="platform">Platforma</label><br>
        <select id="platform" name="platform">
            <option>PC</option>
            <option>Konzola</option>
            <option>Stolová</option>
        </select>
    </p>
    <p>
        <label for="max_players">Maximálny počet hráčov</label><br>
        <input type="number" id="max_players" name="max_players" min="1" required>
    </p>
    <input type="submit" value="Uložiť">
</form>