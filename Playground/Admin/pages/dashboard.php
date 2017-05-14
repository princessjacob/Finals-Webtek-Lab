<?php
session_start();
if ($_SESSION['loggedin'] == false ) {
    header('Location: login.php');
} else if (!$_SESSION['username'] == "admin") {
    echo "<script> alert('Restricted Access! You are not allowed to visit this site.'); </script>";
    header('Location: ../index.php');
}
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

    <!-- Morris Charts CSS -->
    <link href="../bootstrap/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Aladin" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #notif {
            width: 20px;
            height: 20px;
            line-height: 5px;
            font-size: 10px;
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
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top hidden-xs hidden-sm">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="font-family: 'Pacifico', cursive; font-size: 2.5em;"> Pet Mo, Vet Ko! </a>
                </div>
            <a href="../index.php" class="btn btn-primary navbar-btn navbar-right" style="margin-right: 2em;"> Go Back to Public Page </a>
            </div>
        </nav>

        <!-- Navigation side -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" >
            <div class="navbar-header">
                <a class="navbar-brand" href="dashboard.php">Pet Mo, Vet Ko!</a>
            </div>
            <!-- /.navbar-header -->

    

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="dashboard.php">Dashboard</a>
                        </li>
                        <li>
                            <a href="spReq.php"> Registration Requests
                            <?php
                                $req = "SELECT * FROM service_provider WHERE spReqStatus = 'pend'";
                                $result = $petmovetkodb->query($req);
                                if ($result->num_rows > 0) {
                                    $row = $result-> num_rows;
                                    echo "<span id='notif' class='btn btn-circle btn-danger pull-right'> $row </span>";
                                }
                            ?>
                            </a>
                        </li>
                        <li>
                            <a href="#">Manage<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="sp.php">Service Providers</a>
                                </li>
                                <li>
                                    <a href="ct.php">Customers</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#">Activity<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="statistics.php">Statistics</a>
                                </li>
                                <li>
                                    <a href="servstat.php">Service Status</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="reports.php">Complaints</a>
                        </li>
                        
                       
                    </ul>
                    <br>
                        <li>
                            <a href="login.php">Logout</a>
                        </li>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="font-family: 'Slabo 27px', serif;">PET SERVICE APPLICATION<p>Welcome back, Admin!</p></h1>
                    <?php 
                        echo "<h3> Date Today: " . date("F d, Y l") . "<br>";
                        ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                
                <div class = "stat" style="margin-top: 3vh;">
                <h2>Statistics</h2>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Rating</th>
                            <th>Hits</th>
                        </tr>
                    </table>
                </div>
                <hr>
                <div class ="hits">
                    <h2 style="color:gray;">Total Page visits:</h2>
                    <hr>
                                        
                </div>
                <br>
                <div class ="totalspct">
                    <h2 style="color:gray;">Total Service Provider and Customer:</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class ="spcount">
                                               
                            <?php
                                $sp = "SELECT * FROM service_provider";
                                $result = $petmovetkodb->query($sp);

                                $spResult=mysqli_num_rows($result);
                                echo "<h1 style='padding-left: 250px;'>$spResult</h1>";                        
                            ?>
                            <p style="font-size: 20px; padding-left: 180px;">Service Providers</p>                                  
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ctcount">
                            
                            <?php
                                $customer = "SELECT * FROM customer";
                                $result = $petmovetkodb->query($customer);

                                $ctResult=mysqli_num_rows($result);
                                echo "<h1 style='padding-left: 230px'>$ctResult</h1>";
                            ?>
                            <p style="font-size: 20px; padding-left: 140px; float: block;">Registered Customers</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class ="hits">
                    <h2 style="color:gray;">Total Number of Services that were rendered:</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                    <div class="serv1count">
                        <?php
                            $petvet = "SELECT * FROM request JOIN services USING (servID) WHERE servName= 'Pet Vetting'";
                            $result = $petmovetkodb->query($petvet);

                            $pvResult=mysqli_num_rows($result);
                            echo "<h1 style='padding-left: 100px'>$pvResult</h1>";
                        ?>
                        <p style="font-size: 20px; padding-left: 60px; float: block;">Pet Vetting</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="serv2count">
                        <?php
                            $petwalk = "SELECT * FROM request JOIN services USING (servID) WHERE servName= 'Pet Walking'";
                            $result = $petmovetkodb->query($petwalk);

                            $pwResult=mysqli_num_rows($result);
                            echo "<h1 style='padding-left: 100px'>$pwResult</h1>";
                        ?>
                        <p style="font-size: 20px; padding-left: 60px; float: block;">Pet Walking</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="serv3count">
                        <?php
                            $petsit = "SELECT * FROM request JOIN services USING (servID) WHERE servName= 'Pet Sitting'";
                            $result = $petmovetkodb->query($petsit);

                            $psResult=mysqli_num_rows($result);
                            echo "<h1 style='padding-left: 100px'>$psResult</h1>";
                        ?>
                        <p style="font-size: 20px; padding-left: 60px; float: block;">Pet Sitting</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="serv4count">
                        <?php
                            $pettr = "SELECT * FROM request JOIN services USING (servID) WHERE servName= 'Pet Training'";
                            $result = $petmovetkodb->query($pettr);

                            $ptResult=mysqli_num_rows($result);
                            echo "<h1 style='padding-left: 100px'>$ptResult</h1>";
                        ?>
                        <p style="font-size: 20px; padding-left: 60px; float: block;">Pet Training</p>
                    </div>
                </div>
                
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bootstrap/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bootstrap/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bootstrap/vendor/raphael/raphael.min.js"></script>
    <script src="../bootstrap/vendor/morrisjs/morris.min.js"></script>
    <script src="../bootstrap/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../bootstrap/dist/js/sb-admin-2.js"></script>

</body>
</html>