<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85229875-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-85229875-1');
    </script>
    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $description ?>">
    <?php if (isset($canonical)) { ?>
        <link rel="canonical" href="<?php echo $canonical ?>">
    <?php } ?>
    
    <meta name="msvalidate.01" content="DAB54BE60AA45FBC955B58690878B0D8" />
    <?php include "loader.php"; ?>
    <?php include "internal-css.php"; ?>
</head>
<body>
    
    <div id="top-menu">
        <a data-src="<?php echo $config['URL'] ?>"><img src="<?php echo $config['URL'] ?>media/bff-logo.png" alt="Blue Fox Finance - Mortgage Broker Brisbane" width="80" height="80"></a>
        <span id="menu-bar-title">Blue Fox Finance - Mortgage Broker Brisbane</span>
        <nav>
            <a class="menu-item" id="menu-item-home" href="<?php echo $config['URL'] ?>">Home</a>
            <a class="menu-item" href="<?php echo $config['URL'] ?>home-loan-services.php">Home Loans</a>
            <a class="menu-item" href="<?php echo $config['URL'] ?>car-loan-broker-brisbane.php">Car Loans</a>
            <a class="menu-item" href="<?php echo $config['URL'] ?>personal-loan-broker-brisbane.php">Personal Loans</a>
            <a class="menu-item" href="<?php echo $config['URL'] ?>business-loan-services.php">Business Loans</a>
            <a class="menu-item" href="<?php echo $config['URL'] ?>information-directory.php">Useful Information</a>
            <a class="menu-item" href="<?php echo $config['URL'] ?>contact.php">Contact</a>
        </nav>
    </div>
    <div id="push-down-body"></div>
    <img id="burger-button" src="<?php echo $config['URL'] ?>media/burger.png" alt= "Mortgage Broker Mobile Menu" width="50" height="57" onclick="toggleMobileMenu()"/>
    <div id="overlay" class="hidden" onclick="overlayClicked()"></div>
    <a id="phone-button" href="tel:+61733544576"><img src="<?php echo $config['URL'] ?>media/phone-icon.png" alt="Call our Mortgage Broker Brisbane now!" width="70" height="70"></a>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

