<?php
function addHeaderStyling(){
    $pageName = basename($_SERVER['PHP_SELF']);
    if (strpos($pageName, 'index') !== false){
        include "css/home-header-css.php";
    } else {
        include "css/header-only-css.php";
    }
}


function addComponentStyling(){
    $pageName = basename($_SERVER['PHP_SELF']);    

    include "css/interest-rate-bar.php";

    $pagesWithCards = array( "home-loan-services", "business-loan-services" );
    foreach ($pagesWithCards as $page) {   
        if (strpos($pageName, $page) !== false) {
            include "css/cards-only-css.php";
        }
    }
    
    $pagesThatNeedFooter = array( "business-loan-services", "contact", "404" );
    foreach ($pagesThatNeedFooter as $page) {   
        if (strpos($pageName, $page) !== false) {
            include "css/footer-only-css.php";
        }
    }
    
    if (strpos($pageName, "information-directory") !== false) {
        include "css/useful-information-page-css.php";
    }
}


function addRegularStyling() {
    $pageName = basename($_SERVER['PHP_SELF']);
    $exclusionsFromRegularStyling = array ( "index", "home-loan-services", "business-loan-services");
    foreach ($exclusionsFromRegularStyling as $page) {   
        if (strpos($pageName, $page) !== false) {
            return;
        }
    }
    $pagePath = $_SERVER['REQUEST_URI'];
    if (strpos($pagePath, "information") !== false) {
        include "css/blog-content-css.php";
        include "css/sidebar-css.php";
    } else {
        include "css/regular-page-content-css.php";;
    }
}

addHeaderStyling();
addComponentStyling();
addRegularStyling();