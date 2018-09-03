
<?php 

function getCurrentURL()
{
    $currentURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
    $currentURL .= $_SERVER["SERVER_NAME"];
 
    if($_SERVER["SERVER_PORT"] != "80" && $_SERVER["SERVER_PORT"] != "443")
    {
        $currentURL .= ":".$_SERVER["SERVER_PORT"];
    } 
 
        $currentURL .= $_SERVER["REQUEST_URI"];
    return $currentURL;
}

$dir = $_SERVER['DOCUMENT_ROOT'] . "/useful-information/*";

$output = "<div id='sidebar'>"
        . "<h3>More Information</h3>"
        . "<ul>";

foreach(glob($dir) as $file)  
{  
    $file_contents = file_get_contents($file);
    $output .= "<a href='"
            . $config['URL'] . substr($file, strpos($file, "useful-information"))
            . "'>"
            . "<li";
    if ( getCurrentURL() === 'https://' . $_SERVER['HTTP_HOST'] . substr($file, strpos($file, "/useful-information"))) {
        $output .= " class='active' ";
    } 
    $output .= ">"
            . substr( $file_contents, strpos($file_contents, "<h1>") + 4, strpos($file_contents, "</h1>") - strpos($file_contents, "<h1>") - 4)
            . "</li></a><br>" ;
}

$output .= "</ul></div>";

echo $output;
