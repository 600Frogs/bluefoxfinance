<?php 
$title = "Is Housing Affordability in Brisbane Really a Problem?";
$description = "Housing affordability is a hot topic of late, with prices at an all-time";
$canonical = "https://bluefoxfinance.com.au/information-directory";
ob_start() ?>
<section class='main-content-area'>
    <h1>Useful Information</h1>
</section>


<?php

$dir = "useful-information/*";
$output = "<section class='main-content-area blog-content'>";

foreach(glob($dir) as $file)  
{  
    $file_contents = file_get_contents($file);
    $img_src = substr( $file_contents, strpos($file_contents, "feature_src = ") + 15, strpos($file_contents, ".png") - strpos($file_contents, "feature_src = ") - 11);
    $output .= "<a class='article-preview' href = '" . $config['URL'] . substr($file, strpos($file, "useful-information")) . "'>"
            . "<div class='flex-box full-width'>" 
            . "<h2>"
            . substr( $file_contents, strpos($file_contents, "<h1>") + 4, strpos($file_contents, "</h1>") - strpos($file_contents, "<h1>") - 4)
            . "</h2>"
            . "<div class='flex-box half-width'>"
            . "<p>";
            $pre_first_para = substr( $file_contents, strpos($file_contents, "<p>") + 3, strpos($file_contents, "</p>") - strpos($file_contents, "<p>") - 3);
            $first_para = strip_tags( $pre_first_para );
            if (strlen($first_para) > 200){
                $text_preview = substr($first_para, 0, 200);
            } else {
                $text_preview = $first_para;
            }
    $output.= $text_preview
            . "..."
            . "</p>"
            . "<div class='click-for-more-info'>Click for more info!</div>"
            . "</div>"
            . "<div class='flex-box half-width'>"
            . "<div><img src="
            . $img_src
            . "></div>"
            . "</div>"
            . "</div>"
            . "</a>";
}

$output .= "</section>";

echo $output;
include "components/sidebar.php";

?>
    
<?php $content = ob_get_clean() ?>

<?php require "layout.php" ?>




