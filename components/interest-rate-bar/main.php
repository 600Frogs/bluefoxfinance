<?php 
include_once "info.php"; 
include_once "components/interest-rate-bar/show-relevent-rate.php"; ?>

<div id='interest-rate-bar'>
    <p>Find out the best interest rates available:<br/></p>
    <a href="<?php echo $config['URL'] ?>home-loans/owner-occupied.php" class="interest-rate-display" id="owner-occupied">
        <span class="loan-type-text">Owner-occupied Home Loan</span></br>
        <span class="interest-rate"><?php echo OOrate();?> <sub>p.a.</sub> &nbsp&nbsp&nbsp&nbsp </span>
        <span class="interest-rate"><?php echo OOcomrate();?> <sub>p.a. CR<sup>*</sup></sub></span></br>
        <div id="oo-tooltip" class="tooltip-text hide-on-mobile">The fine print...</div>
        <div class="mdl-tooltip" for="oo-tooltip">
            <?php echo OOdisclaimer();?>
        </div>
        
    </a>
    <a href="<?php echo $config['URL'] ?>home-loans/investment.php" class="interest-rate-display" id="investment">
        <span class="loan-type-text">Investment Home Loan</span></br>
        <span class="interest-rate"><?php echo INVrate();?> <sub>p.a.</sub> &nbsp&nbsp&nbsp&nbsp </span>
        <span class="interest-rate"><?php echo INVcomrate();?> <sub>p.a. CR<sup>*</sup></sub></span></br>
        <div id="inv-tooltip" class="tooltip-text hide-on-mobile">The fine print...</div>
        <div class="mdl-tooltip" for="inv-tooltip">
            <?php echo INVdisclaimer();?>
        </div>
        
    </a>
    <a href="<?php echo $config['URL'] ?>car-loan-broker-brisbane.php" class="interest-rate-display" id="car-loan">
        <span class="loan-type-text">Car Loan</span></br>
        <span class="interest-rate"><?php echo CARrate();?> <sub>p.a.</sub> &nbsp&nbsp&nbsp&nbsp </span>
        <span class="interest-rate"><?php echo CARcomrate();?> <sub>p.a. CR<sup>*</sup></sub></span></br>
        <div id="car-tooltip" class="tooltip-text hide-on-mobile">The fine print...</div>
        <div class="mdl-tooltip" for="car-tooltip">
            <?php echo CARdisclaimer();?>
        </div>
        
    </a>
    <a href="<?php echo $config['URL'] ?>personal-loan-broker-brisbane.php" class="interest-rate-display" id="personal-loan">
        <span class="loan-type-text">Personal Loan</span></br>
        <span class="interest-rate"><?php echo PLrate();?> <sub>p.a.</sub> &nbsp&nbsp&nbsp&nbsp </span>
        <span class="interest-rate"><?php echo PLcomrate();?> <sub>p.a. CR<sup>*</sup></sub></span></br>
        <div id="pl-tooltip" class="tooltip-text hide-on-mobile">The fine print...</div>
        <div class="mdl-tooltip" for="pl-tooltip">
            <?php echo PLdisclaimer();?>
        </div>
        
    </a>
    <a href="<?php echo $config['URL'] ?>home-loans/owner-occupied.php" class="interest-rate-display" id="refinances">
        <span class="loan-type-text">Refinances available from:</span></br>
        <span class="interest-rate"><?php echo OOrate();?> <sub>p.a.</sub> &nbsp&nbsp&nbsp&nbsp </span>
        <span class="interest-rate"><?php echo OOcomrate();?> <sub>p.a. CR<sup>*</sup></sub></span></br>
        <div id="oo-tooltip" class="tooltip-text hide-on-mobile">The fine print...</div>
        <div class="mdl-tooltip" for="oo-tooltip">
            <?php echo OOdisclaimer();?>
        </div>
        
    </a>
    <a href="<?php echo $config['URL'] ?>home-loans/owner-occupied.php" class="interest-rate-display" id="pre-approvals">
        <span class="loan-type-text">Pre-approvals available from:</span></br>
        <span class="interest-rate"><?php echo OOrate();?> <sub>p.a.</sub> &nbsp&nbsp&nbsp&nbsp </span>
        <span class="interest-rate"><?php echo OOcomrate();?> <sub>p.a. CR<sup>*</sup></sub></span></br>
        <div id="oo-tooltip" class="tooltip-text hide-on-mobile">The fine print...</div>
        <div class="mdl-tooltip" for="oo-tooltip">
            <?php echo OOdisclaimer();?>
        </div>
        
    </a>
    </br>
    <button id="ir-enquiry-btn" class="red-bg ir-button mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
        Enquire Now!
    </button>
</div>
