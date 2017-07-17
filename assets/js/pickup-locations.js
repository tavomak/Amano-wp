$(document).ready(function () {

    var currentState = $('#shipping_state').val();
    console.log(currentState);
    console.log(ajax_object[currentState]);

    function ajax_object_iteration() {
        $.each(ajax_object[currentState], function (ciudad, agencia) {
            $.each(agencia, function (nombre, direccion) {});
            $('#shipping_city').append($('<option>', {
                value: ciudad,
                title: ciudad
            }).text(ciudad));
        });
    }

    $('#shipping_state option:first-child').val('Elige');

    if (currentState == 'Elige') {
        $('#shipping_city_field').hide();
        $('#shipping_agency_field').hide();
    } else {
        ajax_object_iteration();
    }

    $('#shipping_state').on('change', function () {
        currentState = $('#shipping_state').val();
        console.log(currentState);
        $('#shipping_city option').each(function () {
            $(this).remove();
        });
        $('#shipping_city').append($('<option>', {
            value: 'Seleccionar Ciudad',
            title: 'Seleccionar Ciudad'
        }).text('Seleccionar Ciudad'));
        $.ajax({
            cache: false,
            type: "POST",
            url: ajax_object.ajax_url,
            beforeSend: function () {
                $('.woocommerce-shipping-fields').css('background', 'yellow');
            },
            complete: function () {
                $('.woocommerce-shipping-fields').css('background', 'none');
            },
            data: {
                action: 'custom_city_field',
            },
            success: ajax_object_iteration()
        });
    });
});