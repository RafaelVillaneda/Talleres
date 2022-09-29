$(document).ready(function(){
    $('#btn_ocultar').click(function(){
        $('#div_principal').hide(1000);
    });

    $('#btn_mostrar').click(function(){
        $('#div_principal').show(1000);
    });

    $('#btn_ocultar_FadeOut').click(function(){
        $('#div_principal').fadeOut(1000);
    });

    $('#btn_mostrar_FadeIn').click(function(){
        $('#div_principal').fadeIn(1000);
    });
});