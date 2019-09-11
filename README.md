# Skapa formatering-knappar i Wordpress editor inklusive css

## Hur man använder Region Hallands plugin "region-halland-mce-buttons-with-css"

Nedan följer instruktioner hur du kan använda pluginet "region-halland-mce-buttons-with-css".


## Användningsområde

Denna plugin skapar formatering-knappar i Wordpress editor + att man kan koppla en css-fil till edotorn för visuell styling


## Licensmodell

Denna plugin använder licensmodell GPL-3.0. Du kan läsa mer om denna licensmodell via den medföljande filen:
```sh
LICENSE (https://github.com/RegionHalland/region-halland-mce-buttons-with-css/blob/master/LICENSE)
```


## Installation och aktivering

```sh
A) Hämta pluginen via Git eller läs in det med Composer
B) Installera Region Hallands plugin i Wordpress plugin folder
C) Aktivera pluginet inifrån Wordpress admin
```


## Hämta hem pluginet via Git

```sh
git clone https://github.com/RegionHalland/region-halland-mce-buttons-with-css.git
```


## Läs in pluginen via composer

Dessa två delar behöver du lägga in i din composer-fil

Repositories = var pluginen är lagrad, i detta fall på github

```sh
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/RegionHalland/region-halland-mce-buttons-with-css.git"
  },
],
```
Require = anger vilken version av pluginen du vill använda, i detta fall version 1.0.0

OBS! Justera så att du hämtar aktuell version.

```sh
"require": {
  "regionhalland/region-halland-mce-buttons-with-css": "1.0.0"
},
```


## Hur du anger namnet på css-filen i .env-filen

OBS! Själva filen ska ligga i foldern "web/app/themes/[THEME-NAME]/resources/"

```sh
WP_EDITOR_STYLE_CSS=[MY-CSS-FILE.css]
```


## Versionhistorik

### 1.2.0
- Lagt till nya format-mallar

### 1.1.0
- Uppdaterat med information om licensmodell
- Bifogat fil med licensmodell

### 1.0.0
- Första version