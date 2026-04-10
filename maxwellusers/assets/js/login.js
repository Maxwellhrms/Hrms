    $("#submit").on("click", function(e) {
      // console.log($('#email').val());
      var email = $('#email').val();
      var password = $('#password').val();
      var client = $('#client').val();
      var code = $('#code').val();

      var msg = "";
      if(email.trim() == ''){
        msg +='Please Enter a Valid Email...';
      }
      if(password.trim() == '' && client.trim() != '1'){
        msg +='Please Enter a Valid Password...';
      }
      if(client.trim() == ''){
        msg +='Please Select Client...';
      }
      remember = 0;
      if($('input[name="remember"]').is(':checked')){
      remember = 1;
      }
      if(msg.length >= 4){
        $(".account-footer").html('<p style=color:red>'+msg+'</p>');
        return false;
      }

      var attachLink = 'checkuserclients';
      if(client.trim() == '1' && code.trim() ==''){
      var attachLink = 'verifypasscode';
      }
      $("#submit").hide();
      $.ajax({
          method: "POST",
          url: baseurl+attachLink,
          data:{'emailid': email, 'password' : password, 'client' : client, 'remember': remember, 'code': code}, 
       
      }).done(function( data ) {
          var result = $.parseJSON(data);
          // console.log(result);
          if(result.respone == 200){
            window.location.href = baseurl+'verifylogin';
          }else if(result.respone == 800){
            $('.codedisplay').show();
            $('.optionsrd').hide();
            $("#submit").show();
          }else{
            alert(result.responsetext);
            $("#submit").show();
          }
      });
    })

    $(document).on('change', 'select', function() {
      var client = $('#client').val();
      if(client.trim() == '1'){
        $('.passdiv').hide();
      }else{
        $('.passdiv').show();
      }
    });
    //   $("#toggle-password").click(function () {
    // $( this ).toggleClass("fa-eye fa-eye-slash");
    //     if ($("#password").attr("type") == "password")
    //     {
    //         $("#password").attr("type", "text");
    //     } else
    //     {
    //         $("#password").attr("type", "password");
    //     }
    // });