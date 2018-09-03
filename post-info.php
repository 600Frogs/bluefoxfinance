<?php


$output = "<section class='main-content-area blog-info'>"
        . "<div class='blank-space'></div>"
        . "Last updated:&nbsp"
        . "<div id='pub-date'>"
        . $pub_date
        . "</div>"
        . "&nbsp &nbsp &nbsp &nbsp"
        . "Author:&nbsp"
        . "<div id='author'>"
        . $author
        . "</div>"
        . "</section>";

echo $output;

