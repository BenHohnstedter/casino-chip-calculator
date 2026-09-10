# Beach Casino Night – Chip Rechner

Eine kleine PHP-Anwendung, die den Geldbetrag aus den ausgewählten Poker-Chips berechnet. Entstanden als Helfer für eine Casino-Theme-Party, bei der die Gäste mit Chips ihre Spielstände aufstellen.

## Funktionen

- Eingabe der Anzahl für jede Chipwertigkeit (1, 5, 10, 25, 50, 100, 500, 1000)
- Berechnung der Gesamtsumme aller Chips
- Eigenes Farbschema im Casino-Style, aufgebaut mit Bootstrap 5
- Responsive Darstellung für Desktop und Smartphone

## Technologien

- PHP
- HTML5 & CSS
- Bootstrap 5 (CDN)

## Starten

Keine Datenbank, keine Abhängigkeiten – einfach inside den Ordner in ein beliebiges Webverzeichnis (z. B. `htdocs`) kopieren und im Browser öffnen.

**Lokal lauffähig unter:** `http://localhost/pu-casino-chip-calculator/`

```
index.php      – Eingabemaske für die Chips
result.php     – Berechnung und Anzeige der Summe
```

## Struktur

```
Resource/
├── Css/style.css      – eigenes Design
└── Img/               – Chip-Grafiken (SVG-artige WebP-Dateien)
```

## Projektbezug

Erste kleine PHP-Übung im Selbststudium – Themen: Formularverarbeitung, `$_POST`, Schleifen und einfaches UI-Design.