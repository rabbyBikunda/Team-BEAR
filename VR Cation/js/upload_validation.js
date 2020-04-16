$(document).ready(function () {
    $("#upload-form").validate({
        errorClass: "foo",
        rules:
                {
                    upload_form_img1: {
                        required: true,
                        extension: "jpg|png|jpeg|bmp|raw"

                    },
                    upload_form_img2: {
                        required: true,
                        extension: "jpg|png|jpeg|bmp|raw"

                    },
                    upload_form_img3: {
                        required: true,
                        extension: "jpg|png|jpeg|bmp|raw"

                    },
                    upload_form_img4: {
                        required: true,
                        extension: "jpg|png|jpeg|bmp|raw"

                    },
                    upload_form_img5: {
                        required: true,
                        extension: "jpg|png|jpeg|bmp|raw"

                    },
                    upload_form_img6: {
                        required: true,
                        extension: "jpg|png|jpeg|bmp|raw"

                    },
                    upload_form_sound1: {
                        required: false,
                        extension: "mp3|flac|wav|ogg"
                    },
                    upload_form_sound2: {
                         required: false,
                        extension: "mp3|flac|wav|ogg"
                    },
                    upload_form_sound3: {
                         required: false,
                        extension: "mp3|flac|wav|ogg"
                    },
                    upload_form_sound4: {
                        required: false,
                        extension: "mp3|flac|wav|ogg"
                    },
                    upload_form_sound5: {
                         required: false,
                        extension: "mp3|flac|wav|ogg"
                    },
                    upload_form_sound6: {
                         required: false,
                        extension: "mp3|flac|wav|ogg"
                    },
                    upload_form_audio1: {
                        required: false,
                        extension: "mp3|flac|wav|ogg"
                    },
                    upload_form_audio2: {
                        required: false,
                        extension: "mp3|flac|wav|ogg"
                    },
                    upload_form_audio3: {
                        required: false,
                        extension: "mp3|flac|wav|ogg"
                    },
                    upload_form_audio4: {
                        required: false,
                        extension: "mp3|flac|wav|ogg"
                    },
                    upload_form_audio5: {
                         required: false,
                        extension: "mp3|flac|wav|ogg"
                    },
                    upload_form_audio6: {
                         required: false,
                        extension: "mp3|flac|wav|ogg"
                    },
                    location_name: {
                        required: true
                    },
                    contact_name: {
                        required: true
                    },
                    phone: {
                        required: true,
                        phoneUK: true
                    }

                },
        messages:
                {
                    upload_form_img1: {
                        required: "Please choose an image to upload",
                        extension: "Please upload a jpg,png,bmp or raw image"
                    },
                    upload_form_img2: {
                        required: "Please choose an image to upload",
                        extension: "Please upload a jpg,png,bmp or raw image"

                    },
                    upload_form_img3: {
                        required: "Please choose an image to upload",
                        extension: "Please upload a jpg,png,bmp or raw image"

                    },
                    upload_form_img4: {
                        required: "Please choose an image to upload",
                        extension: "Please upload a jpg,png,bmp or raw image"

                    },
                    upload_form_img5: {
                        required: "Please choose an image to upload",
                        extension: "Please upload a jpg,png,bmp or raw image"

                    },
                    upload_form_img6: {
                        required: "Please choose an image to upload",
                        extension: "Please upload a jpg,png,bmp or raw image"

                    },
                    upload_form_sound1: {
                    
                        extension: "Please upload a mp3,flac,wav or ogg file"
                    },
                    upload_form_sound2: {
                      
                        extension: "Please upload a mp3,flac,wav or ogg file"
                    },
                    upload_form_sound3: {
                      
                        extension: "Please upload a mp3,flac,wav or ogg file"
                    },
                    upload_form_sound4: {
                     
                        extension: "Please upload a mp3,flac,wav or ogg file"
                    },
                    upload_form_sound5: {
                      
                        extension: "Please upload a mp3,flac,wav or ogg file"
                    },
                    upload_form_sound6: {
                      
                        extension: "Please upload a mp3,flac,wav or ogg file"
                    },
                    upload_form_audio1: {
                      
                        extension: "Please upload a mp3,flac,wav or ogg file"
                    },
                    upload_form_audio2: {
                       
                        extension: "Please upload a mp3,flac,wav or ogg file"
                    },
                    upload_form_audio3: {
                        
                        extension: "Please upload a mp3,flac,wav or ogg file"
                    },
                    upload_form_audio4: {
                      
                        extension: "Please upload a mp3,flac,wav or ogg file"
                    },
                    upload_form_audio5: {
                       
                        extension: "Please upload a mp3,flac,wav or ogg file"
                    },
                    upload_form_audio6: {
                        
                        extension: "Please upload a mp3,flac,wav or ogg file"
                    },
                    location_name: {
                        required: "Please enter your location name"
                    },
                    contact_name: {
                        required: "Please enter your name"
                    },
                    phone: {
                        required: "Please enter your phone number"
                    }


                },
        submitHandler: submitForm

    });

    function submitForm()
    {
        $('.upload_space').each(function () {

            var div_id = $(this).attr('id');

            var input = $('div#' + div_id + '> div.row > div.img > div.card > div.card-body > input');
            var input_id = $(input).attr('id');

            var div = $('div#' + div_id + '> div.row > div.img > div.card > div.card-body > div');
            var div2 = $(div).attr('id');

            var file_data = $('#' + input_id).prop('files')[0];
            var form_data = new FormData();
            form_data.append('file', file_data);

            var div_id_bs = $(this).attr('id');

            var input_bs = $('div#' + div_id_bs + '> div.row > div.bs > div.card > div.card-body > input');
            var input_id_bs = $(input_bs).attr('id');

            var div_bs = $('div#' + div_id_bs + '> div.row > div.bs > div.card > div.card-body > div');
            var div2_bs = $(div_bs).attr('id');

            var file_data_bs = $('#' + input_id_bs).prop('files')[0];
            var form_data_bs = new FormData();
            form_data_bs.append('file', file_data_bs);


            var div_id_ia = $(this).attr('id');
            var input_ia = $('div#' + div_id_ia + '> div.row > div.ia > div.card > div.card-body > input');
            var input_id_ia = $(input_ia).attr('id');

            var div_ia = $('div#' + div_id_ia + '> div.row > div.ia > div.card > div.card-body > div');
            var div2_ia = $(div_ia).attr('id');

            var file_data_ia = $('#' + input_id_ia).prop('files')[0];
            var form_data_ia = new FormData();
            form_data_ia.append('file', file_data_ia);
            
            $.ajax({
                url: 'upload.php', // point to server-side PHP script 
                dataType: 'text', // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (response) {
                    if (response === "Sorry, your file is too large.")
                    {
                        $('#' + div2).css('color', 'red');
                        $('#' + div2).fadeIn(1000, function ()
                        {
                            // alert(response);
                            $('#' + div2).html(response);
                        });
                    }
                    if (response === "Sorry, there was an error uploading your file.")
                    {
                        $('#' + div2).css('color', 'red');
                        $('#' + div2).fadeIn(1000, function ()
                        {
                            $('#' + div2).html(response);
                        });
                    }
                    
                    if(response === "ok")
                    {
                        setTimeout(' window.location.href = "success.php"; ', 1000);
                    }
                }

            });

            $.ajax({
                url: 'upload_2.php', // point to server-side PHP script 
                dataType: 'text', // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data_bs,
                type: 'post',
                success: function (response) {
                   if (response === "Sorry, your file is too large.")
                    {
                        $('#' + div2_bs).css('color', 'red');
                        $('#' + div2_bs).fadeIn(1000, function ()
                        {
                            // alert(response);
                            $('#' + div2_bs).html(response);
                        });
                    }
                    if (response === "Sorry, there was an error uploading your file.")
                    {
                        $('#' + div2_bs).css('color', 'red');
                        $('#' + div2_bs).fadeIn(1000, function ()
                        {
                            $('#' + div2_bs).html(response);
                        });
                    }
                    
                    if(response === "ok")
                    {
                        setTimeout(' window.location.href = "success.php"; ', 1000);
                    }
                }

            });


            $.ajax({
                url: 'upload_2.php', // point to server-side PHP script 
                dataType: 'text', // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data_ia,
                type: 'post',
                success: function (response) {
                    if (response === "Sorry, your file is too large.")
                    {
                        $('#' + div2_ia).css('color', 'red');
                        $('#' + div2_ia).fadeIn(1000, function ()
                        {
                            // alert(response);
                            $('#' + div2_ia).html(response);
                        });
                    }
                    if (response === "Sorry, there was an error uploading your file.")
                    {
                        $('#' + div2_ia).css('color', 'red');
                        $('#' + div2_ia).fadeIn(1000, function ()
                        {
                            $('#' + div2_ia).html(response);
                        });
                    }
                    
                    if(response === "ok")
                    {
                        setTimeout(' window.location.href = "success.php"; ', 1000);
                    }
                }

            });

        });
        
        var data = $("#upload-form").serialize();
        
        $.ajax({
           
            type: 'POST',
            url: 'details.php',
            data: data,
            beforeSend: function ()
            {
                //alert("take it there");
                //$("#error").fadeOut();
            },
            success: function (response)
            {
               // alert(response);
                if (response === "ok") 
                {   
                   setTimeout(' window.location.href = "success.php"; ', 1000);
                } 
//                else if (response === "Invalid login, please try again") 
//                {
//                    $("#error").fadeIn(1000, function () 
//                    {
//                        $("#error").html('<center><h3>'+ response +'</h3></center>');
//                    });
//                }
            }
        });

    }


});