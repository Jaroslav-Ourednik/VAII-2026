# Nexus Rally

Meno a priezvisko študenta: Jaroslav Ouředník

Študijná skupina: 5ZYI32

## Stručný opis projektu
Nexus Rally je webová aplikácia na organizovanie herných stretnutí. Na jednom mieste umožňuje plánovať LAN party, večery so stolovými hrami a online herné skupiny hráčov. Aplikácia je určená pre partie kamarátov, školské herné kluby a komunity hráčov, ktoré termíny a prihlášky riešia v chatoch a skupinových konverzáciách, kde sa informácie strácajú. Používatelia tu nájdu prehľad plánovaných stretnutí, môžu sa na ne prihlásiť, diskutovať o nich a pridať sa do skupín podľa hier, ktoré ich zaujímajú.

## Role v projekte
- **Návštevník:** môže si prezerať zoznam udalostí a skupín, ich detaily a komentáre. Môže sa zaregistrovať alebo prihlásiť.
- **Používateľ:** prihlasuje sa na udalosti, vstupuje do skupín, pridáva komentáre a spravuje svoj profil.
- **Organizátor:** používateľ, ktorý vytvoril udalosť alebo skupinu. Môže ju upravovať, mazať, odstraňovať účastníkov alebo členov a moderovať komentáre pod svojou udalosťou.
- **Administrátor:** spravuje katalóg hier a používateľov a môže zasiahnuť do akejkoľvek udalosti, skupiny alebo komentára.

## Prípady použitia podľa rolí
**Návštevník**
- zobrazí zoznam udalostí a vyfiltruje ich podľa typu (LAN party, stolové hry, online) alebo hry
- zobrazí detaili udalosti alebo skupiny
- zaregistruje sa a prihlási

**Používateľ**
- prihlási sa na udalosť alebo sa z nej odhlási
- vstúpi do skupiny alebo z nej odíde
- pridá komentár k udalosti alebo zmaže svoj komentár
- zobrazí v profile svoje udalosti a skupiny
- vytvorí novú udalosť alebo skupinu (tým sa stane jej organizátorom)

**Organizátor**
- upraví alebo zmaže svoju udalosť
- upraví alebo zmaže svoju skupinu
- odstráni účastníka z udalosti alebo člena zo skupiny
- zmaže nevhodný komentár pod svojou udalosťou

**Administrátor**
- pridá, upraví alebo zmaže hru v katalógu hier
- zmaže ľubovoľnú udalosť, skupinu alebo komentár
- spravuje používateľov a ich roly

## Plánované entity
- **Používateľ:** predstavuje registrovaného používateľa aplikácie. Atribúty: id, prezývka, email, heslo (uložené ako hash), rola (používateľ/admin), dátum registrácie. Používateľ môže organizovať udalosti a skupiny, prihlasovať sa na ne a písať komentáre.
- **Hra:** katalóg hier, ku ktorým sa viažu udalosti a skupiny. Atribúty: id, názov, typ (PC, konzola, stolová), obrázok. K jednej hre môže existovať viac udalostí a skupín.
- **Udalosť:** jedno plánované herné stretnutie (LAN party, večer so stolovými hrami alebo online session). Atribúty: id, názov, popis, typ udalosti, dátum a čas, miesto alebo odkaz (napr. na Discord), maximálny počet účastníkov, obrázok, id hry, id organizátora. Patrí jednej hre a jednému organizátorovi, môže mať viac komentárov a prihlásených účastníkov.
- **Skupina:** komunita hráčov, ktorá hrá spolu jednu hru. Atribúty: id, názov, popis, obrázok, id hry, id zakladateľa. Patrí jednej hre a jednému zakladateľovi a môže mať viac členov.
- **Komentár:** príspevok pod udalosťou. Atribúty: id, text, dátum vytvorenia, id udalosti, id autora. Patrí jednej udalosti a jednému autorovi.
- **Prihlásený na udalosť:** prepája používateľov s udalosťami, teda kto sa na ktorú udalosť prihlásil. Atribúty: id používateľa, id udalosti.
- **Členstvo v skupine:** prepája používateľov so skupinami, teda kto je členom ktorej skupiny. Atribúty: id používateľa, id skupiny.

## Vzťahy medzi entitami
- Jedna hra môže mať viac udalostí, ale každá udalosť patrí len jednej hre (1:N).
- Jedna hra môže mať viac skupín, ale každá skupina sa venuje len jednej hre (1:N).
- Používateľ môže zorganizovať viac udalostí, ale každú udalosť vytvoril len jeden používateľ (1:N).
- Používateľ môže založiť viac skupín, ale každú skupinu založil len jeden používateľ (1:N).
- Pod jednou udalosťou môže byť viac komentárov, ale každý komentár patrí len jednej udalosti (1:N).
- Používateľ môže napísať viac komentárov, ale každý komentár má len jedného autora (1:N).
- Používateľ sa môže prihlásiť na viac udalostí a na jednu udalosť sa môže prihlásiť viac používateľov (M:N). Tento vzťah je zapísaný v tabuľke „Prihlásený na udalosť".
- Používateľ môže byť členom viacerých skupín a jedna skupina môže mať viac členov (M:N). Tento vzťah je zapísaný v tabuľke „Členstvo v skupine".

## Hlavné stránky aplikácie
1. **Úvodná stránka:** dve veľké tlačidlá na výber, či používateľ chce nájsť udalosť alebo skupinu.
2. **Zoznam udalostí:** prehľad plánovaných stretnutí s filtrovaním podľa typu a hry.
3. **Detail udalosti:** podrobnosti o udalosti, zoznam prihlásených, tlačidlo na prihlásenie alebo odhlásenie a komentáre.
4. **Zoznam skupín:** prehľad skupín s filtrovaním podľa hry.
5. **Detail skupiny:** popis skupiny, hra, zoznam členov a tlačidlo na vstup alebo odchod.
6. **Prihlásenie:** formulár na prihlásenie používateľa.
7. **Registrácia:** formulár na vytvorenie nového účtu.
8. **Môj profil:** udalosti a skupiny, ktoré používateľ organizuje alebo sa ich zúčastňuje, a údaje o jeho účte.
9. **Formulár udalosti:** vytvorenie alebo úprava udalosti vrátane nahratia obrázka.
10. **Formulár skupiny:** vytvorenie alebo úprava skupiny vrátane nahratia obrázka.
11. **Správa hier a používateľov (admin):** zoznam hier a používateľov s pridaním, úpravou a mazaním.

## Rozdelenie funkcionality
**Základné funkcie**
- registrácia a prihlásenie, heslá uložené ako hash
- role používateľa, organizátora a administrátora s kontrolou oprávnení
- vytváranie, zobrazenie, úprava a mazanie udalostí, skupín a hier
- pridávanie a mazanie komentárov
- prihlasovanie na udalosti a vstup do skupín
- nahrávanie obrázkov (obrázok hry, udalosti a skupiny)
- filtrovanie udalostí podľa typu a hry bez obnovenia stránky (AJAX)
- prihlásenie a odhlásenie z udalosti a pridávanie komentárov bez obnovenia stránky (AJAX)
- kontrola vstupov na strane klienta aj servera
- spustenie v Dockeri s ukážkovými dátami

**Rozširujúce funkcie**
- stránkovanie zoznamu udalostí
- kalendárový pohľad na plánované udalosti
- zobrazenie miesta udalosti na mape (externé API)
- upozornenia na nové udalosti cez Discord (externé API)
- hodnotenie udalosti po jej skončení