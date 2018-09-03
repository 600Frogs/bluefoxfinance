<?php 
$title = "Investment Home Loans Brisbane - Blue Fox Finance";
$description = "Our Mortgage Brokers can assist with a wide variety of home loan products, including investment home loans.  We have access to over 25 different lenders offering investment home loans and can help you find the best one to suit your needs!";
$canonical = "https://bluefoxfinance.com.au/home-loans/investment";
ob_start() ?>

<?php include "components/interest-rate-bar/main.php";?> 

<section class="main-content-area">
    <h1>Investment Home Loans</h1>
    <p>We have access a wide variety of lenders, with over 25 different lenders offering investment home loans.  We can help filter which lenders are likely to approve your home loan, then filter over 1000 products in real time to help you decide which suits you best.</p>
    <div class="flex-box">
        <div class="flex-box half-width">
            <?php include "components/contact-form/form.php";?> 
        </div>
        <div class="flex-box half-width">
            <?php echo INVfeatures(); ?>
        </div>
    </div>
    <?php include "components/general-features.php";?>
    <div class='blank-space'></div>
    <div>
        <?php echo INVdisclaimer();?>
    </div>
    <div class='blank-space'></div>
</section>
<?php $content = ob_get_clean() ?>

<?php require "layout.php" ?>