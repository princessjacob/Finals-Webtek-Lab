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
    <div class="backhome">
        <a href="index.html"><p class="fa fa-home"> Back</p></a>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel1 panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Register</h3>
                    </div>  
                        <!-- /.panel-heading -->
                        <div class="newpan">
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#customer" data-toggle="tab">I'm a Customer</a>
                                </li>
                                <li><a href="#servprovider" data-toggle="tab">I'm a Service Provider</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="customer">
                                    <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                        <fieldset>
                                            <div class="form-group3">
                                                <input class="form-control form-control-inline" placeholder="First Name" name="fname" type="fname" value="">
                                            </div>
                                            <div class="form-group2">
                                                <input class="form-control form-control-inline1" placeholder="Last Name" name="lname" type="lname" value="">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Email Address" name="email" type="email" value="">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                            </div>
                                            <div class="form-group4">
                                                <input class="form-control form-control-inline2" placeholder="Zip Code" name="zcode" type="zcode" value="">
                                            </div>
                                            <div class="form-group5">
                                                <input class="form-control form-control-inline3" placeholder="Barangay Address" name="address" type="address" value="">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Contact No." name="contactno" type="contactno" value="">
                                            </div>
                                            <input type="submit" name="custregister" value="Submit" class="btn btn-lg btn-success btn-block">
                                        </fieldset>
                                    </form>
                                </div>
                                <?php
                                if(isset($_POST["custregister"])) {
                                $fname = $_POST["fname"];
                                $lname = $_POST["lname"];
                                $email = $_POST["email"];
                                $password = $_POST["password"];
                                $streetadd = $_POST["address"];
                                $zcode = $_POST["zcode"];
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

                                <div class="tab-pane fade" id="servprovider">
                                    <form role="form">
                                        <!-- REGISTRATION ACTION -->    
                                        <?php
                                            if(isset($_POST["spregister"])) {
                                                $spfirstName = $_POST["spfirstName"];
                                                $splastName = $_POST["splastName"];
                                                $spusername = $_POST["spusername"];
                                                $spemail = $_POST["spemail"];
                                                $sppass = $_POST["sppass"];
                                                $sppass = md5($sppass);
                                                $spbarangay = $_POST["spbarangay"];
                                                $spzcode = $_POST["spzcode"];
                                                $spcontactno = $_POST["spcontactno"];
                                                if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $spemail)) {
                                                  echo "The email you have entered is invalid, please try again.";
                                                } else {
                                                  $result = mysqli_query($petmovetkodb, "SELECT * FROM service_provider WHERE spEmail = '$spemail'");
                                                  if(mysqli_num_rows($result) > 0) {
                                                    print "Account already exists!";
                                                    mysqli_free_result($result);
                                                  } else {
                                                    $sql = "INSERT INTO service_provider (spLastName, spFirstName, spEmail, spPassword, spAdd, spNum, spPet, spZip, spServices) VALUES ('$splastName', '$spfirstName', '$spemail', '$sppass', '$spAdd', '$spbarangay', '$spzcode', '$spPet', '$spServices', '$spNum')";
                                                    if ($petmovetkodb->query($sql) === TRUE) {
                                                      $_SESSION['loggedin'] = true;
                                                      $_SESSION['user'] = $spemail;
                                                      header("Location: pages/accountcreated.php");
                                                    } else {
                                                      echo "Error: " . $sql . "<br>" . $petmovetkodb->error;
                                                    }
                                                  }
                                                }
                                            }   
                                        ?>
                                            <!-- End of SIGN UP ACTION -->
                                        <fieldset>
                                            <div class="form-group3">
                                                <input class="form-control form-control-inline" placeholder="First Name" name="fname" type="fname" value="">
                                            </div>
                                            <div class="form-group2">
                                                <input class="form-control form-control-inline1" placeholder="Last Name" name="lname" type="lname" value="">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Email Address" name="email" type="email" value="">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Username" name="username" type="Username" value="">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                            </div>
                                            <div class="form-group4">
                                                <input class="form-control form-control-inline2" placeholder="Zip Code" name="zcode" type="zcode" value="">
                                            </div>
                                            <div class="form-group5">
                                                <input class="form-control form-control-inline3" placeholder="Barangay Address" name="address" type="address" value="">
                                            </div>   
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Contact No." name="contactno" type="contactno" value="">
                                            </div>
                                            
                                            <div class="form-group">
                                                <h5 class="servoff"><b>Services Offered:</b></h5>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox">Pet Training&nbsp;&nbsp;&nbsp;
                                                    </label>
                                                    <label class="checkbox-inline">
                                                        <input type="checkbox">Pet Sitting
                                                    </label>
                                            </div>
                                            <div class="form-group">
                                                <label class="checkbox-inline">
                                                    <input type="checkbox">Pet Grooming
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox">Vet
                                                </label>
                                            </div>
                                            
                                            <div class="form-group">
                                                <h5 class="pet"><b>Pet:</b></h5>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox">Cat
                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox">Dog
                                                </label>
                                            </div>

                                            <input type="submit" value="Register" class="btn btn-lg btn-success btn-block">
                                            
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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