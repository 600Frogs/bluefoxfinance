
    <h3 class="full-width center">Enquiry Form</h3>
    </br>
      <form role="form" id="contact-form" method="POST">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input class="mdl-textfield__input" type="text" data-required id="cname" name="cname">
          <label class="mdl-textfield__label" for="cname">Full Name...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input class="mdl-textfield__input" data-required type="email" id="cemail" name="cemail">
          <label class="mdl-textfield__label" for="cemail">Email...</label>
        </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
              <input class="mdl-textfield__input" type="text" id="cnumber" name="cnumber">
          <label class="mdl-textfield__label" for="cnumber">Contact Number...</label>
        </div>
        <div class="mdl-textfield mdl-js-textfield">
          <textarea class="mdl-textfield__input" type="text" rows= "3" id="cmessage"  name="cmessage"></textarea>
          <label class="mdl-textfield__label" for="cmessage">Message...</label>
        </div>
        </br>
        <button type="submit" class="red-bg mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" id="submit-btn">
            Enquire now!
        </button>
      </form>

