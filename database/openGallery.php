<?php

$value = $_REQUEST["q"];
if ($value === " Kviste") {
    echo '<div class="row">';
    $dir = glob("../images/kviste/*.jpg");
    for ($i = 1; $i <= count($dir); $i++) {
        echo '<div class="col-md-4">'
        . '<a href="images/kviste/kviste' . $i . '.jpg" class="thumbnail">'
        . '<img src="images/kviste/kviste' . $i . '.jpg" width="150px" height="150px">'
        . '</a>'
        . '</div>';
    }
    echo '</div>';
} else if ($value === " Tilbygninger") {
    echo '<div class="row">';
    $dir = glob("../images/tilbygning/*.jpg");
    for ($i = 1; $i <= count($dir); $i++) {
        echo '<div class="col-md-4">'
        . '<a href="images/tilbygning/tilbygning' . $i . '.jpg" class="thumbnail">'
        . '<img src="images/tilbygning/tilbygning' . $i . '.jpg" width="150px" height="150px">'
        . '</a>'
        . '</div>';
    }
    echo '</div>';
} else if ($value === " Køkken") {
    echo '<div class="row">';
    $dir = glob("../images/koekken/*.jpg");
    for ($i = 1; $i <= count($dir); $i++) {
        echo '<div class="col-md-4">'
        . '<a href="images/koekken/koekken' . $i . '.jpg" class="thumbnail">'
        . '<img src="images/koekken/koekken' . $i . '.jpg" width="150px" height="150px">'
        . '</a>'
        . '</div>';
    }
    echo '</div>';
} else if ($value === " Tag") {
    echo '<div class="row">';
    $dir = glob("../images/tag/*.jpg");
    for ($i = 1; $i <= count($dir); $i++) {
        echo '<div class="col-md-4">'
        . '<a href="images/tag/tag' . $i . '.jpg" class="thumbnail">'
        . '<img src="images/tag/tag' . $i . '.jpg" width="150px" height="150px">'
        . '</a>'
        . '</div>';
    }
    echo '</div>';
} else if ($value === " Terrasser") {
    echo '<div class="row">';
    $dir = glob("../images/terasse/*.jpg");
    for ($i = 1; $i <= count($dir); $i++) {
        echo '<div class="col-md-4">'
        . '<a href="images/terasse/terasse' . $i . '.jpg" class="thumbnail">'
        . '<img src="images/terasse/terasse' . $i . '.jpg" width="150px" height="150px">'
        . '</a>'
        . '</div>';
    }
    echo '</div>';
} else if ($value === " Trapper") {
    echo '<div class="row">';
    $dir = glob("../images/trappe/*.jpg");
    for ($i = 1; $i <= count($dir); $i++) {
        echo '<div class="col-md-4">'
        . '<a href="images/trappe/trappe' . $i . '.jpg" class="thumbnail">'
        . '<img src="images/trappe/trappe' . $i . '.jpg" width="150px" height="150px">'
        . '</a>'
        . '</div>';
    }
    echo '</div>';
} else if ($value === " Træ konstruktioner") {
    echo '<div class="row">';
    $dir = glob("../images/trae/*.jpg");
    for ($i = 1; $i <= count($dir); $i++) {
        echo '<div class="col-md-4">'
        . '<a href="images/trae/trae' . $i . '.jpg" class="thumbnail">'
        . '<img src="images/trae/trae' . $i . '.jpg" width="150px" height="150px">'
        . '</a>'
        . '</div>';
    }
    echo '</div>';
} else if ($value === " Lofter") {
    echo '<div class="row">';
    $dir = glob("../images/loft/*.jpg");
    for ($i = 1; $i <= count($dir); $i++) {
        echo '<div class="col-md-4">'
        . '<a href="images/loft/loft' . $i . '.jpg" class="thumbnail">'
        . '<img src="images/loft/loft' . $i . '.jpg" width="150px" height="150px">'
        . '</a>'
        . '</div>';
    }
    echo '</div>';
} else if ($value === " Borde/Skilte") {
    echo '<div class="row">';
    $dir = glob("../images/bordskilt/*.jpg");
    for ($i = 1; $i <= count($dir); $i++) {
        echo '<div class="col-md-4">'
        . '<a href="images/bordskilt/bordskilt' . $i . '.jpg" class="thumbnail">'
        . '<img src="images/bordskilt/bordskilt' . $i . '.jpg" width="150px" height="150px">'
        . '</a>'
        . '</div>';
    }
    echo '</div>';
} else if ($value === " Gulve") {
    echo '<div class="row">';
    $dir = glob("../images/gulv/*.jpg");
    for ($i = 1; $i <= count($dir); $i++) {
        echo '<div class="col-md-4">'
        . '<a href="images/gulv/gulv' . $i . '.jpg" class="thumbnail">'
        . '<img src="images/gulv/gulv' . $i . '.jpg" width="150px" height="150px">'
        . '</a>'
        . '</div>';
    }
    echo '</div>';
} else if ($value === " Gips") {
    echo '<div class="row">';
    $dir = glob("../images/gips/*.jpg");
    for ($i = 1; $i <= count($dir); $i++) {
        echo '<div class="col-md-4">'
        . '<a href="images/gips/gips' . $i . '.jpg" class="thumbnail">'
        . '<img src="images/gips/gips' . $i . '.jpg" width="150px" height="150px">'
        . '</a>'
        . '</div>';
    }
    echo '</div>';
}

