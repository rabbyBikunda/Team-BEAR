$(document).ready(function() {
    /* validation */
    $("#login-form").validate({
        rules:
                {
                    password: {
                        required: true
                
                    },
                     email: {
                        required: true
                       
                    }
                },
                
                
        
        messages:
                {
                    password: {
                        required: "Please enter your password"
                    },
                    email: {
                        required: "Please enter your email"
                      
                    }


         },
        submitHandler: submitForm
        
      });
      
       /* login submit */
    function submitForm()
    {
        
        var data = $("#login-form").serialize();
 
        $.ajax({
           
            type: 'POST',
            url: 'functions/login_process.php',
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
                else if (response === "Incorrect email and/or password") 
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
