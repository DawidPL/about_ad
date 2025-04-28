# Landing Page - Aloe

Prosty i nowoczesny landing page z dynamicznymi hotspotami, rwd mobile first oraz dodatkowymi funkcjonalnościami jak formularz kontaktowy, scroll to top i animacje.

## Omówienie

Napisałem całość w czystym kodzie aby pokazać swoje umiejętności od A do Z. Nie skorzystałem z gotowych systemów jak np wspomniany w zadaniu Wordpress. Uważam, że do tak prostej strony zbędne jest dodatkowe obciążenie całym zapleczem CMSa, które może negatywnie odbić się w Google. Dzięki kompleksowemu podejściu i napisaniu strony od 0 wdrożyłem tylko to, czego wymagał projekt. 

Dodatkowo dodałem 2 wersję strony w wersji php. Dostępna w folderze V2/. Poprzez includowanie poszczególnych elementór wygląda to bardziej czytelnie. Zależnie od tego czy mamy serwer do uruchomienia można wybrać wersję php lub html.

## Problemy

Nie miałem pewności jak ma wyglądać wersja mobilna: gdzie zachować jakie odległości, czy najpierw powinien być tekst a potem grafika a może odwrotnie, jak mocno skalować itp. Na to poświęciłem najwięcej czasu, ustawiając wszystko wg mojej wizji. 

## Technologie

- **HTML5**
- **CSS3** (responsive design, `clamp()`, `media queries`)
- **Sass** (zmienne, mixiny)
- **JavaScript** (struktura modułowa, walidacja formularza, scroll to top, hotspoty)
- **PHP** (formularz kontaktowy z wykorzystaniem PHPMailer)
- **Bootstrap 5** (nawigacja, grid, )
- **Animate.css** (gotowe animacje CSS)
- **AOS (Animate On Scroll Library)** (animacje pojawiania się elementów podczas scrollowania)

## Funkcje

- **Automatyczna zmiana aktywnych hotspotów** co 3 sekundy
- **Dynamiczne przypisanie** nagłówka i opisu do aktualnego hotspotu
- **Responsywne skalowanie hotspotów** oraz tekstu
- **Formularz kontaktowy** z walidacją w JavaScript i obsługą wysyłki przez PHPMailer
- **Scroll to Top Button** napisany w czystym JavaScript
- **Responsywność** oparta głównie o `clamp()` i `media queries`
- **Bootstrap 5 Navbar** z responsywnym menu
- **Animacje wejścia elementów** za pomocą AOS oraz Animate.css

## Uruchomienie lokalnie
git 
1. Pobierz/sklonuj repozytorium:

   git clone https://github.com/DawidPL/about_ad.git

2. Dla wersji HTML po prostu uruchom plik index.html w przeglądarce.

3. Dla wersji PHP potrzebujesz serwera lub możesz uruchomić lokalnie korzystająć np. z XAMPP:
 - po zainstalowaniu uruchom XAMPP,
 - przy Apache klinij "start", 
 - w folderze instalacyjnym XAMPP znajdź subfolder htdocs,
 - utwórz jakiś nowy folder i skopiuj tam pliki z folderu v2,
 - wejdz do przeglądarki i wpisz http://localhost/tutajNazwaFolderu
 - gotowe :) 

## Autor

- Dawid Hrynkiewicz
- [LinkeIn](https://www.linkedin.com/in/dawid-hrynkiewicz/)
- [GitHub](https://github.com/DawidPL)
