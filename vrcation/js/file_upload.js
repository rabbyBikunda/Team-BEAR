$(document).ready(function () {

    var catchDome = $("div.upload_space");
    catchDome.hide();
    catchDome.eq(0).show();
    $(".images").change(function () {

        $('.upload_space').hide();
        $('.upload_space:lt(' + $(this).val() + ')').show();

    });
  
});