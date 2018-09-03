<?php 
$title = "Owner-Occupied Home Loans Brisbane - Blue Fox Finance";
$description = "We have a large selection of owner-occupied home loan products at our disposal.  We can sift through over 1000 products and bring you a select few competitive offers that might suit your needs and objectives.";
$canonical = "https://bluefoxfinance.com.au/home-loans/owner-occupied";
ob_start() ?>

<?php include "components/interest-rate-bar/main.php";?> 

<section class="main-content-area">
    <h1>Owner-Occupied Loans</h1>
    <p>We have access a wide variety of lenders, with over 25 different lenders offering owner-occupied home loans.  We can help filter which lenders are likely to approve your home loan, then filter over 1000 products in real time to help you decide which suits you best.</p>
    <div class="flex-box">
        <div class="flex-box half-width">
            <?php include "components/contact-form/form.php";?> 
        </div>
        <div class="flex-box half-width">
            <?php OOfeatures(); ?>
        </div>
    </div>
    <?php include "components/general-features.php";?>
    <div class='blank-space'></div>
    <div>
        <?php echo OOdisclaimer();?>
    </div>
    <div class='blank-space'></div>
</section>

<?php $content = ob_get_clean() ?>

<?php include "layout.php" ?>