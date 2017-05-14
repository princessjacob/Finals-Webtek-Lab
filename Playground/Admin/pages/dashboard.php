<?php
session_start();
if ($_SESSION['loggedin'] == false ) {
    header('Location: login.php');
} else if (!$_SESSION['username'] == "admin") {
    header('Location: restricted.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="col-lg-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="text-center">TOP 10 SERVICE PROVIDERS</h2>
                    </div>
                    <div class="panel-body">
                    <div class = "stat">                    
                    <?php
                        $rank="SELECT spUsername, COUNT(trans_ID) FROM service_provider JOIN request USING(spID) JOIN transaction USING(reqID) GROUP BY spID ORDER BY 2 DESC LIMIT 10";
                        if ($result=mysqli_query($petmovetkodb, $rank)) {
                            if(mysqli_num_rows($result) > 0) {
                                $i = 1;
                            ?>
                                <table class="table table-hover" style="margin-top: 1em;">
                                <thead>
                                <tr>
                                <th class="text-center" style="width: 20%;">Rank</th>
                                <th class="text-center">Username</th>
                                <th class="text-center">Hits</th>
                                </tr>
                                </thead>
                                <?php

                                while ($row=mysqli_fetch_row($result)) {
                                    echo "<tr>";
                                    echo "<td class='text-center'> $i </td>";
                                    echo "<td class='text-center'> $row[0] </td>";
                                    echo "<td class='text-center'>$row[1]</td>";
                                    echo "</tr>";
                                    $i++;
                                }
                                echo "</table>";
                            } else {
                                echo "<h3 class='text-center'> There are no Service Providers yet. </h3>";
                            }
                        }
                    ?>
                    </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-4">
                <div class="panel panel-default">
                <div class="panel-heading">
                <h2 class="text-center" style="color:gray;">Total Page visits:
                    </h2>
                </div>
                <div class="panel-body">
                <div class ="hits">
                    <?php
                        $counter = ("../lib/counter.txt");
                        $hits = file($counter); 
                        echo "<h2 class='text-center' style='color: black';>" . $hits[0] . " Hits! </h2>";
                    ?>
                </div>
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-12">
                <br>
                <div class ="spct">
                    <p style="font-size: 30px; padding-left: 100px;">Service Providers
                    <span style="padding-left: 200px;">Registered Customers</span></p>

                </div>
                </div>
            </idv>
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