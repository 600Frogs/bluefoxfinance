$(document).ready(function(){
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
        type:'POST',
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
