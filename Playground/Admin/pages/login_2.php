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

    <style>
      @media(max-width: 767px) {
        .hider {
          display: none;
        }
      }
    </style>

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


<div class="container" style="margin-top: 100px;">
  <div class="row">
  </div>
  <div class="row">
    <div class="col-md-7">
      <div class="hidden-xs col-sm-7 hidden-md hidden-lg">
        <img src="../images/loginmobile.png" alt="Join Pet Mo, Vet Ko Now!" width="100%"/>
      </div>
      <div class="hidden-xs hidden-sm col-md-7 hidden-lg">
        <img src="../images/login.png" alt="Join Pet Mo, Vet Ko Now!" width="100%"/>
      </div>
      <div class="hidden-xs hidden-sm hidden-md col-lg-7">
        <img src="../images/login.png" alt="Join Pet Mo, Vet Ko Now!" width="100%"/>
      </div>
      <div class="hidden-xs hidden-sm col-md-5 col-lg-5" style="display: flex;">
        <h3 style="font-family: 'Comfortaa', cursive; font-size: 1.2em; width: 80%; line-height: 40px;"> With professionals always in the work, you never have to worry about the circumstance of your pet.</h3>
      </div>
      <div class="row">
      <div class="col-md-12">
        <h2 style="font-family: 'Pacifico', cursive; font-size: 4em; text-align: center;"> Care for your pets now! </h2>
      </div>
    </div>
    </div>
    <div class="col-md-4">
      <div class="well-lg">
        <div class="hidden-"
        <img src="../images/logo.png" alt="Welcome to Pet Mo, Vet Ko!" width="100%">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#login" data-toggle="tab">Login</a> </li>
            <li><a href="#signup" data-toggle="tab">Register</a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="login">
              <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" style="margin-top: 15px;">
                <fieldset>
                  <div class="form-group">
                    <input class="form-control" placeholder="Email" name="email-signin" type="username" autofocus required>
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Password" name="pass-signin" style="display: inline-block; width: 68%;" type="password" value="" required> 
                    <input class="btn btn-primary" style="display: inline-block; width: 30%;" type="submit" name="loginbutton" value="Login"><br>
                    <div class="checkbox"> 
                      <label> <input type="checkbox" name="remember-me"> Remember me </label> &#x1f43e; 
                      <a href = "forgot.html" name = "forgot">Forgot Password</a>
                    </div>
                  </div>
                </fieldset>
              </form>
              <?php
                if(isset($_POST["loginbutton"])) {
                $emailsignin = $_POST["email-signin"];
                $passsignin = $_POST["pass-signin"];

                $result = mysqli_query($petmovetkodb, "SELECT * FROM customers WHERE Email = '$emailsignin' AND Password = '$passsignin'");

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
            <div class="tab-pane fade" id="signup">
              <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" style="margin-top: 15px;">
                <fieldset>
                  <div class="form-group">
                    <input class="form-control" style="display: inline-block; width: 49%;" placeholder="First Name" name="firstName" type="fname" autofocus required>
                    <input class="form-control" style="display: inline-block; width: 49%;" placeholder="Last Name" name="lastName" type="lname" value="" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Email Address" name="email" type="email" value="" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Password" name="pass" type="password" value="" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Contact Number" name="contactno" type="addr" value="" required>
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Address" name="streetadd" type="addr" value="" required>
                  </div>
                  <input class="btn btn-lg btn-success btn-block" type="submit" name="customerregister" value="Create Account"><br>
                  <a href="register.php">I am a Service Provider</a>
                </fieldset>
              </form>
              <?php
                if(isset($_POST["customerregister"])) {
                  $firstName = $_POST["firstName"];
                  $lastName = $_POST["lastName"];
                  $email = $_POST["email"];
                  $pass = $_POST["pass"];
                  $streetadd = $_POST["streetadd"];
                  $barangay = $_POST["barangay"];
                  $cityprovince = $_POST["cityprovince"];
                  $country = $_POST["country"];
                  $contactno = $_POST["contactno"];

                  if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
                    echo "The email you have entered is invalid, please try again.";
                  } else {
                    $result = mysqli_query($petmovetkodb, "SELECT * FROM customers WHERE Email = '$email'");

                    if(mysqli_num_rows($result) > 0) {
                      print "Account already exists!";
                      mysqli_free_result($result);
                    } else {
                      $sql = "INSERT INTO Customers (LastName, FirstName, Email, Password, StreetAdd, Barangay, CityProvince,  Country, ContactNo) VALUES ('$lastName', '$firstName', '$email', '$pass', '$streetadd', '$barangay', '$cityprovince', '$country', '$contactno')";

                    if ($petmovetkodb->query($sql) === TRUE) {
                      echo "<div> Account Created! </div>";
                    } else {
                      echo "Error: " . $sql . "<br>" . $petmovetkodb->error;
                    }
                  }
                }
              }   
            ?>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>

    <!-- End of SIGN UP ACTION -->

    <script src="../bootstrap/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bootstrap/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../bootstrap/dist/js/sb-admin-2.js"></script>

  </body>
</html>