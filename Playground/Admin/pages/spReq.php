<?php
session_start();
if ($_SESSION['loggedin'] == false ) {
    header('Location: login.php');
} else if (!$_SESSION['username'] == "admin") {
    header('Location: restricted.php');}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Service Providers | Pet Mo Vet Ko!</title>

    <link href="../bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    
    <link href="../bootstrap/dist/css/admin.css" rel="stylesheet">
    <link href="../bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bootstrap/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

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
            </div>
        </nav>

        <!-- Navigation side -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" >
            <div class="navbar-header">
                <a class="navbar-brand" href="dashboard.html">Pet Mo, Vet Ko!</a>
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
                            <a href="complaints.php">Complaints</a>
                        </li>
                       
                    </ul>
                   <li>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <input type="submit" name="Logout" value="Logout" class="btn btn-default">
                            </form>

                            <?php
                                if(isset($_POST['Logout'])) {
                                    $_SESSION['loggedin'] = false;
                                    echo "<script> window.location.href='../index.php' </script>";
                                } 
                            ?>
                        </li>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">Registration Requests</h1>
                    </div>
                    <div class="col-lg-12">
                        <?php
                            $status = "SELECT spID, spUsername, CONCAT(spFirstName, ' ', spLastName), spEmail, spServices  FROM service_provider WHERE spReqStatus = 'pend'";
                            $i=0;
                            if ($result=mysqli_query($petmovetkodb, $status)) {
                                if(mysqli_num_rows($result) > 0) {
                        ?>
                            <table class="table table-hover" style="margin-top: 1em;">
                            <thead>
                            <tr>
                            <th> Username </th>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Service </th>
                            <th> Accept </th>
                            <th> Reject </th>
                            </tr>
                            </thead>
                        <?php 
                                while ($row=mysqli_fetch_row($result)) {
                                    echo "<tr>";
                                    echo "<td> $row[1] </td>";
                                    echo "<td> $row[2] </td>";
                                    echo "<td> $row[3] </td>";     
                                    echo "<td> $row[4] </td>";
                                    echo "<td class='text-center'>
                                            <form action=". htmlspecialchars($_SERVER["PHP_SELF"]) ." method='POST'>
                                            <input type='submit' name='accept' class='btn btn-success btn-circle' value='$row[0]'> 
                                            <i class='fa fa-check'></i></input> </td>";
                                    echo "<td class='text-center'>
                                            <form action=". htmlspecialchars($_SERVER["PHP_SELF"]) ." method='POST'>
                                            <input type='submit' name='reject' class='btn btn-danger btn-circle value='$row[0]'> 
                                            <i class='fa fa-times'></i> </input> </td>";
                                    echo "</tr>";
                                }
                            echo "</table>";
                            } else {
                                echo "<div style='margin-top:20vh;'>";
                                echo "<img src='../images/sadbunny.png' class='img-responsive img-circle' style='width: 200px; margin: 0 auto;'>";
                                echo "<h3 class='text-center'> There are no Registration Requests yets. </h2>";
                                echo "</div>";
                            }

                            if (isset($_POST['accept'])) {
                                $id = $_POST['accept'];
                                $accept = "UPDATE service_provider SET spReqStatus='acc' WHERE spID='$id'";
                                $petmovetkodb->query($accept);
                                echo "<script> location.reload(); </script>";
                            }
                            if (isset($_POST['reject'])) {
                                $id = $_POST['reject'];
                                $reject = "DELETE FROM service_provider WHERE spID='$id' ";
                                $petmovetkodb->query($reject);
                                echo "<script> location.reload(); </script>";
                            }
                        }
                        ?>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
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

    <!-- Custom Theme JavaScript -->
    <script src="../bootstrap/dist/js/sb-admin-2.js"></script>

</body>

</html>
