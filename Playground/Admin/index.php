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
    <link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
  $worlddb = new mysqli("localhost", "root", "", "world");
      // Check connection
  if ($petmovetkodb->connect_error) {
    die("Connection failed: " . $petmovetkodb->connect_error);
  }

  if ($worlddb->connect_error) {
    die("Connection failed: " . $worlddb->connect_error);
  }
?>


<div class="container">
  <div class="row">
    <div class="col-md-4">
    <h1> Welcome to Pet Mo, Vet Ko! </h1>
    <h2> Care for your pets now! </h2>
    <div> <p> With professionals always in the work, you never have to worry about the circumstance of your pet.</p></div>
    </div>
    <div class="col-md-4 col-md-offset-7">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Log In</h3>
        </div>
        <div class="panel-body">
          <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="Email" name="email-signin" type="username" autofocus>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="pass-signin" type="password" value="">
              </div>
              <a href = "forgot.html" name = "forgot">Forgot Password</a>
              <!-- Change this to a button or input when using this as a form -->
              <input class="btn btn-primary" type="submit" name="loginbutton" value="Login">                    
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- LOGIN ACTION -->
<?php
  if(isset($_POST["loginbutton"])) {
    $emailsignin = $_POST["email-signin"];
    $passsignin = $_POST["pass-signin"];

    $result = mysqli_query($petmovetkodb, "SELECT * FROM customers WHERE Email = '$emailsignin' AND Password = '$passsignin'");

    $resultSP = mysqli_query($petmovetkodb, "SELECT * FROM service_providers WHERE Email = '$emailsignin' AND Password = $passsignin ");

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
      echo "Incorrect/Unregistered email or password!";
      mysqli_free_result($result);
    }
  }
?>

<!-- END OF LOGIN ACTION -->

<div class="container">
  <div class="row">
    <div class="col-md-4 col-md-offset-7">
      <div class="login-panel1 panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Sign Up</h3>
        </div>
        <div class="panel-body">
          <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
          <fieldset>
            <div class="form-group">
              <input class="form-control" placeholder="First Name" name="firstName" type="fname" autofocus required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Last Name" name="lastName" type="lname" value="" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Email Address" name="email" type="email" value="" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="New Password" name="pass" type="password" value="" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Contact Number" name="contactno" type="addr" value="" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Street Address" name="streetadd" type="addr" value="" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Barangay" name="barangay" type="addr" value="" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="City/Province" name="cityprovince" type="addr" value="" required>
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="Country" name="country" type="addr" value="" required>
            </div>        
            <input class="btn btn-lg btn-success btn-block" type="submit" name="customerregister" value="Create Account"><br>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>


    <!-- SIGN UP ACTION -->
    
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

        if (empty($firstName) || empty($lastName) || empty($email) || empty($pass) || empty($streetadd) || empty($barangay) || empty($cityprovince) || empty($country) || empty($contactno)) {

          echo "Please fill up all the parts of the form";

        } else if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
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

    <!-- End of SIGN UP ACTION -->

    <br>

    <a href="register.php">I am a Service Provider</a>

    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

  </body>
</html>