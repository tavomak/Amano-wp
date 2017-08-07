$(document).ready(function () {

    var currentState = $('#shipping_state').val();
    var currentCity = $('#shipping_city').val();
    var currentAgency = $('#shipping_state').val();
    console.log(currentState);
    console.log(ajax_object[currentState]);

    function ajax_object_city_iteration() {
        $.each(ajax_object[currentState], function (ciudad, agencia) {
            $.each(agencia, function (nombre, direccion) {});
            $('#shipping_city').append($('<option>', {
                value: ciudad,
                title: ciudad
            }).text(ciudad));
        });
    }

    function ajax_object_agency_iteration() {
        $.each(ajax_object[currentState][currentCity], function (nombre, direccion) {
            $('#shipping_agency').append($('<option>', {
                value: nombre,
                title: direccion
            }).text(nombre));
        });
    }

    $('#shipping_state option:first-child').val('Elige');
    $('#shipping_city_field').hide();
    $('#shipping_agency_field').hide();

    if (currentState !== 'Elige' || currentState !== null || currentState !== '') {
        ajax_object_city_iteration();
        $('#shipping_city_field').show();
    }

    $('#shipping_state').on('change', function () {
        $('#shipping_city_field').hide('fast');
        currentState = $('#shipping_state').val();
        console.log(currentState);
        $('#shipping_city option').each(function () {
            $(this).remove();
        });
        $('#shipping_city').append($('<option>', {
            value: '',
            title: 'Seleccionar Ciudad'
        }).text('Seleccionar Ciudad'));

        ajax_object_city_iteration();
        $('#shipping_city_field').show('slow');
        $('#shipping_agency option').each(function () {
            $(this).remove();
        });
        $('#shipping_agency_field').hide();

    });

    $('#shipping_city').on('change', function () {
        $('#shipping_agency_field').hide('fast');
        currentCity = $('#shipping_city').val();
        console.log(currentCity);
        $('#shipping_agency option').each(function () {
            $(this).remove();
        });
        $('#shipping_agency').append($('<option>', {
            value: '',
            title: 'Seleccionar Agencia'
        }).text('Seleccionar Agencia'));

        ajax_object_agency_iteration();
        $('#shipping_agency_field').show('slow');

    });

});