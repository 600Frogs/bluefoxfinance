<?php 

$title = "Error, Page not found - Blue Fox Finance";
$description = "Error, Page not found - Blue Fox Finance";
$canonical = "https://bluefoxfinance.com.au/404";

ob_start();
?>

    <section class="main-content-area">
        <h1>Sorry, we could not find that page!</h1>
        <img src="/media/404.png">
    </section>

<?php
$content = ob_get_clean();

require "layout.php";
