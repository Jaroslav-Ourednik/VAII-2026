<a href="<?= $link->url('event.index') ?>" class="back-button">&lt; Späť na udalosti</a>

<section class="udalost-main-section">
    <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Obrázok udalosti">
    <div>
        <h1>Názov udalosti</h1>
        <dl>
            <dt>Typ:</dt>
            <dd>Typ udalosti</dd>
            <dt>Hra:</dt>
            <dd>Názov hry</dd>
            <dt>Dátum:</dt>
            <dd>Dátum udalosti</dd>
            <dt>Miesto:</dt>
            <dd>Adresa udalosti</dd>
            <dt>Organizátor:</dt>
            <dd>Prezívka</dd>
        </dl>
    </div>
</section>

<section class="udalost-popis-section">
    <h2>Popis</h2>
    <p>Krátky text o tom, čo sa bude diať, čo si treba doniesť...</p>
</section>

<section class="udalost-prihlaseny-section">
    <div>
        <h2>Prihlásení: 5 / 10</h2>
        <button type="button">Zúčastniť sa</button>
    </div>
    <ul>
        <li>
            <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
            <span>Meno</span>
            <span class="role">Rola</span>
        </li>
        <li>
            <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
            <span>Meno</span>
            <span class="role">Rola</span>
        </li>
        <li>
            <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
            <span>Meno</span>
            <span class="role">Rola</span>
        </li>
        <li>
            <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
            <span>Meno</span>
            <span class="role">Rola</span>
        </li>
        <li>
            <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
            <span>Meno</span>
            <span class="role">Rola</span>
        </li>
    </ul>
</section>

<section class="udalost-komentare-section">
    <h2>Komentáre</h2>
    <form>
        <input type="text" id="fkoment" name="fkoment" placeholder="Napíš komentár...">
        <input type="submit" value="Odoslať">
    </form>
    <ul>
        <li>
            <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
            <span>Meno:</span>
            <p>Komentár</p>
            <button type="button">Vymazať</button>
        </li>
        <li>
            <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
            <span>Meno:</span>
            <p>Komentár</p>
            <button type="button">Vymazať</button>
        </li>
        <li>
            <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
            <span>Meno:</span>
            <p>Komentár</p>
            <button type="button">Vymazať</button>
        </li>
        <li>
            <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
            <span>Meno:</span>
            <p>Komentár</p>
            <button type="button">Vymazať</button>
        </li>
    </ul>
</section>