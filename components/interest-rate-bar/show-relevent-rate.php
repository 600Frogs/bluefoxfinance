<?php

function returnDesktopCSS() {
    $pageName = basename($_SERVER['PHP_SELF']);
    if (strpos($pageName, 'index') !== false){
        $cssVal = '#investment, #owner-occupied, #car-loan, #personal-loan{display:inline-block;}';
    }
    else if (strpos($pageName, 'owner') !== false){
        $cssVal = '#owner-occupied{display:inline-block;}';
    }
    else if (strpos($pageName, 'car') !== false){
        $cssVal = '#car-loan{display:inline-block;}';
    }
    else if (strpos($pageName, 'personal') !== false){
        $cssVal = '#personal-loan{display:inline-block;}';
    }
    else if (strpos($pageName, 'refinance') !== false){
        $cssVal = '#refinances{display:inline-block;}';
    }
    else if (strpos($pageName, 'pre-approval') !== false){
        $cssVal = '#pre-approvals{display:inline-block;}';
    }
    else {
        $cssVal = '#investment, #owner-occupied{display:inline-block;}';
    }
    return $cssVal;
}


function returnMobileCSS() {
    $pageName = basename($_SERVER['PHP_SELF']);
    
    if (strpos($pageName, 'home') !== false){
        $cssVal = '#investment{display:none;}';
    }
    else if (strpos($pageName, 'investment') !== false){
        $cssVal = '#owner-occupied{display:none;}';
    }
    else if (strpos($pageName, 'index') !== false){
       $cssVal = '#investment,#car-loan,#personal-loan{display:none;}';
    }
    else {
        $cssVal = '#investment{display:none;}';
    }
    return $cssVal;
}
?>


<style>

<?php 
$cssToOutput = returnDesktopCSS();
echo $cssToOutput; 
?>    
    
@media screen and (max-width: 740px) {

<?php 
$cssToOutput = returnMobileCSS();
echo $cssToOutput; 
?>
        
    }
</style>