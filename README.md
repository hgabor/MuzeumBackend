# Múzeum alkalmazás backend projekt

A múzeum festmények adatait tárolja.

## Telepítési lépések

* Készítsünk egy másolatot az .env.example fájlról, .env néven!
* A fájlban írjuk át az adatbázis kapcsolat adatait a megfelelőre!

A konzolban hajtsuk végre az alábbi utasításokat:

    php artisan key:generate --ansi
    php artisan migrate
    php artisan db:seed

A fejlesztői szervert az alábbi utasítással indíthatjuk el:

    php artisan serve

Ellenőrizzük, hogy minden rendben van-e, hogy az alábbi URL teszt JSON adatokat ad-e vissza:

http://127.0.0.1:8000/api/paintings

## Adatszerkezet

* id: egész
* title: a festmény címe, szöveg (max 255)
* year: a készítés éve, szám
* on_display: éppen ki van-e állítva, logikai

## API végpontok

Minden be- és kimeneti adat JSON formátumú.

**GET /api/paintings**

Visszaadja a festmények listáját.

    [
        {
            "id": 1,
            "title": "Midnightblue Durwardview",
            "year": 1988,
            "on_display": false
        },
        {
            "id":2,
            "title": "Midnightblue Durwardview11",
            "year": 2000,
            "on_display": true
        }
    ]

**POST /api/paintings**

Létrehoz egy új festményt a megadott adatokkal. Az id-n kívül minden mező megadása kötelező!

Visszaadja a létrehozott festmény adatait, beleértve a generált ID-t.

**GET /api/paintings/{id}**

Az *id* azonosítójú festmény adatait adja vissza.

**PATCH /api/paintings/{id}**

Módosítja az *id* azonosítójú festmény adatait. Csak a módosítandó adatokat kell megadni, pl. ha csak az évszámot szeretnénk módosítani, akkor elég ennyit megadni:

    {
        "year": 1888,
    }

Az ID nem módosítható.

Visszaadja a módosított festmény adatait.

**DELETE /api/paintings/{id}**

Törli az adott azonosítójú festményt.

Visszatérésnek nem ad vissza tartalmat.

## Hibakezelés

Ha a végpontot nem megfelelően hívtuk meg, vagy az adatok nem felelnek meg a leírtaknak, a backend az alábbi módon jelzi a hibaeseteket:

* A HTTP státusz kód a 400-as sávból fog kikerülni, a hiba típusának megfelelően
* A visszakapott JSON objetum "message" tulajdonsága tartalmazza a hiba okát.

Pl.: GET http://localhost:8000/api/paintings/9999 (nem létező id)

    404 Not Found
    {
        "message": "No query results for model"
    }

A kérésnél ne felejtsük beállítani az "Accept" header értékét "application/json"-ra!
