<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 2018-05-05
 * Time: 19:52
 */

require_once(__DIR__ . "/gen/page_gen.php");
require_once(__DIR__."/gen/menu_item.php");
require_once(__DIR__."/gen/return_item.php");

$title = "Semestr I";
$content = "Strona o mnie i moich zainteresowanich";
$author = "Jakub Gogola";
$styles = ["style.css", "grid.css", "reset.css"];
$fonts = ["https://fonts.googleapis.com/css?family=Roboto", "https://fonts.googleapis.com/css?family=Lato"];
$scripts = [];

$menu_items[] = new menu_item("Edukacja", "education.php");
$menu_items[] = new menu_item("Hobby", "hobby.php");
$menu_items[] = new menu_item("Kontakt", "contact.php");

$return_items[] = new return_item("Strona główna", "index.php");
$return_items[] = new return_item("Edukacja", "education.php");

$page_gen = new page_gen($title, $content, $author, $styles, $fonts, $scripts, $menu_items, $return_items);

echo $page_gen->gen_begin();
?>
<div class="container">
    <div class="row">
        <div class="col-6-6">
            <p class="lato-font">
                Pierwszy semestr studiów był dosyć ciężki - nowi ludzie, nowe wyzwania. Zupełnie inny tryb nauki niż dotychczas.
                Trzeba było się jednak zmierzyć z postawionym przede mną wyzwaniem.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Analiza matematyczna I</h2>
            <h3 class="lato-font">Prowadzący: prof. dr hab. Paweł Krupski</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Podczas kursu "Analiza matematyczna I" powtórzyłem sobie rachunek różniczkowy, który uprzednio poznałem w liceum.
                Dowiedziałem się czym jest całka oraz jak obliczyć ten matematyczny "twór" mając zadaną dowolną funkcję.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Myślę, że warto byłoby poszerzyć swoją wiedzę o teorię funkcji zespolonych.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Algebra z geometrią analtyczną</h2>
            <h3 class="lato-font">Prowadzący: prof. dr hab. Jacek Cichoń</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Podczas tego kursu dowiedziałem się czym jest teoria grup, powtórzyłem i rozszerzyłem swoje wiadomości na temat liczb zespolonych
                i wielomianów oraz dowiedziałem się czym są macierze.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Profesor Cichoń często wspominał o zastosowaniu algebry w grafice komputerowej. Myślę, że jest to ciekawy temat do studiowania.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Logika i struktury formalne</h2>
            <h3 class="lato-font">Prowadzący: dr hab. Szymon Żeberski</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Doktor Żeberski wprowadził nas w świat logiki matematycznej, teorii mnogości oraz poopowiadł trochę czym jest teoria modeli.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Dosyć ciekawą dziedziną matematyki wydały mi się struktury formalne, czyli wspomniana teoria modeli. Warto by o tym trochę poczytać.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Wstęp do informatyki i programowania</h2>
            <h3 class="lato-font">Prowadzący: dr Przemysław Kobylański</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Dla mnie był to kurs, na którym mogłem powtórzyć swoją wiedzę na temat języka C i algorytmów nabytą w szkole średniej. A poza tym,
                gdyby na czyjś dom spadł samolot, to na pewno nie byłby oprogramowany w Adzie...
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Język C to naprawdę ciekawe zjawisko. Daje programiście dużo swobody i pozwala na robienie momentami
                niesamowitych rzeczy ze swoim komputerem. Warto by się tym zająć...
            </p>
        </div>
    </div>
</div>
<?php
echo $page_gen->gen_end();
?>
