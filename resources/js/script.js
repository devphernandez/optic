//carga inicial
document.addEventListener("DOMContentLoaded", function(){
	terminarCarga();
}, false);


$( document ).ready(function() {
    $('input').keypress(function(e){
        if(e.which==13){ 
            //$("[tabindex='"+($(this).attr("tabindex")+1)+"']").focus();
            //e.preventDefault();
            return e.keyCode = 9;
        }
    });
    $(".collapse").sideNav({
        closeOnClick: true,
        draggable: true
    });
    $(".button-collapse").sideNav();
    $('.collapsible').collapsible();
    $('.dropdown-button').dropdown({
          inDuration: 300,
          outDuration: 225,
          constrain_width: false, // Does not change width of dropdown to that of the activator
          hover: true, // Activate on hover
          gutter: 0, // Spacing from edge
          belowOrigin: true, // Displays dropdown below the button
          alignment: 'left' // Displays dropdown with edge aligned to the left of button
        }
      );

    $('#form').submit(function() {
      	// Enviamos el formulario usando AJAX
        if(validarCampos($(this).attr('name'))){
            Materialize.toast('Complete los campos', 5000);
        }else{
            comenzarCarga();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType : 'json',
                success : function(data){
                    if(data.success){
                        Materialize.toast(data.redirect);
                        if(data.redirect){
                            location.href = data.location;
                        }
                    }else{
                        Materialize.toast(data.msg, 5000);
                    }
                },
                error : function(data){
                    Materialize.toast(data.msg, 5000);
                }
            });       
        }
        terminarCarga();
        return false;
    });
});
function validaLogin(){
    var valida = false;
    if($('#rut').val() == ''){ valida = true; };
    if($('#pass').val() == ''){ valida = true;};
    return valida;
}
function validaInventario(){
    var valida = false;
    if($('#nombre').val() == ''){ valida = true; };
    if($('#precio').val() == ''){ valida = true;};
    if($('#stock').val() == ''){ valida = true;};
    return valida;
}
function validarCampos(name){
    switch(name){
        case 'login':
            return validaLogin();
            break;
        case 'inventario':
            return validaInventario();
            break;
        default:
            break;
    }  
}
function comenzarCarga(){
	$('.preloader-background').fadeIn('slow');
	$('.preloader-wrapper').fadeIn();
}
function terminarCarga(){
	$('.preloader-background').fadeOut('slow');
	$('.preloader-wrapper').fadeOut();
}