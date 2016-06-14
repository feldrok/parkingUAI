<?php
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $rpassword = $_POST['rpassword'];
  $reqlen = strlen($username) * strlen($email) * strlen($password) * strlen($rpassword);

  if ($reqlen > 0) {
    if ($password === $rpassword) {
      require("connect_db.php");
      $password = md5($password);
      $rpassword = md5($rpassword);
      mysql_query("INSERT INTO registro VALUES('', '$username', '$email', '$password', '$rpassword')");
      mysql_close($link);
      echo 'Se ha registrado exitosamente.';
    } else {
      echo 'Porfavor introdusca dos contraseña identicas.';
    }
  } else {
    echo 'Porfavor rellene todos los campos requeridos.';
  }
?>
