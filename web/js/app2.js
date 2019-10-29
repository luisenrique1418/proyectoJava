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