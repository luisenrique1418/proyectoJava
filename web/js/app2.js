$('span').hide();

function longitud() {
    if ($('#password').val().length > 8) {
        $('#password').next().hide();
    } else {
        $('#password').next().show();
    }
}

function compara() {
    if ($("#password").val() === $('#confirm').val()) {
        $('#confirm').next().hide();
    } else {
        $('#confirm').next().show();
    }
}

//manda a llamar a los eventos del id #password
$('#password').keyup(longitud).keyup(compara);
$('#confirm').keyup(compara).keyup(longitud);

$('#alumno').click(function() {
    $('#alumnoForm').is(':hidden')
    $('#alumnoForm').show();

    $('#egresadoForm').is(':visible')
    $('#egresadoForm').hide();

    $('#profesorForm').is(':visible')
    $('#profesorForm').hide();
});

$('#egresado').click(function() {
    $('#alumnoForm').is(':visible')
    $('#alumnoForm').hide();

    $('#egresadoForm').is(':hidden')
    $('#egresadoForm').show();

    $('#profesorForm').is(':visible')
    $('#profesorForm').hide();
});

$('#profesor').click(function() {
    $('#alumnoForm').is(':visible')
    $('#alumnoForm').hide();

    $('#egresadoForm').is(':visible')
    $('#egresadoForm').hide();

    $('#profesorForm').is(':hidden')
    $('#profesorForm').show();
});


































/*$('span').hide();

var longitud = function() {
    if ($('#password').val().length > 8) {
        $('#password').next().hide();
    } else {
        $('#password').next().show();
    }
}

var compara = function() {
    if ($('#password').val() === $('#confirm').val()) {
        $('#confirm').next().hide();
    } else {
        $('#confirm').next().show();
    }
}

$('#password').keyup(longitud).keyup(compara);
$('#confirm').keyup(compara).keyup(longitud);
*/