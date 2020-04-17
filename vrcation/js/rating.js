$(document).ready(function () {
    
    //$('#rating_message').hide();
    
    $('input[name="rating"]').on("click", function () {

    var ratingValue = $(this).val();
    var rated_location="Glendalough, Co. Wicklow";
    //alert(ratingValue);
       var data = {rating : ratingValue, location:rated_location};
      $.ajax({
           
          
            type: 'POST',
            url: 'functions/rating_process.php',
            data: data,
            beforeSend: function ()
            {
             
            },
            success: function (response)
            {
                $(".ratings").hide();
                    $("#rating_message").fadeIn(1000, function () 
                    {
                        $("#rating_message").html(response + ratingValue.toString() + ' stars!');
                    });
            }
        });

    });
    
     $('input[name="ratingtwo"]').on("click", function () {

    var ratingValue = $(this).val();
    var rated_location="Aran Islands, Co. Galway";
    //alert(ratingValue);
       var data = {rating : ratingValue, location:rated_location};
      $.ajax({
           
          
            type: 'POST',
            url: 'functions/rating_process.php',
            data: data,
            beforeSend: function ()
            {
             
            },
            success: function (response)
            {
                $(".ratingtwo").hide();
                    $("#rating_message2").fadeIn(1000, function () 
                    {
                        $("#rating_message2").html(response + ratingValue.toString() + ' stars!');
                    });
            }
        });

    });
    

});