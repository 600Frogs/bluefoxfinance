<?php 
include_once "components/interest-rate-bar/info.php";
$title = "Mortgage Broker Brisbane - Rates from ".OOrate().", ".OOcomrate()."CR*";
$description = "Mortgage Broker Brisbane. *Comparison rate: details on website. Pre-approvals, purchases and refinances available.  We do not charge for our home loan services.";
$canonical = "https://bluefoxfinance.com.au";
ob_start();

    include "home-schema.php";
     include "components/mortgage-broker-brisbane-header.php";
    include "home-content.php";
    
$content = ob_get_clean();

require "layout.php";