<?php 
$title = "First Home Buyers - Blue Fox Finance";
$description = "If you are looking for your first home, our Mortgage Broker can help walk you through the entire process.  We can also assist with procuring a free pre-approval, and answering any questions you have in relation to Government incentives and the home loan/buying process.";
$canonical = "https://bluefoxfinance.com.au/home-loans/first-home-buyers";
ob_start() ?>

<?php include "components/interest-rate-bar/main.php";?> 

<section class="main-content-area">
    <h1>First Home Buyers</h1>
    <p>Buying your first home can be a daunting task, especially without proper guidance.  Our Mortgage Brokers will not only arrange your home loan, but will be happy to answer all your questions relating to the process.  We can provide you information on Government incentives, guarantor loans, and strategies to ensure your applications success.  We recommending starting by reading this article, but if questions still persist, please message or call us.</p>
    <p>Our services are free to you, and we can arrange an obligation-free pre-approval for you with one of our 25 lenders.</p>
    <div class="flex-box">
        <div class="flex-box half-width">
            <?php include "components/contact-form/form.php";?> 
        </div>
        <div class="flex-box half-width">
            <div class='green-tick-box'>
                <img src="<?php echo $config['media'] ?>green-tick.png" alt="Point of difference when helping first home buyers in Brisbane">
                <table class="green-tick-table">
                    <tbody>
                    <tr><th>We can help with:</th></tr>
                    <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>How much you can afford to borrow.</td></tr>
                    <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Helping explain the entire buying process to you.</td> </tr>
                    <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Getting you a free pre-approval if needed.</td></tr>
                    <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Helping you understand the FHOG and Stamp Duty Concessions.</td></tr>
                    <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Finding which lenders will be most likely to approve your loan application.</td></tr>
                    <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Helping you decide the best home loan for you.</td></tr>
                    <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Completing the finance application for you.</td></tr>
                    <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Keeping you updated throughout the entire process.</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="flex-box full-width">
            <?php include "components/call-now.php";?> 
        </div>
        <div class="flex-box full-width">
            <div class="faq-wrapper">
                <h3>Frequently Asked Questions</h3>
                <div class="faq">
                    <h4>How much do you charge?</h4>
                    <p>For pre-approvals, home loans and general consultations: $0.</p>
                </div>
                <div class="faq">
                    <h4>What do I need to apply for a home loan?</h4>
                    <p>Every situation is different, but all most people will need a 5% deposit and a regular source of income.  The bank will look at your assets, liabilities, income, expenses, and general lifestyle when assessing your home loan application.  If you are self-employed you should expect to be asked for 12 – 24 months of financial documents.</p>
                </div>
                <div class="faq">
                    <h4>How much do Home Loans cost?</h4>
                    <p>Home loans have no upfront costs in many cases; however, they can have upfront fees of up to $600 or more depending on what home loan product you are looking for.  Your home loan broker will walk you through this.</p>
                </div>
                <div class="faq">
                    <h4>How long does it take to get a Home Loan?</h4>
                    <p>This depends.  If you are looking to get your home loan in a hurry, we have lenders that can approve home loans in only 24 - 48 hours.  If you are looking for the cheapest interest rate, it may take 10 – 20 business days.</p>
                </div>
                <div class="faq">
                    <h4>How much do I need for a deposit?</h4>
                    <p>In most cases, just 5% will do.  You will however often need about $3,000+ to cover other expenses such as solicitors and Government charges.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $content = ob_get_clean() ?>

<?php require "layout.php" ?>