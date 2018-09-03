<?php 
$title = "Contact Us - Blue Fox Finance";
$description = "Our office hours are Monday - Friday, 8:30am - 6pm; however weekend and after-hours appointments are welcome.  For more information, please call 07 3354 4576.";
$canonical = "https://bluefoxfinance.com.au/contact";
ob_start() ?>
<style>
    h3 {
        text-align:left;
    }
</style>
<section class="main-content-area">
    <h1>Contact Us</h1>
    <p>To contact us, please fill in the enquiry form below or call us anytime on 07 3354 4576.  After-hours and weekend appointments and phone calls welcome.  Unfortunately we do not accept walk-ins, so please call to book an appointment.</p>
    <div class="flex-box reverse-direction">
        <div class="flex-box half-width">
            <?php include "components/contact-form/form.php";?> 
        </div>
        <div class="flex-box half-width align-top">
            <h3>Blue Fox Finance - Mortgage Broker Brisbane</h3>
            <div class="flex-box full-width">
                <ul class='contact-left'>
                  <li>Address:</li>
                  <li>Phone:</li>
                  <li>Email:</li>
                  <li>Office Hours:</li>
                </ul>
                <ul class='contact-right'>
                  <li>56 Essex St, Mitchelton QLD 4053</li>
                  <li>07 3354 4576</li>
                  <li>admin@bluefoxfinance.com.au</li>
                  <li>Monday - Friday: 8:30am - 6:30pm</li>
                  <li>Saturday: 8:30am - 1:00pm</li>
                  <li>After-hours appointments welcome.</li>
                </ul>
            </div>
            <div class="flex-box full-width">
                <a href="https://www.facebook.com/BlueFoxFinance" class="social-icon"><img src="<?php echo $config['media'] ?>fb.png" alt="Facebook for Blue Fox Finance - Mortgage Broker Brisbane"></a>
                <a href="https://au.linkedin.com/company/blue-fox-finance" class="social-icon"><img src="<?php echo $config['media'] ?>li.png" alt="LinkedIn for Blue Fox Finance - Mortgage Broker Brisbane"></a>
                <a href="https://plus.google.com/113386448165621341063" class="social-icon"><img src="<?php echo $config['media'] ?>gp.png" alt="Google+ for Blue Fox Finance - Mortgage Broker Brisbane"></a>
        
            </div>
        </div>
    </div>
    

    <div class='small-blank-space'></div>
</section>
    
<?php $content = ob_get_clean() ?>

<?php require "layout.php" ?>


