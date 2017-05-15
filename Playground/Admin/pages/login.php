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
    <link href="../bootstrap/dist/css/admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

   <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        .err {
            font-family: 'Open Sans', serif;
            font-size: 11px;
            text-transform: uppercase;
            color: red;
            margin-bottom: 4px;
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

<div class="backhome">
    <a href="../index.php"><p class="fa fa-home"> Back</p></a>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Log In</h3>
                </div>
                <div class="panel-body">
                    <?php
                    $err = '';

                    if(isset($_POST["login"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
                        $username = $_POST["username"];
                        $password = $_POST["password"];

                        $result = mysqli_query($petmovetkodb, "SELECT * FROM customer WHERE custEmail = '$username' AND custPassword = '$password'");
                        $resultSP = mysqli_query($petmovetkodb, "SELECT * FROM service_provider WHERE spEmail = '$username' AND spPassword = '$password'");
                            
                        if(mysqli_num_rows($result) > 0) {
                            $_SESSION['loggedin'] = true;
                            $_SESSION['username'] = $email;
                            header("Location: customers.php");
                        } else if (mysqli_num_rows($resultSP) > 0) {
                            $row = mysqli_fetch_row($resultSP);
                            $id = $row[0];
                            if($row[15] == "acc") {
                                $query = "UPDATE service_provider SET spLoggedIn='active' WHERE spID='".$id."'";
                                if (mysqli_query($petmovetkodb, $query)) {
                                    $_SESSION['loggedin'] = true;
                                    $_SESSION['username'] = $row[0];
                                    echo mysqli_affected_rows($petmovetkodb);
                                    header("Location: http://localhost:8080/petmovetko/pages/index.jsp?id=".$id);
                                } else {
                                    var_dump(mysqli_query($petmovetkodb, $query));
                                }
                            } else {
                                header("Location: unaccepted.php");
                                mysqli_free_result($resultSP);
                            }
                        } else if ($username == "admin" && $password == "finalswebteklab") {
                            $_SESSION['loggedin'] = true;
                            $_SESSION['username'] = "admin";
                            header("Location: dashboard.php");
                        } else {
                            echo "<div class='err'> Incorrect email or password! </div>";
                            mysqli_free_result($result);
                            mysqli_free_result($resultSP);
                        }
                    }
                    ?>
                    <form role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username/Email" name="username" type="username" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password">
                            </div>
                            <a href = "forgot.html" name = "forgot">Forgot Password</a>
                            <!-- Change this to a button or input when using this as a form -->
                            <button name="login" class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>
                    </form>
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