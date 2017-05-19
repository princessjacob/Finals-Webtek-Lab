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

    <title>Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

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
                        <a href="complaints.php">Complaints</a>
                    </li>
                    
                   
                
                <li>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <i class="fa fa-sign-out" style="margin-left: 1em;"> </i>
                            <input type="submit" name="Logout" value="Logout" class="btn btn-link" style="text-decoration: none;">
                            </form>

                            <?php
                                if(isset($_POST['Logout'])) {
                                    $_SESSION['loggedin'] = false;
                                    echo "<script> window.location.href='../index.php' </script>";
                                } 
                            ?>
                        </li>
                    </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

<<<<<<< .mine
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="panel-body">
                    <div class = col-lg-12>                    
                    <h2 class="text-center" style="font-family: Comfortaa; font-weight: bold; font-size: 35px;">Service Providers</h2>
                    <?php
                        $rank="SELECT spID, CONCAT(spFirstName, ' ', spLastName), spLastLogged, spStatus, spServices FROM service_provider";
                        if ($result=mysqli_query($petmovetkodb, $rank)) {
                            if(mysqli_num_rows($result) > 0) {
                            ?>
                                <table class="table table-hover" style="margin-top: 1em;">
                                <thead>
                                <tr>
                                <th class="text-center" style="width: 20%;">ID</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Last Log</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Services</th>
                                </tr>
                                </thead>
                                <?php

                                while ($row=mysqli_fetch_row($result)) {
                                    echo "<tr>";
                                    echo "<td class='text-center'> $row[0] </td>";
                                    echo "<td class='text-center'> $row[1] </td>";
                                    echo "<td class='text-center'>$row[2]</td>";
                                    echo "<td class='text-center'>$row[3]</td>";
                                    echo "<td class='text-center'>$row[4]</td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            } else {
                                echo "<h3 class='text-center'> There are no Service Providers yet. </h3>";
                            }
                        }
                    ?>
                    </div>
                    
                    
                </div>
                <div class="row">
                    <div class="panel-body">
                    <div class = col-lg-12> 
                    <h2 class="text-center" style="font-family: Comfortaa; font-weight: bold; font-size: 35px;">Customers</h2>
                    <?php
                        $rank="SELECT custID, CONCAT(custFirstName, ' ' , custLastName), custEmail, custAdd, custZip, custNum, custAbout FROM customer";
                        if ($result=mysqli_query($petmovetkodb, $rank)) {
                            if(mysqli_num_rows($result) > 0) {
                                
                            ?>
                                <table class="table table-hover" style="margin-top: 1em;">
                                <thead>
                                <tr>
                                <th class="text-center" style="width: 20%;">ID</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Address</th>
                                <th class="text-center">ZipCode</th>
                                </tr>
                                </thead>
                                <?php
                                while ($row=mysqli_fetch_row($result)) {
                                    echo "<tr>";
                                    echo "<td class='text-center'> $row[0] </td>";
                                    echo "<td class='text-center'> $row[1] </td>";
                                    echo "<td class='text-center'>$row[2]</td>";
                                    echo "<td class='text-center'>$row[3]</td>";
                                    echo "<td class='text-center'>$row[4]</td>";
                                    echo "</tr>";
                                    
                                }
                                echo "</table>";
                            } else {
                                echo "<h3 class='text-center'> There are no Customers yet. </h3>";
                            }
                        }
                    ?>
                    </div>
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
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
