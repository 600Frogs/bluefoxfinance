function prettifyData(mainD, addD){
    var data = "loanType="+mainD[0]+
            "\&loanAmount="+addD[0]+
            "\&fullName="+addD[1]+
            "\&phoneNumber="+addD[2]+
            "\&emailAddress="+mainD[1]+
            "\&currentURL="+window.location.href+
            "\&additionalMessage="+mainD[2];
    return data;
}

function sendEmail(prettyData) {
    $.ajax({
      url: '../components/interest-rate-bar/send-email.php', //===PHP file name====
      data:prettyData.valueOf(),
      type:'GET',
      success:function(data){
        console.log(data);
        //Success Message == 'Title', 'Message body', Last one leave as it is
	    swal("¡Success!", "Message sent!  Someone will be in contact within 24 hours.", "success");
      },
      error:function(data){
        //Error Message == 'Title', 'Message body', Last one leave as it is
	    swal("Oops...", "Something went wrong :(", "error");
      }
    });
}

function popUpForm() {
    $formVals = [];
    swal.setDefaults({
        input: 'text',
        confirmButtonText: 'Next &rarr;',
        showCancelButton: true,
        progressSteps: ['1', '2', '3']
      })

      var steps = [
         {
          title: 'How much are you looking to borrow?',
          inputClass: 'loan-type-selector',
          input: 'select',
          inputOptions: {
            'OOLOAN': 'Owner-Occupied Home Loan',
            'INVLOAN': 'Investment Home Loan',
            'CARLOAN': 'Car Loan',
            'PERSONALLOAN': 'Personal Loan',
            'COMMLOAN': 'Commercial Property Loan',
            'EQUIPFIN': 'Equipment Finance',
            'SMALLBUSLOAN': 'Small Business Loan',
            'OTHERLOAN': 'Other'
          },
           preConfirm: () => {
              $formVals.push($('#loan-amount-input').val());
          },
          inputPlaceholder: 'Select Loan Type',
          inputValidator: (value) => {
            return new Promise((resolve) => {
              if (value !== '') {
                resolve()
              } else {
                resolve('You need to select a loan type.')
              }
            })
          },
          html: '<input id="loan-amount-input" type="text" placeholder="Enter loan amount" autofocus value="$150,000" class="swal2-input">'
        },
        {
          title: 'Your Contact Details...',
          input: 'email',
          inputPlaceholder: 'Your email address',
          preConfirm: () => {
              $formVals.push($('#name-input').val());
              $formVals.push($('#number-input').val());
          },
          focusConfirm: false,
          html: '<input id="name-input" type="text" placeholder="Your Full Name" autofocus class="swal2-input">\n\
                <input id="number-input" type="text" placeholder="Your Phone Number" class="swal2-input">'
        },
        {
          title: 'Any additional Details...',
          input: 'text',
          inputPlaceholder: 'Your Message',
          confirmButtonText: 'Submit!',
          inputClass: 'your-swal-message'
        }
      ]

      swal.queue(steps).then((result) => {
        swal.resetDefaults()
        

        if (result.value) {
            swal({
              title: 'Sending...',
              html: '<div class="mdl-spinner mdl-js-spinner is-active" id="ir-swal-spinner"></div>',
              showConfirmButton: false
            });
            componentHandler.upgradeElement(document.getElementById('ir-swal-spinner'));
            var data = prettifyData(result.value, $formVals);
            sendEmail(data);
        }
      })
}




$(document).ready(function(){
    var stylesheet = document.createElement('link');
    stylesheet.href = '../../css/master-css.min.css';
    stylesheet.rel = 'stylesheet';
    stylesheet.type = 'text/css';
    document.getElementsByTagName('head')[0].appendChild(stylesheet);
    
    $(".faq").click(function(){
        $(this).toggleClass("open");
    });
    
    $('#ir-enquiry-btn').click(function(){
       popUpForm();
    });
    
     $('#footer-name').on('focus',function(e) { 
       $('input[data-required]').attr('required', true);
        });
        $('#footer-form').on('submit',function(e) { 
          if ($('#footer-name').val() === '') {
              $('input[data-required]').attr('required', true);
              e.preventDefault();
              swal("Oops...", "Please fill in your details!", "error");
              return;
            }
          $.ajax({
              url:'footer-form.php',
              data:$(this).serialize(),
              type:'GET',
              beforeSend:function(){
                  swal({
                    title: 'Sending...',
                    html: '<div class="mdl-spinner mdl-js-spinner is-active" id="swal-spinner"></div>',
                    showConfirmButton: false
                  });
                  componentHandler.upgradeElement(document.getElementById('swal-spinner'));
              },
              success:function(data){
                console.log(data);
                //Success Message == 'Title', 'Message body', Last one leave as it is
                    swal("¡Success!", "Message sent!  We will be in contact within 24 hours.", "success");
              },
              error:function(data){
                //Error Message == 'Title', 'Message body', Last one leave as it is
                    swal("Oops...", "Something went wrong :(", "error");
              }
            });
            e.preventDefault();
        });
        
        $('#cname').on('focus',function(e) { 
       $('input[data-required]').attr('required', true);
  });
  $('#contact-form').on('submit',function(e) { 
    if ($('#cname').val() === '') {
        $('input[data-required]').attr('required', true);
        e.preventDefault();
        swal("Oops...", "Please fill in your details!", "error");
        return;
      }
    $.ajax({
        url:'./components/contact-form/submit.php',
        data:$(this).serialize(),
        type:'GET',
        beforeSend:function(){
            swal({
              title: 'Sending...',
              html: '<div class="mdl-spinner mdl-js-spinner is-active" id="swal-spinner"></div>',
              showConfirmButton: false
            });
            componentHandler.upgradeElement(document.getElementById('swal-spinner'));
        },
        success:function(data){
          console.log(data);
          //Success Message == 'Title', 'Message body', Last one leave as it is
              swal("¡Success!", "Message sent!  We will be in contact within 24 hours.", "success");
        },
        error:function(data){
          //Error Message == 'Title', 'Message body', Last one leave as it is
              swal("Oops...", "Something went wrong :(", "error");
        }
      });
      e.preventDefault();
  });
});

[].forEach.call(document.querySelectorAll('img[data-src]'),    function(img) {
  img.setAttribute('src', img.getAttribute('data-src'));
  img.onload = function() {
    img.removeAttribute('data-src');
  };
});

function toggleMobileMenu() {
    menu = document.getElementById('top-menu');
    overlay = document.getElementById('overlay');
    $(menu).toggleClass("menu-open");
    $(overlay).toggleClass("hidden");
}

function overlayClicked(){
    toggleMobileMenu();
}