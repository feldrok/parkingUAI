<?php
  include("connect_db.php");
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
      $_SESSION['username']=$username;
      header("location: estacionate.php");
    }
    else {
      $_SESSION['error_message']="Usuario o Contraseña Incorrecto";
      header("Location:entrar.php");
    }
  }
?>
