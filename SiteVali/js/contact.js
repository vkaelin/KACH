$(function () {
    $('#contact-form').submit(function (e) {
        e.preventDefault(); // Enlever le comportement par défaut du formulaire (passage sur une autre page etc)
        $('.comments').empty();
        var postdata = $('#contact-form').serialize();

        $.ajax({
            type: 'POST',
            url:  'contact-post.php',
            data: postdata,
            dataType: 'json',
            success: function(result) {
                if (result.isSuccess) {
                    $("#contact-form").append("<p class='thank-you'>Merci, votre message a bien été envoyé.</p>");
                    $("#contact-form")[0].reset();
                }
                else {
                    $("#name + .comments").html(result.nameError);
                    $("#phone + .comments").html(result.phoneError);
                    $("#email + .comments").html(result.emailError);
                    $("#object + .comments").html(result.objectError);
                    $("#message + .comments").html(result.messageError);
                }
            }

        });

    });
});