var loginFormHTML ='<form id="login_form" action="usuario/login" method="post"><div><h3>Inicia sesión</h3></div><div id="login_form_username">Usuario o Email:<br /><input type="text" name="login[username]" id="login_username" /></div><div id="login_form_password">Contraseña: <br /><input type="password" name="login[password]" id="login_password" /><br /></div></form>';
var forgotFormHTML = '<form id="forgot_form" action="usuario/forgot" method="post"><div><h3>¿Olvidaste tu contraseña?</h3><br />Por favor, ingresa tu dirección de email. Reiniciaremos tu contraseña, te la enviaremos por correo y te daremos otras instrucciones. Luego podras cambiar la contraseña por la que desees!</div><hr /><div  id="login_form_username">Email:<br /><input type="text" name="forgot[email]" id="forgot_email" /></div><div></div>';
var ajaxError = '<p><span class="ui-icon ui-icon-cancel" style="float:left; margin:0 7px 50px 0;"></span>Doh! ha ocurrido algo que no deberia!</p><p>Estamos trabajando por arreglarlo, danos un momemnto y algunas cervezas</b>.</p>';
var btnArray={
    "Iniciar Sesión": function() {
        $("#login_form").submit();
    },
    "Crea una cuenta nueva!": function() {
        $.ajax({
            url: 'usuario/new',
            statusCode: {
                404: function() {
                    $(".ui-dialog-buttonset").remove();
                    $("#main-login-form").html(ajaxError);
                }
            },
            success: function(data){
                $("#main-login-form").html(data);
                $(".ui-dialog-buttonset").remove();
                $("#main-login-form").dialog({
                    buttons: {
                        "Crea una cuenta nueva!": function() {
                            $("#bien_login_form").submit();
                        }
                    }
                })
            },
            error: function(){
                $(".ui-dialog-buttonset").remove();
                $(this).html(ajaxError);
            }
                
        })
    },
    "Olvide mi contraseña": function() {
        $(this).html(forgotFormHTML);
        $(".ui-dialog-buttonset").remove();
        $(this).dialog({
            buttons: {
                'Recuperar mi contraseña': function(){
                    $("#forgot_form").submit();
                }
            }
        })
    }
}

$(document).ready(function(){
    $("#main-login-form").dialog({
        autoOpen: true,
        modal: true,
        width: 540,
        open: function() {
            $(this).html(loginFormHTML);
            $(".ui-dialog-buttonset").remove();
            $(this).dialog({
                buttons: btnArray
            })
        },
        close: function() {
            $(this).html('')
        },
        buttons: btnArray
    });
})