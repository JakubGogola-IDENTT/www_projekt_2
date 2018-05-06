<?php
/**
 * Created by PhpStorm.
 * User: Jakub
 * Date: 2018-05-06
 * Time: 14:01
 */

require_once(__DIR__ . "/gen/page_gen.php");


$title = "Hobby";
$content = "Strona o mnie i moich zainteresowanich";
$author = "Jakub Gogola";
$styles = ["style.css", "grid.css", "reset.css"];
$fonts = ["https://fonts.googleapis.com/css?family=Roboto", "https://fonts.googleapis.com/css?family=Lato"];
$scripts = [];

$menu_items[] = new menu_item("Edukacja", "education.php");
$menu_items[] = new menu_item("Hobby", "hobby.php");
$menu_items[] = new menu_item("Kontakt", "contact.php");

$return_items[] = new return_item("Strona główna", "index.php");

$page_gen = new page_gen($title, $content, $author, $styles, $fonts, $scripts, $menu_items, $return_items);

echo $page_gen->gen_begin();
?>

<div class="container">
    <div class="row">
        <div class="col-2-6">
            <img src="images/author.jpg" alt="error" class="hobby-author-photo">
        </div>
        <div class="col-4-6">
            <p class="lato-font">
                Posiadam wiele zainteresowań, ale moje dwie ulubione rzeczy to czytanie książek fantasy i fotografia. Poniżej znajdziesz
                kilka moich ulubionych książek (lub ich serii) i parę moich zdjęć. Oprócz tego, co możesz tutaj obejrzeć i przeczytać,
                lubię jeździć na rowerze, pływać i chodzić po górach. Szczególnie podczas wykonywania tej ostatniej czynności, zdarza mi się
                uchwycić wiele niesamowitych kadrów. Niestety, ostatnio mam co raz mniej czasu na oddawanie się moim pasjom, ale staram się
                poświęcać im każdą dostępną chwilę wolnego czasu.
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <!-- J. Grzędowicz (powieści) -->
        <div class="col-2-6 background-color-2 text-on-background">
            <div class="book">
                <h2 class="roboto-font">Pan Lodowego Ogrodu</h2>
                <p class="annotation lato-font">seria</p>
                <h3 class="lato-font">Autor: Jarosław Grzędowicz</h3>
            </div>
        </div>
        <div class="col-2-6 background-color-2 text-on-background">
            <div class="book">
                <h2 class="roboto-font">Popiół i kurz</h2>
                <p class="annotation lato-font">powieść</p>
                <h3 class="lato-font">Autor: Jarosław Grzędowicz</h3>
            </div>
        </div>
        <div class="col-2-6 background-color-2 text-on-background">
            <div class="book">
                <h2 class="roboto-font">Hel 3</h2>
                <p class="annotation lato-font">powieść</p>
                <h3 class="lato-font">Autor: Jarosław Grzędowicz</h3>
            </div>
        </div>
    </div>

    <!-- J. Grzędowicz (zbiory opowiadań) -->
    <div class="row">
        <div class="col-2-6 background-color-2 text-on-background">
            <div class="book">
                <h2 class="roboto-font">Księga Jesiennych Demonów</h2>
                <p class="annotation lato-font">zbiór opowiadań</p>
                <h3 class="lato-font">Autor: Jarosław Grzędowicz</h3>
            </div>
        </div>
        <div class="col-2-6 background-color-2 text-on-background">
            <div class="book">
                <h2 class="roboto-font">Wypychacz zwierząt</h2>
                <p class="annotation lato-font">zbiór opowiadań</p>
                <h3 class="lato-font">Autor: Jarosław Grzędowicz</h3>
            </div>
        </div>
        <div class="col-2-6 background-color-2 text-on-background">
            <div class="book">
                <h2 class="roboto-font">Azyl</h2>
                <p class="annotation lato-font">zbiór opowiadań</p>
                <h3 class="lato-font">Autor: Jarosław Grzędowicz</h3>
            </div>
        </div>
    </div>

    <!-- Inne -->
    <div class="row">
        <div class="col-2-6 background-color-2 text-on-background">
            <div class="book">
                <h2 class="roboto-font">Kroniki Czarnej Kompanii</h2>
                <p class="annotation lato-font">seria</p>
                <h3 class="lato-font">Autor: Glen Cook</h3>
            </div>
        </div>
        <div class="col-2-6 background-color-2 text-on-background">
            <div class="book">
                <h2 class="roboto-font">Gra o Tron</h2>
                <p class="annotation lato-font">seria</p>
                <h3 class="lato-font">Autor: George R. R. Martin</h3>
            </div>
        </div>
        <div class="col-2-6 background-color-2 text-on-background">
            <div class="book">
                <h2 class="roboto-font">Wykłady ze Wstępu do Matematyki</h2>
                <p class="annotation lato-font">skrypt</p>
                <h3 class="lato-font">Autor: Jacek Cichoń</h3>
            </div>
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        <div class="col-6-6">
            <p class="lato-font">
                Tutaj kilka popełnionych przeze mnie zdjęć.
            </p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-3-6">
            <img src="images/hobby/zima.JPG" alt="error" class="photo">
        </div>
        <div class="col-3-6">
            <img src="images/hobby/wodospad.jpg" alt="error" class="photo">
        </div>
    </div>
    <div class="row">
        <div class="col-3-6">
            <img src="images/hobby/uniwerek.JPG" alt="error" class="photo">
        </div>
        <div class="col-3-6">
            <img src="images/hobby/kwiatek.jpg" alt="error" class="photo">
        </div>
    </div>
</div>

<?php
echo $page_gen->gen_end();
?>
