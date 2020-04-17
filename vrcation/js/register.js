$(document).ready(function() {
    /* validation */
    $("#register-form").validate({
        rules:
                {
                    password: {
                        required: true,
                        minlength : 5,
                        maxlength : 16
                
                    },
                    email: {
                        required: true,
                        email: true
                    },
                     username: {
                        required: true,
                        minlength : 4
                    },
                     password_02: {
                        required: true,
                        equalTo: "#password"
                    }
                    
                },
                
//                errorElement: "b",
              
        messages:
                {
                    password: {
                        required: "Please enter your password",
                        minlength: "Password must be at least 6 characters",
                        maxlength : "Password cannot be longer than 16 characters"
                    },
                    username: {
                        required: "Please enter your username",
                        minlength : "Username must be atleast 4 characters"
                    },
                    password_02: {
                        required: "Please re-enter your password",
                        equalTo: "Passwords must be the same"
                    },
                    
                   
            email: "Please enter your email address"


         },
        submitHandler: submitForm
        
      });
      
       /* login submit */
    function submitForm()
    {
        
        var data = $("#register-form").serialize();
 
        $.ajax({
           
            type: 'POST',
            url: 'functions/register_process.php',
            data: data,
            beforeSend: function ()
            {
                //alert("take it there");
                $("#error").fadeOut();
            },
            success: function (response)
            {
                if (response === "ok") 
                {
                    setTimeout(' window.location.href = "index.php"; ', 1000);
                } 
                else
                {
                    $("#error").fadeIn(1000, function () 
                    {
                        $("#error").html('<center><h3>'+ response +'</h3></center>');
                    });
                }
            }
        });
        return false;
    }
});
