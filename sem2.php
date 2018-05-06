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

$title = "Semestr II";
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
                W drugim semestrze już zupełnie zadomowiłem się w nowej szkole. Nauka szła o wiele łatwiej.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Analiza matematyczna II</h2>
            <h3 class="lato-font">Prowadzący: prof. dr hab. Paweł Krupski</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Kontynuacja kursu "Analiza matematyczna I". Poszerzyliśmy zasoby swojej wiedzy o funkcje wielu zmiennych.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Trudno powiedzieć, zważywszy na to, że analiza raczej nie należy do moich ulubionych zagadnień.
                Osobiście wystarczy mi już chyba wrażeń związanych z tym przedmiotem.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Algebra abstrakcyjna i kodowanie</h2>
            <h3 class="lato-font">Prowadzący: prof. dr hab. Jacek Cichoń</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Poniekąd rozszerzenie informacji z algebry z I semestru. Wprowadzenie do algorytmów szyfrującyh i teorii kodowania.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Warto poczytać trochę o kryptografii, bo to bardzo ważny w dzisiejszych czasach temat, a ten kurs daje dobre podstawy
                do kontynuowania nauki w tej dziedzinie informatyki.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Matematyka dyskretna</h2>
            <h3 class="lato-font">Prowadzący: dr hab. Szymon Żeberski</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Świetny kurs! Podstawy zlicznia, trochę teorii grafów, niesamowicie przydatne funkcje tworzące i trochę klas kombinatorycznych.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Widzę z matematyki dyskretnej wykorzystuję na bieżąco, podczas wielu kursów. Trudno jednoznacznie określić czego warto się douczyć.
                Myślę, że warto po prostu na bieżąco uzupełniać swoje informacje, a także od czasu do czasu powtórzyć to, czego się wtedy nauczyliśmy.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Kurs programowania</h2>
            <h3 class="lato-font">Prowadzący: dr inż. Wojciech Macyna</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Wprowadzenie w podstawy programowania w językach Java i C++.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Warto nauczyć się wzorców projektowych.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="physic-style">Fizyka</h2>
            <h3 class="physic-style">Prowadzący: dr hab. inż. Włodzimierz Salejda, prof. nadzwyczajny</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="physic-style">Czego się dowiedziałem?</h2>
            <p class="physic-style">
                Podczas tego kursu dowiedziałem się, że nie warto ufać Polwro w kwestii wyobru prowadzącego ćwiczenia.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="physic-style">Czego warto się douczyć?</h2>
            <p class="physic-style">
                Wszystkiego o czym, w założeniu, miał być ten kurs.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-6-6 physic-style">
            Wygląd niniejszej sekcji jest inspirowany <a href="http://www.if.pwr.wroc.pl/~wsalejda/">stroną prowadzącego.</a>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Problemy prawne informatyki</h2>
            <h3 class="lato-font">Prowadzący: prof. dr hab. Mirosław Kutyłowski</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Dowiedzieliśmy się trochę o tym, jak ciężkie jest życie informatyka i jak dużo czeka prawnych pułapek na zwykłego,
                szarego programistę.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Na codzień poszerzać swoją wiedzę z prawa, bo "nieznajomość prawa szkodzi".
            </p>
        </div>
    </div>
</div>
<?php
echo $page_gen->gen_end();
?>
