<?php 
$title = "Home Loans Brisbane North - Blue Fox Finance";
$description = "Our Home Loan Brokers can assist with a wide variety of home loans.  We can assist First Home Buyers, or second home buyers looking for Owner-occupied loans, investment loans, pre-approvals or refinances.";
$canonical = "https://bluefoxfinance.com.au/home-loan-services";
ob_start() ?>

<style>
    .demo-card-square.mdl-card {
      width: 300px;
      height: 320px;
      margin:30px;
      display:flex;
    }
    .demo-card-square > .mdl-card__title {
      color: #fff;
    }

    .fhb-card {
        background:
            url("<?php echo $config['media'] ?>fhb-info.png") bottom right 15% no-repeat #46B6AC;
    }
    .oo-card {
        background:
            url("<?php echo $config['media'] ?>oo-loan.png") bottom right 15% no-repeat #46B6AC;
    }
    .inv-card {
        background:
            url("<?php echo $config['media'] ?>investment-loan.png") bottom right 15% no-repeat #46B6AC;
    }
    .ref-card {
        background:
            url("<?php echo $config['media'] ?>refinance.png") bottom right 15% no-repeat #46B6AC;
    }
    .pre-app-card {
        background:
            url("<?php echo $config['media'] ?>pre-approval.png") bottom right 15% no-repeat #46B6AC;
    }
    .bad-credit-card {
        background:
            url("<?php echo $config['media'] ?>bad-credit.png") bottom right 15% no-repeat #46B6AC;
    }
</style>
<?php include "components/interest-rate-bar/main.php";?>
<section class="main-content-area">
    <h1>Home Loans Brisbane North</h1>
    <div class="flex-box"><p>Not sure how we can help with your home loan?  Take a look at our <a href='../../../mortgage-broker-brisbane'>Mortgage Broker Brisbane</a> page.</p></div>
    <div class="flex-box"><p>If you're self employed, please take a minute to read our <a href='../../../self-employed-home-loan-requirements'>self employed home loan requirements</a> page.</p></div>
    <div class="flex-box">
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title mdl-card--expand fhb-card">
            <h2 class="mdl-card__title-text">First Home Buyers</h2>
          </div>
          <div class="mdl-card__supporting-text">
            Buying your first home can be a daunting task.  We can help answer all your questions and get you a home loan.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a href="<?php echo $config['URL'] ?>home-loans/first-home-buyers.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              Learn More!
            </a>
          </div>
        </div>
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title mdl-card--expand oo-card">
            <h2 class="mdl-card__title-text">Owner-Occupied Loans</h2>
          </div>
          <div class="mdl-card__supporting-text">
            Our Home Loan Brokers can help you sift through over 1000 home loan products.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a href="<?php echo $config['URL'] ?>home-loans/owner-occupied.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              Learn More!
            </a>
          </div>
        </div>
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title mdl-card--expand inv-card">
            <h2 class="mdl-card__title-text">Investment Loans</h2>
          </div>
          <div class="mdl-card__supporting-text">
            Looking to purchase an investment property?  We can help with your home loan!
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a href="<?php echo $config['URL'] ?>home-loans/investment.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              Learn More!
            </a>
          </div>
        </div>
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title mdl-card--expand ref-card">
            <h2 class="mdl-card__title-text">Refinances</h2>
          </div>
          <div class="mdl-card__supporting-text">
            We can help you refinance and consolidate debts to the lowest home loan rates.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a href="<?php echo $config['URL'] ?>home-loans/refinance.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              Learn More!
            </a>
          </div>
        </div>
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title mdl-card--expand pre-app-card">
            <h2 class="mdl-card__title-text">Pre-approvals</h2>
          </div>
          <div class="mdl-card__supporting-text">
            Our Home Loan Brokers can arrange you an obligation-free pre-approval at no cost.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a href="<?php echo $config['URL'] ?>home-loans/pre-approval.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              Learn More!
            </a>
          </div>
        </div>
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title mdl-card--expand bad-credit-card">
            <h2 class="mdl-card__title-text">Bad Credit Home Loans</h2>
          </div>
          <div class="mdl-card__supporting-text">
            We have multiple lenders who can lend to people with bad credit history.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a href="<?php echo $config['URL'] ?>home-loans/bad-credit-home-loan-broker.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              Learn More!
            </a>
          </div>
        </div>
        
    </div>
    
    
</section>
    
<?php $content = ob_get_clean() ?>

<?php require "layout.php" ?>


