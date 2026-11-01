<a class="back-button" href="<?= $link->url('group.index') ?>">&lt; Späť na skupiny</a>

<section class="skupina-hlavicka">
    <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Logo skupiny">
    <div>
        <h1>Názov skupiny</h1>
        <p>Hra: Názov hry</p>
        <p>Zakladateľ: Prezývka</p>
        <p>Krátky popis skupiny, o čom sa tu rozprávate a kedy spolu hráte.</p>
    </div>
    <button type="button">Pripojiť sa</button>
</section>

<div class="skupina-obsah">
    <section class="skupina-chat">
        <h2>Chat</h2>
        <ul class="skupina-spravy">
            <li>
                <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
                <div>
                    <p class="sprava-hlavicka">
                        <span class="sprava-meno">ApexVandal</span>
                        <time datetime="2026-11-01T19:30">19:30</time>
                    </p>
                    <p>Kto dnes večer hrá?</p>
                </div>
            </li>
            <li>
                <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
                <div>
                    <p class="sprava-hlavicka">
                        <span class="sprava-meno">CyberPulse</span>
                        <time datetime="2026-11-01T19:32">19:32</time>
                    </p>
                    <p>Ja som in, o osmej som online.</p>
                </div>
            </li>
            <li>
                <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
                <div>
                    <p class="sprava-hlavicka">
                        <span class="sprava-meno">VoidEmber</span>
                        <time datetime="2026-11-01T19:35">19:35</time>
                    </p>
                    <p>Môžem sa pridať aj ja? Dojem večeru, ale o chvíľu som tam.</p>
                </div>
            </li>
            <li>
                <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
                <div>
                    <p class="sprava-hlavicka">
                        <span class="sprava-meno">ShadowFlux</span>
                        <time datetime="2026-11-01T19:41">19:41</time>
                    </p>
                    <p>Meow :3</p>
                </div>
            </li>
        </ul>
        <form class="skupina-formular">
            <input type="text" name="sprava" placeholder="Napíš správu..." aria-label="Správa">
            <input type="submit" value="Odoslať">
        </form>
    </section>

    <section class="skupina-clenovia">
        <h2>Členovia: 5</h2>
        <ul>
            <li>
                <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
                <span>ApexVandal</span>
                <span class="clen-rola">Zakladateľ</span>
            </li>
            <li>
                <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
                <span>CyberPulse</span>
                <span class="clen-rola">Člen</span>
            </li>
            <li>
                <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
                <span>VoidEmber</span>
                <span class="clen-rola">Člen</span>
            </li>
            <li>
                <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
                <span>Zexio</span>
                <span class="clen-rola">Člen</span>
            </li>
            <li>
                <img src="<?= $link->asset('images/Placeholder.png') ?>" alt="Avatar profilu">
                <span>ShadowFlux</span>
                <span class="clen-rola">Člen</span>
            </li>
        </ul>
    </section>
</div>
