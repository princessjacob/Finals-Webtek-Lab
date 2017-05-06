<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pet Mo, Vet Ko!</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

   <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<?php

  $petmovetkodb = new mysqli("localhost", "root", "", "petmovetko");
      // Check connection
  if ($petmovetkodb->connect_error) {
    die("Connection failed: " . $petmovetkodb->connect_error);
  }
?>

<nav class="navbar navbar-default navbar-fixed-top hidden-xs hidden-sm">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="font-family: 'Pacifico', cursive; font-size: 2.5em;"> Pet Mo, Vet Ko! </a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"> <a href="#home"> Home </a> </li>
      <li><a href="#about"> About Us </a> </li>
      <li><a href="#services"> Services </a> </li>
      <li><a href="#sp"> Service Providers </a> </li>
    </ul>
    <a href="pages/signup.php" class="btn btn-primary navbar-btn navbar-right"> Create Account </a>
    <a href="pages/login.php" class="btn btn-default navbar-btn navbar-right" style="margin-right: 10px;"> Login </a>
  </div>
</nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Log In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username/Email" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <a href = "forgot.html" name = "forgot">Forgot Password</a>
                                <!-- Change this to a button or input when using this as a form -->
                                <button action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="btn btn-lg btn-success btn-block">Login</a>
                                
                            </fieldset>
                        </form>
                        <?php
                        if(isset($_POST["loginbutton"])) {
                            $email = $_POST["username"];
                            $pass = $_POST["password"];

                            $result = mysqli_query($petmovetkodb, "SELECT * FROM customers WHERE Email = '$username' AND Password = '$password'");

                            $resultSP = mysqli_query($petmovetkodb, "SELECT * FROM service_provider WHERE SPEmail = '$emailsignin' AND SPPass = '$passsignin' ");

                            if(mysqli_num_rows($result) > 0) {
                                $_SESSION['loggedin'] = true;
                                $_SESSION['user'] = $emailsignin;
                                header("Location: pages/customers.php");
                            } else if (mysqli_num_rows($resultSP) > 0) {
                                $_SESSION['loggedin'] = true;
                                $_SESSION['user'] = $emailsignin;
                                header("Location: pages/serviceproviders.php");
                            } else if ($emailsignin == "admin" && $passsignin == "finalswebteklab") {
                                $_SESSION['loggedin'] = true;
                                $_SESSION['user'] = "admin";
                                header("Location: pages/dashboard.php");
                            } else {
                                echo "Incorrect email or password!";
                                mysqli_free_result($result);
                            }
                        }
                        ?>
                    </div>   
                </div>
            </div>
        </div>
    </div>

    

    <!-- jQuery -->
    <script src="../bootstrap/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bootstrap/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../bootstrap/dist/js/sb-admin-2.js"></script>

</body>

</html>
