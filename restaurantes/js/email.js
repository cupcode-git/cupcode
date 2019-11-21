(function ($) {
    'use strict';

    var form = $('.getin_form'),
        mensagem = $('.form_mensagem'),
        form_data;

    // Success function
    function done_func(response) {
        mensagem.fadeIn().removeClass('alert-danger').addClass('alert-success');
        mensagem.text(response);
        setTimeout(function () {
            mensagem.fadeOut();
        }, 2000);
        form.find('input:not([type="submit"]), textarea').val('');
    }

    // fail function
    function fail_func(data) {
        mensagem.fadeIn().removeClass('alert-success').addClass('alert-success');
        mensagem.text(data.responseText);
        setTimeout(function () {
            mensagem.fadeOut();
        }, 2000);
    }
    
    form.submit(function (e) {
        e.preventDefault();
        form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: form_data
        })
        .done(done_func)
        .fail(fail_func);
    });
    
})(jQuery);