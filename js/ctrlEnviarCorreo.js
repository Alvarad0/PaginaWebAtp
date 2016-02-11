$(document).ready(function(){
	formSubmit();
})

function formSubmit(){
	$("#formulario").submit(function(e){
		e.preventDefault();
		var nombre= $('#nombre').val();
		var correo= $('#correo').val();
		var asunto= $('#asunto').val(); 
		var mensaje= $('#mensaje').val();

		var data ='nombre='+nombre+'&correo='+correo+'&asunto='+asunto+'&mensaje='+mensaje;

		alert(data);

	 $.ajax({
            url:'ctrlEnviarCorreo.php',
            type:'POST',
            data:data,
            success:function(){
                alert('Su mensaje ha sido enviado');
                $("#formulario").each(function(){
                    this.reset();
                })
            }
        })
	
	})
}