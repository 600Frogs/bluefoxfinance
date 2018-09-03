</div>
</main>
</body>

<footer class="mdl-mega-footer">
  <div class="mdl-mega-footer__middle-section">

    <div class="mdl-mega-footer__drop-down-section footer-column-1">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <div class="mdl-mega-footer__heading">Quick Links</div>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="<?php echo $config['URL'] ?>">Home</a></li>
        <li><a href="<?php echo $config['URL'] ?>mortgage-broker-brisbane-reviews">Mortgage Broker Reviews</a></li>
        <li><a href="<?php echo $config['URL'] ?>independent-mortgage-brokers-brisbane.php">Independent Mortgage Brokers</a></li>
        <li><a href="<?php echo $config['URL'] ?>home-loan-services.php">Home Loans</a></li>
        <li><a href="<?php echo $config['URL'] ?>self-employed-home-loan-requirements">Self Employed Home Loan Requirements</a></li>
        <li><a href="<?php echo $config['URL'] ?>home-loans/bad-credit-home-loan-broker.php">Bad Credit Home Loans</a></li>
        <li><a href="<?php echo $config['URL'] ?>car-loan-broker-brisbane.php">Car Loans</a></li>
        <li><a href="<?php echo $config['URL'] ?>car-loans/bad-credit-car-loan-broker.php">Bad Credit Car Loans</a></li>
        <li><a href="<?php echo $config['URL'] ?>personal-loan-broker-brisbane.php">Personal Loans</a></li>
        <li><a href="<?php echo $config['URL'] ?>personal-loans/low-rate-personal-loan-unsecured.php">Low Rate Personal Loans - Unsecured</a></li>
        <li><a href="<?php echo $config['URL'] ?>unsecured-personal-loan-broker.php">Unsecured Personal Loan Broker</a></li>
        <li><a href="<?php echo $config['URL'] ?>boat-loan-broker-brisbane.php">Boat Loans</a></li>
        <li><a href="<?php echo $config['URL'] ?>business-loan-services.php">Business Loans</a></li>
        <li><a href="<?php echo $config['URL'] ?>information-directory.php">Useful Information</a></li>
        <li><a href="<?php echo $config['URL'] ?>zak-avery-home-loan-broker-brisbane.php">About</a></li>
        <li><a href="<?php echo $config['URL'] ?>contact.php">Contact Us</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section footer-column-2">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <div class="mdl-mega-footer__heading">Enquiry Form</div>
      <ul class="mdl-mega-footer__link-list">

        <form role="form" id="footer-form" method="GET">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" data-required id="footer-name" name="name">
            <label class="mdl-textfield__label" for="name">Full Name...</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" data-required type="email" id="email" name="femail">
            <label class="mdl-textfield__label" for="femail">Email...</label>
          </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="number" name="number">
            <label class="mdl-textfield__label" for="number">Contact Number...</label>
          </div>
          <div class="mdl-textfield mdl-js-textfield">
            <textarea class="mdl-textfield__input" type="text" rows= "3" id="message"  name="message"></textarea>
            <label class="mdl-textfield__label" for="message">Message...</label>
          </div>
          </br>
          <button type="submit" class="red-bg mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="footer-submit-btn">
              Enquire now!
          </button>
        </form>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section footer-column-3">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <div class="mdl-mega-footer__heading">Contact Us</div>
      <ul class="mdl-mega-footer__link-list">
          <li class="contact-title">Blue Fox Finance - Mortgage Broker Brisbane</li>
          <ul class='contact-left'>
            <li>Address:</li>
            <li>Phone:</li>
            <li>Email:</li>
          </ul>
          <ul class='contact-right'>
            <li>56 Essex St, Mitchelton QLD 4053</li>
            <li>07 3354 4576</li>
            <li>admin@bluefoxfinance.com.au</li>
          </ul>
          </br>
           <a href="https://www.facebook.com/BlueFoxFinance" class="social-icon"><img src="<?php echo $config['media'] ?>fb.png" alt="Facebook for Blue Fox Finance - Mortgage Broker Brisbane" width="60" height="60"></a>
            <a href="https://au.linkedin.com/company/blue-fox-finance" class="social-icon"><img src="<?php echo $config['media'] ?>li.png" alt="LinkedIn for Blue Fox Finance - Mortgage Broker Brisbane" width="60" height="60"></a>
            <a href="https://plus.google.com/113386448165621341063" class="social-icon"><img src="<?php echo $config['media'] ?>gp.png" alt="Google+ for Blue Fox Finance - Mortgage Broker Brisbane" width="60" height="60"></a>
      </ul>
    </div>

  </div>

  <div class="mdl-mega-footer__bottom-section">
    <ul class="mdl-mega-footer__link-list">
      <li>Australian Credit Licence: 389 087 </li>
      <li>Credit Rep Number: 481 409</li>
      <li>ABN: 91266126786</li>
    </ul>
  </div>

<!-- MDL --> 
<!-- <link rel="stylesheet" href="<?php echo $config['URL'] ?>mdl/material.min.css" as="style" media="nope!" onload="if(media!='all')media='all'">-->
 <script defer="defer" src="<?php echo $config['URL'] ?>mdl/material.min.js"></script>
 <!--<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">-->

<!-- jquery -->  
 <script defer="defer" src="<?php echo $config['URL'] ?>includes/jquery-3.2.1.min.js"></script>
<!-- swalert -->  
 <script defer="defer" src="<?php echo $config['URL'] ?>sweetalert2/dist/sweetalert2.all.min.js"></script>
<!-- combined js -->  
 <script defer="defer" src="<?php echo $config['URL'] ?>js/combined.min.js"></script>
</footer>
<noscript>
      <link rel="stylesheet" type="text/css" href="/css/master-css.min.css"/>
</noscript>

</html>


