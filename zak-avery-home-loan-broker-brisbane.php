<?php 
$title = "Zak Avery - Home Loan Broker Brisbane North";
$description = "Zak Avery is a home loan Broker Brisbane who helps get his customers the best home loan. He can come to your house for a free consult any time.";
$canonical = "https://bluefoxfinance.com.au/useful-information/zak-avery-home-loan-broker-brisbane";
ob_start() ?>
<?php include "components/interest-rate-bar/main.php";?> 
<script type='application/ld+json'> 
{
  "@context": "http://www.schema.org",
  "@type": "LocalBusiness",
  "name": "Zak Avery - Home Loan Broker Brisbane",
  "url": "https://bluefoxfinance.com.au/zak-avery-home-loan-broker-brisbane",
  "sameAs": [
    "https://www.aussieweb.com.au/business/zak+avery/3238574",
    "https://www.wordofmouth.com.au/reviews/zak-avery",
    "https://www.truelocal.com.au/business/zak-avery-1/mitchelton",
    "https://www.startlocal.com.au/services/mortgage/qld_brisbane/Zak_Avery_Mitchelton_3592362.html",
    "",
    ""
  ],
  "logo": "https://bluefoxfinance.com.au/media/Headshot-1.png",
  "image": "https://bluefoxfinance.com.au/media/Headshot-1.png",
  "description": "Home Loan Broker Brisbane.",
 "telephone": "+61466392717",
 "priceRange": "$0",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "56A Essex St",
    "addressLocality": "MITCHELTON",
    "addressRegion": "QLD",
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
    "telephone": "+61466392717"
  }
}
 </script>
<section class="main-content-area">
    <h1>Zak Avery - Home Loan Broker Brisbane</h1>
    <div class='flex-box'>
        <div class='flex-box half-width'>
            <p>After migrating from England 14 years ago, Zak spent 12 years living in Brisbane before moving to Gladstone in 2015 to pursue his career in finance.  Whilst in Gladstone, Zak spent his time as a full-time Mortgage Broker at Gladstone Home Loans, Vice-President of Gladstone Rotaract and member of the local Chamber of Commerce.</p>
            <p>After returning to Brisbane and founding Blue Fox Finance, Zak now works as a full-time Finance and <a href='../../../mortgage-broker-brisbane'>Mortgage Broker Brisbane</a>. He prides himself on his up to date industry knowledge on current lending policy and products available and always ensures his clients are approved the most suitable home loan; he will make sure all lender fees, charges and loan features are explained in full so there are no surprises down the track.</p>
            <p>Australian Credit Rep Number: 389 087</p> 
            <div class='flex-box full-width'>
                <div class='flex-box half-width'>
                    <img src="<?php echo $config['URL'] ?>media/FBAA.png" alt="FBAA Home Loan Broker"> 
                </div>
                <div class='flex-box half-width'>
                    <img src="<?php echo $config['URL'] ?>media/AFG-Accredited-Member.png" alt="AFG accredited Mortgage Broker Brisbane North"> 
                </div>
            </div>
        </div>
        <div class='flex-box half-width'>
            <div>
                <img src="<?php echo $config['URL'] ?>media/Headshot-1.png" alt="Home Loan Broker North Brisbane"> 
            </div>
            <div class='flex-box full-width'>
                <p class="center">
                    Home Loan Broker Brisbane<br>
                    Zak Avery<br>
                    56A Essex St, Mitchelton QLD 4053<br>
                    0466 392 717
                </p>
            </div>
        </div>
    </div>
    <div class="small-blank-space"></div>
    
    <div class="flex-box reverse-direction">
        <div class="flex-box half-width">
            <?php include "components/contact-form/form.php";?> 
        </div>
        <div class="flex-box half-width">
            <div class='green-tick-box'>
                <table class="green-tick-table"><tbody><tr><th>Qualifications:</th></tr>
                <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Fully accredited AFG Home Loan Broker</td></tr>
                <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Member of FBAA</td></tr>
                <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Professional Indemnity Insurance of $20mil</td></tr>
                <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>AML/CTF Qualified</td></tr>
                <tr><td><span class="checkmark"><div class="checkmark_stem"></div><div class="checkmark_kick"></div></span>Diploma of Finance and Mortgage Broking Management</td></tr>
                </tbody></table>
            </div>
        </div>
    </div>

    <div class='small-blank-space'></div>
</section>
    
<?php $content = ob_get_clean() ?>

<?php require "layout.php" ?>


