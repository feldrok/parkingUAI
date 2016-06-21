<?php
  $cookie_name =  "loggedin";

  $host = 'localhost';
  $dbusername = 'antheacl_puai';
  $dbpassword = 'santiago2016';
  $database = 'antheacl_parkinguai';
  $connect_db = mysqli_connect($host,$dbusername,$dbpassword,$database);

  session_start();
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    // username and password received from loginform
    $username=mysqli_real_escape_string($connect_db,$_POST['username']);
    $password=mysqli_real_escape_string($connect_db,$_POST['password']);
    $password=md5($password);//convert into md5 encrypted password
    $sql_query="SELECT id FROM registro WHERE username='$username' and password='$password'";
    $result=mysqli_query($connect_db,$sql_query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);// If result matched $username and $password, table row must be 1 row

    if($count==1)
    {
      $cookie_value = $username;
      setcookie($cookie_name, $cookie_value, time() + (180), "/");
      //$_SESSION['username']=$username;
      header("Location: estacionate.php");
    }
    else {
      $_SESSION['error_message']="Usuario o Contraseña Incorrecto";
      header("Location:entrar.php");
    }
  }

  function consultaDisponibilidad() {

  }

  function reservar($username, $id_estacionamiento) {
    $stringsql = "INSERT INTO `reservas`(`id_usuario`, `id_estacionamiento`, `estado`, `registroentrada`) VALUES (18, 1, 1, null)";

    $resultado = mysql_query("SELECT `id_usuario`, `id_estacionamiento`, `estado`, `registroentrada` FROM `reservas` WHERE 'id_estacionamiento'='$id_estacionamiento' AND 'estado'=1 ");
    if(mysql_num_rows($resultado) == 0) {
      $est1 = mysql_query($connect_db, $stringsql);
      if ($estado) {
        return 1;
      } else {
        return 0;
      }
    } else {
      return 2;
    }
  }
?>
