$(document).ready(function () {
    
    //$('#rating_message').hide();
    
    $('input[name="rating"]').on("click", function () {

    var ratingValue = $(this).val();
    //alert(ratingValue);
       var data = {rating : ratingValue};
      $.ajax({
           
          
            type: 'POST',
            url: 'functions/rating_process.php',
            data: data,
            beforeSend: function ()
            {
                //alert("take it there");
                //$(".rating").fadeOut();
            },
            success: function (response)
            {
//                if (response === "Thank you for your rating!") 
//                {
                $(".rating").hide();
                    $("#rating_message").fadeIn(1000, function () 
                    {
                        $("#rating_message").html(response + ratingValue.toString() + ' stars!');
                    });
                    //$(".rating").hide();
//                    $('#rating_message').fadeIn();
               // } 
//                else
//                {
//                    $("#rating_message").fadeIn(1000, function () 
//                    {
//                        $("#rating_message").html('<center><h3>'+ response +'</h3></center>');
//                    });
//                }
            }
        });

    });

});