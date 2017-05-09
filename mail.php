<?php
$asunto= $_GET['asunto'];
$mensaje= $_GET['mensaje'];
$destinatario= $_GET['correo'];
$edad= $_GET['edad'];

$html="";
$html.="<body>";
$html.="$mensaje";
$html.="<img src='https://jeidonadsi.000webhostapp.com/enviar%20correo/img/13429.png'>";
$html.="</body>";
$html.="<a href='https://jeidonadsi.000webhostapp.com/enviar%20correo/recepcion.php?correo=$destinatario&edad=$edad'>Dar click</a>";



$headers= "MIME-Version: 1.0\r\n";
$headers.= "content-type: text/html; charset=iso-8859-1\r\n";
$headers.= "from: ADSI <dupeca1998@gmail.com>" . "\r\n";

 echo 'Enviando correo a '.$destinatario;
 echo $html;
 mail($destinatario, $asunto , $html , $headers);
