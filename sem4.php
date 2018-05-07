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

$title = "Semestr IV";
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
                Czwarty semestr zaczął się niedawno. Trzeba szykować się na sporo wytężonej pracy, ale też na zdobycie nowej, niezwykle
                przydatnej wiedzy. Poniżej możesz przeczytać czego nauczyłem się do tej pory i jakie mam oczekiwania po tym semestrze.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Algorytmy i struktury danych</h2>
            <h3 class="lato-font">Prowadzący: dr inż. Zbigniew Gołębiewski</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Poznałem notację asymptotyczną. Zaznajomiłem się z podstawowymi algorytmami sortowania oraz ich złożonością obliczeniową.
                Obecnie na kursie zajmujemy się tematem drzew binarnych.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Rzeczą, która szczególnie będzie mnie interesować podczas kursu, będą na pewno algorytmy zrandomizowane. Po zakończeniu
                kursu mam zamiar nadal zgłębiać swoją wiedzę z zakresu algorytmiki, gdyż wiążę z tą dziedziną informatyki swoje studia
                II stopnia.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Wprowadzenie do teorii grafów</h2>
            <h3 class="lato-font">Prowadzący: prof. dr hab. Michał Morayne</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Nauczyłem się podstawowych pojęć, którymi operuje się badając grafy. Obecnie zajmujemy się tematyką grafów eulerowskich.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Chciałbym dowiedzieć się więcej o praktycznym zastosowaniu grafów w informatyce oraz jak takie problemy, wykorzystujace grafy,
                rozwiązuje się za pomocą odpowiednich narzędzi (języków programowania).
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Technologie sieciowe</h2>
            <h3 class="lato-font">Prowadzący: dr inż. Łukasz Krzywiecki</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Powtórzyłem i utrwaliłem znane dotychczas widomości o sieciach. Nauczyłem się korzystać z podstawowych programów takich
                jak Ping czy Traceroute. Dowiedziałem się jak opisywać i modelować przepływ danych w sieci za pomocą grafów.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                W jaki sposób przesyłane są dane w sieci WWW oraz jak wygląda serwerownia Katedry Informatyki WPPT.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Nowoczesne technologie WWWW</h2>
            <h3 class="lato-font">Prowadzący: prof. dr hab. Jacek Cichoń</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Poznałem podstawowe znaczniki HTML5 i CSS3. Dowiedziałem się trochę na temat teorii kolorów i w jaki sposób z nich
                korzystać na budowanych stronach. Poznałem podstawowe zasady, którymi rządzi się design stron WWWW. Zacząłem również
                naukę języka JavaScript.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                W jaki sposób wykorzystywać frameworki takie jak Bootstrap, Foundation czy Django.
            </p>
        </div>
    </div>
</div>

<div class="row background-color-2">
    <div class="col-6-6 text-on-background">
        <div class="subject">
            <h2 class="roboto-font">Grafika komputerowa i wizualizacja</h2>
            <h3 class="lato-font">Prowadzący: dr Marcin Kik</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-3-6">
            <h2 class="roboto-font">Czego się dowiedziałem?</h2>
            <p class="lato-font">
                Poznałem podstawy obsługi WebGL z wykorzystaniem języka JavaScript. Nauczyłem się tworzyć prostą grafikę
                w technologii Canvas.
            </p>
        </div>
        <div class="col-3-6">
            <h2 class="roboto-font">Czego warto się douczyć?</h2>
            <p class="lato-font">
                Oprócz WebGL chciałbym nauczyć się także najnowszego OpenGL, który jest nieco bardziej skomplikowany od swojego
                webowego odpowiednika
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-6-6">
            <p class="lato-font">
                Oprócz tych kursów, realizuję obecnie jeszcze dwa kursy humanistyczne: "Podstawy negocjacji" prowadzone przez
                mgr Mariannę Zacharewicz i "Przedsiębiorczość" prowadzoną przez dr Aldonę Dereń.
            </p>
            <p class="lato-font">
                W tym semestrze mieliśmy do wyboru 5 kursów wybieralnych. Oprócz tych, na które ja się zapisałem, miałem do wyboru jeszcze dwa inne,
                którymi były: "Programowanie w logice", prowadzone przez dr Przemysława Kobylańskiego, i "Wprowadzenie do funkcji zespolonych", prowadzone
                przez prof. dr hab. Michała Morayne.
            </p>
        </div>
    </div>
</div>
<?php
echo $page_gen->gen_end();
?>
