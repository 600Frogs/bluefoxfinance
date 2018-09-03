<?php 
$title = "Independent Mortgage Brokers Brisbane - Blue Fox Finance";
$description = "Independent Mortgage Brokers Brisbane are brokers that are completely free from outside control.  For this to be true, they must have a credit licence of their own, not run under any aggregator or franchise model and be independently owned.";
$canonical = "https://bluefoxfinance.com.au/independent-mortgage-brokers-brisbane";
ob_start() ?>

<script type='application/ld+json'> 
    {
      "@context": "http://www.schema.org",
      "@type": "FinancialService",
      "name": "Independent Mortgage Brokers Brisbane",
      "url": "https://bluefoxfinance.com.au/independent-mortgage-brokers-brisbane",
      "logo": "https://bluefoxfinance.com.au/media/bff-logo.png",
      "image": "https://bluefoxfinance.com.au/media/main-banner-full.png",
     "telephone":"+61733544576",
     "priceRange": "$",
      "description": "Independent Mortgage Brokers Brisbane are brokers that are completely free from outside control.",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "56 Essex Street",
        "addressLocality": "Mitchelton",
        "addressRegion": "Queensland",
        "postalCode": "4053",
        "addressCountry": "Australia"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "-27.399069",
        "longitude": "152.965952"
      },
      "openingHours": "Mo, Tu, We, Th, Fr 08:30-18:30 Sa 08:30-13:00",
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "customer service",
        "telephone": "+61733544576"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "bestRating": "5",
        "ratingCount": "17"
      }
    }
</script>
<?php include "components/interest-rate-bar/main.php";?> 
<section class="main-content-area">
    <h1>Independent Mortgage Brokers Brisbane</h1>
    <div class='flex-box'>
        <div class='flex-box half-width'>
            <p>Independent Mortgage Brokers must, by definition, be completely free from outside control.  This means they must have their own credit licence, not operate under an aggregator or franchise, and be independently owned.  Our Brisbane based Mortgage Broker firm is independently owned, however uses Australian Finance Group (AFG) as an aggregator due to the massive benefits of doing so: access to a large variety of lenders and products, state-of-the-art software and industry training.  Insofar as commissions are concerned when deciding whether a Mortgage Broker is "independent": most commissions payable by each lender are the same (or very comparable), however all Mortgage Brokers should disclose the full commissions available by each lender prior to submitting any applications on your behalf, we consider this standard practice.  <a href='../../../useful-information/how-does-a-mortgage-broker-get-paid'>Click here to read about current commission rates and how a Mortgage Broker is paid.</a></p>
        </div>
        <div class='flex-box half-width'>
            <div>
                <img src="<?php echo $config['URL'] ?>media/independent-mortgage-brokers-brisbane.jpg" alt="Independent Mortgage Brokers Brisbane"> 
            </div>
        </div>
         <div class='flex-box'>
            <h2 class='reduce-size'>An independently owned Mortgage Broker firm can aggregate under whomever benefits their clients the most.</h2>
            <p>The vast majority of Mortgage Brokers are not technically independent, as they generally operate under an aggregator.  An aggregator provides access to lenders, runs compliance audits, provides training and software along with a myriad other services.  We chose to aggregate through AFG as they provide us with a great structure that allows us to deal with a large array of lenders, keeps us up-to-date on industry relevent news, and provides us with modern online technology to help us to help our clients.  Being with AFG also allows us to keep a sense of independence in our operations when compared with other aggregators.</p>
        </div>

    </div>
    <div class="small-blank-space"></div>
    
    <div class="flex-box reverse-direction">
        <div class="flex-box half-width">
            <?php include "components/contact-form/form.php";?> 
        </div>
        <div class="flex-box half-width">
            <div class='green-tick-box'>
                <table class="green-tick-table"><tbody><tr><th>As an independently owned Mortgage Broker firm, we have the liberty to choose:</th></tr>
                <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>To change aggregator if the relationship doesn't benefit our clients.</td></tr>
                <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>How to operate within Government laws and aggregator guidelines.</td></tr>
                <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>To work with the lenders that give great service.</td></tr>
                </tbody></table>
                <table class="green-tick-table"><tbody><tr><th>We can help you with:</th></tr>
                <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Calculating how much you are able to borrow.</td></tr>
                <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Presenting your situation to multiple lenders.</td></tr>
                <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Providing you with the best offers available.</td></tr>
                <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Advice and recommendations on complex situations.</td></tr>
                <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Complete the application on your behalf.</td></tr>
                </tbody></table>
            </div>
        </div>
    </div>
   

    <div class='blank-space'></div>
    <div>
        <?php echo OOdisclaimer();?>
    </div>
    <div class='blank-space'></div>
</section>
    
<?php $content = ob_get_clean() ?>

<?php require "layout.php" ?>


