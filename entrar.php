<?php
  include("connect_db_login.php");
  $cookie_name = "loggedin";
  //session_start();
  if (isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name];
    header("Location: estacionate.php");
}
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>parkingUAI - la mejor forma de ahorrar tiempo</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                  <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand page-scroll" href="index.php">
                  <i class="fa fa-play-circle"></i>  <span class="light">parking</span> UAI
              </a>
          </div>

          <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
              <ul class="nav navbar-nav">
                  <li class="hidden">
                      <a href="#page-top"></a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#login">Entrar</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#register">Registrarme</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
  </nav>

  <header id="login" class="intro">
      <div  class="intro-body">
          <div class="container">
              <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <h1 class="transparentback">Entra a parking UAI</h1>
                    <form role="form" name="login" action="connect_db_login.php" method="POST"><p/>
                      <input type="text" id="username" name="username" placeholder="Usuario" required="required" /><p/>
                      <input type="password" id="password" name="password" placeholder="Password" required="required" /><p/>
                      <button type="submit" class="btn btn-default btn-lg">Entrar</button>
                    </form>
                    <?php
                      if (isset($_SESSION['error_message'])) {
                        echo $_SESSION['error_message'];
                        unset($_SESSION['error_message']);
                      }
                     ?>
                  </div>
              </div>
          </div>
      </div>
  </header>



  <section id="register" class="container content-section text-center">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <h1>Registrate en parking UAI</h1>
        <form method="POST" action=""/><p/>
        	<input type="name" name="username" placeholder="Usuario" required="required" /><p/>
          <input type="name" name="email" placeholder="Email" required="required" /><p/>
            <input type="password" name="password" placeholder="Contraseña" required="required" /><p/>
            <input type="password" name="rpassword" placeholder="Repetir Contraseña" required="required" /><p/>
            <button type="submit" name="submit" class="btn btn-default btn-lg">Registrarme</button>
        </form>
        <?php
          if(isset($_POST['submit'])) {
            require("connect_db_register.php");
          }
         ?>
      </div>
    </div>
  </section>



  <!-- Footer -->
  <footer>
      <div class="container text-center">
          <p>Copyright &copy; parkingUAI</p>
      </div>
  </footer>

  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="js/jquery.easing.min.js"></script>

  <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

  <!-- Custom Theme JavaScript -->
  <script src="js/grayscale.js"></script>
</body>
</html>
