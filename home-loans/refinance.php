<?php 
$title = "Home Loan Refinances Brisbane North - Blue Fox Finance";
$description = "Our Home Loan Brokers can help with owner-occupied and investment refinances.  We can generally get you a very competitive interest rate, with the purpose being debt consolidation, cash out, investment or loan restructuring.";
$canonical = "https://bluefoxfinance.com.au/home-loans/refinance";
ob_start() ?>
<?php include "components/interest-rate-bar/main.php";?> 

<section class="main-content-area">
    <h1>Refinancing</h1>
    <p>Refinancing can be a painful task, however we can help make the process quick, smooth and easy.  We have access to over 1000 home loan products which we can compare with you on-the-spot.</p>
    <div class="flex-box">
        <div class="flex-box half-width">
            <?php include "components/contact-form/form.php";?> 
        </div>
        <div class="flex-box half-width">
            <table class="green-tick-table"><tbody><tr><th>We can help with:</th></tr>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Reducing interest and fees</td></tr></br>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Consolidating debts</td></tr></br>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Finding the lowest interest rates</td></tr></br>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Completing the application on your behalf</td></tr></br>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Restructuring loans</td></tr></br>
            </tbody></table>
            <table class="green-tick-table"><tbody><tr><th>Eligibility:</th></tr>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Must have a regular income.</td></tr></br>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Permanent Australian Resident.</td></tr></br>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Must have equity available or additional cash/security.</td></tr></br>
            </tbody></table>
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

<?php require "layout.php" ?>