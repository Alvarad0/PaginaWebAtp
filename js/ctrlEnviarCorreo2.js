(function(){
    $("#enviar").click(function() {
 
        var nombre = $("#nombre").val();
            email = $("#correo").val();
            validacion_email = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
            telefono = $("#asunto").val();
            mensaje = $("#mensaje").val();
 
        if (nombre == "") {
            $("#nombre").focus();
            return false;
        }else if(email == "" || !validacion_email.test(email)){
            $("#correo").focus();    
            return false;
        }else if(telefono == ""){
            $("#asunto").focus();
            return false;
        }else if(mensaje == ""){
            $("#mensaje").focus();
            return false;
        }else{
            $('.ajaxgif').removeClass('hide');
            var datos = 'nombre='+ nombre + '&correo=' + email + '&asunto=' + telefono + '&mensaje=' + mensaje;
            
            alert(datos);
            return false;
        }
 
    });
})();
