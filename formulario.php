<?php 


	$nombre = $_POST['name'];
	$mail = $_POST['email'];
    $phone = $_POST['phone'];
	$mensaje = $_POST['message']; 

	$mensaje = "Este mensaje fue enviado por" . $nombre . ",r\n";
	$mensaje = "Su correo es:" . $mail . ",r\n";
	$mensaje = "Numero de contacto es" . $phone . ",r\n";
	$mensaje = "Mensaje" . $_POST['message'] . ",r\n";
	$mensaje = "Enviado el" . date('d/m/y', time());

	$para = 'andres-10ruiz@hotmail.com';
	$asunto = 'Este email fue enviado desde impacto.com';

	mail($para, $asunto,  $mensaje, $header );

	header('location:index.html')
		


/*
$remitente = $_POST['email'];
$destinatario = 'pa.magnect@gmail.com'; // en esta línea va el mail del destinatario.
$asunto = 'Email de la IMPACTO ING S.A.S'; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "name y apellido: " . $_POST["name"] . "\r\n"; 
    $cuerpo .= "email: " . $_POST["email"] . "\r\n";
    $cuerpo .= "phone: " . $_POST["phone"] . "\r\n";
    $cuerpo .= "Message: " . $_POST["message"] . "\r\n";
    
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['name']." ".$_POST['message']."\" <".$remitente.">\n";
	header('location:index.html');

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'index.html'; //se debe crear un html que confirma el envío
}
?>

*/

?>
