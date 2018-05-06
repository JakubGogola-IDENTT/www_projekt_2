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

$title = "Semestr III";
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
                Na trzecim semestrze czekało nas wyzwanie w postaci kursu Architektura komputerów i systemy operacyjne.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Architektura komputerów i systemy operacyjne</h2>
            <h3 class="lato-font">Prowadzący: dr inż. Marcin Zawada</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Ten kurs był naprawdę bardzo, bardzo prosty! A tak na poważnie to ogrom wiedzy o tym, jak działa komputer
                oraz "Wszystko co chciałeś wiedzieć o Linuxie, ale wstydziłeś się zapytać".
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Linux, Linux i jeszcze raz Linux! Warto pogłębiać swoją wiedzę na temat tego OS, bo to podstawowe narzędzie wykorzystywane
                obecnie w wielu miejscach pracy.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Technologia programowania</h2>
            <h3 class="lato-font">Prowadzący: dr inż. Jakub Lemiesz</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Z tego przedmiotu wyniosłem bardzo przydatną i użyteczną wiedzę. Była to kontynuacja nauki Javy.
                Dowiedziałem się jak w poprawny sposób korzystać z IDE, jak korzystać z wzorców projektowych i do czego służą repozytoria.
                Miałem też okazję sprawdzić swoje umiejętności podczas implementacji gry trylma, którą realizowaliśmy w dwuosobowych
                zespołach.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Pod koniec kursu poopowiadaliśmy sobie trochę o frameworkach: Akka, Play i Spring, jednych z podstawowych narzędzi dzisiejszego
                programisty Javy. Mam zamiar poszerzyć swoją wiedzę i poćwiczyć pracę z tymi narzędziami.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Metody probabilistyczne i statystyka</h2>
            <h3 class="lato-font">Prowadzący: dr Małgorzata Kuchta</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Wprowadzenie do rachunku prawdopodobieństwa z elementami statystyki. Niezwykle ważna wiedza na kursie
                Algorytmy i struktury danych, który realizujemy podczas trwania IV semestru.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Warto poszerzyć swoją wiedzę odnośnie staystyki, która przyda się przy nauce machine learning.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Bazy danych i systemy informacyjne</h2>
            <h3 class="lato-font">Prowadzący: dr inż. Piotr Syga</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Nauka o budowie baz danych oraz wykorzystaniu języka zapytań SQL. Pod koniec kursu mieliśmy za zadanie zaprojektować
                i zaprogramować aplikację, która korzysta z bazy danych.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Chciałbym dowiedzieć się nieco więcej o bazach danych typu noSQL.
            </p>
        </div>
    </div>
</div>
<?php
echo $page_gen->gen_end();
?>
