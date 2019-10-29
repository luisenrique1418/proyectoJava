//declaracion del modal
var modal = $("<div class='modal'></div>");
//declaracion de la variable img
var frame = $('<iframe>');
//variable parrafo o <p>, tambien llamado etiqueta parrago
//var p = $('<p>');
//Agregar la imagen al modal
modal.append(frame);
//Agregar la etiqueta parrafo
//modal.append(p);
//Se agrega al body del html el modal
$('body').append(modal);
//Metodo on click de las imagenes
$('#formulario a').click(function(e) {
    //SE previente el evento por default
    e.preventDefault();
    //Se toma la source de la imagen que se clickeo y se le asigna a nuestra variable img, que ya esta agregada al modal
    frame.attr('src', $(this).attr('href'));
    frame.attr('allowFullscreen','true');
    //Se agrega el texto de la imagen al modal, y se toma desde el html
    //p.text($(this).children('img').attr('alt'));
    $('.modal').show();
});

$('.modal').click(function() {
    $(this).hide();
});