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

$title = "Jakub Gogola";
$content = "Strona o mnie i moich zainteresowanich";
$author = "Jakub Gogola";
$styles = ["style.css", "grid.css", "reset.css"];
$fonts = ["https://fonts.googleapis.com/css?family=Roboto", "https://fonts.googleapis.com/css?family=Lato"];
$scripts = [];

$menu_items[] = new menu_item("Edukacja", "education.php");
$menu_items[] = new menu_item("Hobby", "hobby.php");
$menu_items[] = new menu_item("Kontakt", "contact.php");

$page_gen = new page_gen($title, $content, $author, $styles, $fonts, $scripts, $menu_items, []);

echo $page_gen->gen_begin();
?>
    <div class="container">
        <div class="row">
            <div class="col-2-6">
                <img src="images/jg.jpg" alt="error" class="author-photo">
            </div>
            <div class="col-4-6">
                <p class="lato-font">
                    Jestem Kuba. Obecnie studiuję informatykę na Wydziale Podstawowych Problemów Techniki na Politechnice Wrocławskiej.
                    Oprócz pogłębiania swojej informatycznej wiedzy, w wolnych chwilach lubię przeczytać dobrą książkę fantasy, pojeździć na rowerze
                    albo zrobić kilka zdjęć.
                </p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">

            <div class="col-4-6">
                <p class="lato-font">
                    Jak już wcześniej wspomniałem, studiuję informatykę. Jestem programistą. Najchętniej piszę programy
                    w takich językach jak Java, C czy C++. Ostatnio zainteresowałem się również językiem Go. Zapraszam do odwiedzenia mojego repozytorium na
                    <a href="https://github.com/JakubGogola">GitHubie</a>.

                </p>
            </div>

            <div class="col-2-6">
                <img src="images/github.png" alt="error" class="code-icon">
            </div>
        </div>
    </div>

<?php
echo $page_gen->gen_end();
?>