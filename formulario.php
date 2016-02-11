<?php
 $nombre = $_POST["nombre"];

 $correo = $_POST["correo"];

  $contenido = $_POST["contenido"];

 $para = 'suresteatp@gmail.com';//'' cambia las comillas y escribe el correo destinatario
 $asunto = 'Nuevo Mensaje';//sustituye las comillas
 $alerta = 'Su Mensaje ha sido Enviado.';
 $mensaje = '
 Nombre del remitente: '.$nombre.'
 Correo: '.$correo.'
 Mensaje: '.$contenido.' ';// sutituyes las comas por estas ''


/*
$mensaje = 'Nombre del remitente'.$nombre.',';
$mensaje .= 'Correo: '.$correo.',' ;
 $mensaje .= 'Mensaje: '.$contenido.',';
 */
/*
$cabeceras .= 'To: ' . "\r\n";
$cabeceras .= 'From: Emisor <emisor@ejemplo.com>' . "\r\n";
*/
 mail ($para,$asunto,utf8_decode($mensaje));
 /* 
 			$bool = mail($para, $asunto, $mensaje, $cabeceras);
			if($bool){
				echo "Mensaje enviado";
				
				echo "<meta http-equiv='refresh' content='2;index.html'>";//este te regresa al formulario  en 2 segundos 
			}else{
				echo "Mensaje no enviado";
				echo "<meta http-equiv='refresh' content='2;URL=index.html'>";//este te regresa al formulario  en 2 segundos 
			}
 
 */	
	/*echo '<script>alert("Su mensaje ha sido enviado.");</script>';
	header ("location:index.html");

	*/
	 print "<script>alert('$alerta')</script>";
 print("<script>window.location.replace('index.html');</script>"); 
?>
