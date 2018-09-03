<?php 
$title = "Pre Approval Process for a Home Loan - Blue Fox Finance";
$description = "The home loan process for a pre approval may not seem so straight forward the first time.  We've made it easy with a step-by-step process flow with explanations at each stage.";
$canonical = "https://bluefoxfinance.com.au/home-loans/pre-approvals/pre-approval-process-for-a-home-loan";
ob_start() ?>

<?php include "components/interest-rate-bar/main.php";?> 

<section class="main-content-area">
    <div class='flex-box'>
        <div class='flex-box half-width'>
            <h1>Pre Approval Process for a Home Loan</h1>
            <p>The home loan process for a pre approval may not seem so straight forward the first time, but it needn't be difficult.  Below, we've highlighted the steps you need to take.</p>
        </div>
        <div class='flex-box half-width'>
            <div>
                <img src="<?php echo $config['URL'] ?>media/pre-approval.png" alt="Pre Approval Process for a Home Loan"> 
            </div>
        </div>
    </div>
    <h2>The first step in your pre approval process:  Meet with a Mortgage Broker!</h2>
    <p>For whatever reason, people often don't want to go see a Mortgage Broker until they know what they want to buy, whether they qualify and what the process is.  This is what Mortgage Broker's do, they can help answer all your questions and go through the process with you.  Your Mortgage Broker won't charge (usually), and can help you figure out a plan:</p>
    <h3>What's your borrowing power?</h3>
    <p>Your Mortgage Broker will help you figure out what your borrowing power is, which is often a bottleneck for most people.  They will want to know details of your income, liabilities and living expenses.  If you want an accurate figure of how much you can borrow, you are best to have ready: your (and your partner's) latest 2 payslip, latest statement on any liabilies and most recent tax return.  Your tax return is often not necessary, however is very useful if you depend partially on bonus, overtime or commission payments.</p>
    <h3>Are you eligible?</h3>
    <p>An overlooked step in the pre approval process.  Many people assume they are eligible for a home loan by default, however this isn't always the case.  Your Mortgage Broker will look at your residency status, time-in-employment, your deposit (do you have genuine savings?  Do you have enough?), where you're looking to buy, what you're looking to buy and more.  All of these can play a role in whether you are eligible for a pre approved home loan.</p>
    <h2>Submit your Pre Approval application</h2>
    <p>Once you know you're eligible and can borrow the amount you want, it's time to submit your application.  Provide your Mortgage Broker with the documents he requires, and sign the application after you've read it carefully and are confident you understand.</p>
    <h3>Time frames on the pre approval process.</h3>
    <p>Once again, your Mortgage Broker will go through this with you, as it's different with each lender.  As a general rule of thumb, you can expect:</p>
    <ul>
        <li>After providing any documents needed and signing an application: it should take your broker no longer than 1 business day to submit your application.</li>
        <li>After your pre approval application has been submitted: Most bank will take 4 - 8 business days as a rough guide.  Some can have it back in as little as 24 hours.</li>
        <li>After your application is pre approved: Most lenders will keep your pre approval valid for 90 days, although some are longer.  Most are happy to extend it on request.</li>
    </ul>
    <h2>That's really all there is to the pre approval process.</h2>
    <p>Simple, right?  The important thing is to talk to a professional, I can't stress this enough.  There are so many factors that go into home loans that it will be very time consuming to do it yourself, and mistakes will happen.</p>
    <h2>In Summary</h2>
    <ul>
        <li>Talk to a Mortgage Broker to determine your eligibility and affordability.</li>
        <li>Submit your home loan pre approval application through your Broker.</li>
        <li>Once approved, start looking for a house to buy!</li>
    </ul>
    <div class='seperator'></div>
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
        The information provided in this website is for general education purposes only and does not constitute specialist advice. It should not be relied upon for the purposes of entering into any legal or financial commitments. Specific investment advice should be obtained from a suitably qualified professional before adopting any investment strategy. Whilst we aim to update our site frequently, interest rates and lender policies change frequently, please contact us to confirm the latest details. Applications for finance are subject to normal credit assessment.  Conditions, fees & charges apply.
    </div>
    <div class='blank-space'></div>
</section>
<?php $content = ob_get_clean() ?>

<?php require "layout.php" ?>