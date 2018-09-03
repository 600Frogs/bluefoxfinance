<?php 
$title = "Pre Approvals Brisbane North - Blue Fox Finance";
$description = "Pre Approvals can be a painful thing to apply for.  We can help decide which bank is best for you and walk you through the entire process.  Our consultations and pre-approvals are at no cost to you.";
$canonical = "https://bluefoxfinance.com.au/home-loans/pre-approval";
ob_start() ?>

<?php include "components/interest-rate-bar/main.php";?> 

<section class="main-content-area">
    <h1>Pre-Approvals</h1>
    <p>Pre-approvals can be tricky to understand and apply for.  We can help you through the entire process, and we don't charge you a cent.</p>
    <div class="flex-box">
        <div class="flex-box half-width">
            <?php include "components/contact-form/form.php";?> 
        </div>
        <div class="flex-box half-width">
            <table class="green-tick-table"><tbody><tr><th>We can help with:</th></tr>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Borrowing power calculations</td></tr></br>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Arranging a free pre-approval</td></tr></br>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Finding the lowest interest rates</td></tr></br>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Completing the application on your behalf</td></tr></br>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Helping you understand the home loan/buying process.</td></tr></br>
            </tbody></table>
            <table class="green-tick-table"><tbody><tr><th>Eligibility:</th></tr>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Must have a regular income.</td></tr></br>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Permanent Australian Resident.</td></tr></br>
            <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Must have a 5% deposit or security guarantor.</td></tr></br>
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