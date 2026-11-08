<h1>Nová udalosť</h1>

<form method="post" action="<?= $link->url('event.store') ?>">
    <p>
        <label for="title">Názov</label><br>
        <input type="text" id="title" name="title" required>
    </p>
    <p>
        <label for="type">Typ</label><br>
        <select id="type" name="type">
            <option>LAN party</option>
            <option>Stolové hry</option>
            <option>Online</option>
        </select>
    </p>
    <p>
        <label for="event_date">Dátum a čas</label><br>
        <input type="datetime-local" id="event_date" name="event_date" required>
    </p>
    <p>
        <label for="location">Miesto</label><br>
        <input type="text" id="location" name="location" required>
    </p>
    <p>
        <label for="description">Popis</label><br>
        <textarea id="description" name="description"></textarea>
    </p>
    <input type="submit" value="Uložiť">
</form>