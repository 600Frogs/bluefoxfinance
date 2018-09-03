<?php 
$title = "Business Loans Brisbane North - Blue Fox Finance";
$description = "We offer a wide variety of finance for businesses looking for finance: small business loans, commercial property loans, car loans and equipment finance.";
$canonical = "https://bluefoxfinance.com.au/business-loan-services";
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
    
    .mdl-card__title-text {
        border-radius: 25px;
        padding: 0px 10px 0px 10px;
        background-color: rgba(0, 0, 0, 0.38);
    }
    
    .main-content-area h2 {
        padding: 0px 10px 0px 10px;
    }

    .eqp-card {
        background:
            url("<?php echo $config['media'] ?>equipment-finance.png") bottom right 15% no-repeat #46B6AC;
    }
    .sbus-card {
        background:
            url("<?php echo $config['media'] ?>small-business-loans.png") bottom right 15% no-repeat #46B6AC;
    }
    .comm-card {
        background:
            url("<?php echo $config['media'] ?>commercial-property.png") bottom right 15% no-repeat #46B6AC;
    }
</style>
<section class="main-content-area">
    <h1>Business Loans Brisbane North</h1>
    <div class="flex-box">
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title mdl-card--expand eqp-card">
            <h2 class="mdl-card__title-text">Equipment Finance</h2>
          </div>
          <div class="mdl-card__supporting-text">
            We can finance a wide variety of equipment to help your business grow.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a href="<?php echo $config['URL'] ?>business-loans/equipment-finance-broker-brisbane.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              Learn More!
            </a>
          </div>
        </div>
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title mdl-card--expand sbus-card">
            <h2 class="mdl-card__title-text">Small Business Loans</h2>
          </div>
          <div class="mdl-card__supporting-text">
            We have a range of solutions for small businesses looking to get ahead.
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a href="<?php echo $config['URL'] ?>business-loans/small-business-loan-broker.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              Learn More!
            </a>
          </div>
        </div>
        <div class="demo-card-square mdl-card mdl-shadow--2dp">
          <div class="mdl-card__title mdl-card--expand comm-card">
            <h2 class="mdl-card__title-text">Commercial Loans</h2>
          </div>
          <div class="mdl-card__supporting-text">
            Looking to purchase a commercial property?  We can help!
          </div>
          <div class="mdl-card__actions mdl-card--border">
            <a href="<?php echo $config['URL'] ?>business-loans/commercial-loan-broker-brisbane.php" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
              Learn More!
            </a>
          </div>
        </div>
    </div>
    
    
</section>
    
<?php $content = ob_get_clean() ?>

<?php require "layout.php" ?>


