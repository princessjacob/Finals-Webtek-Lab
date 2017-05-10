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

    <title>Service Providers | Pet Mo Vet Ko!</title>

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
            <a href="../index.php" class="btn btn-primary navbar-btn navbar-right" style="margin-right: 2em;"> Go Back to Public Page </a>
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
                            <a href="#">Dashboard</a>
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
                                    <a href="statistics.html">Statistics</a>
                                </li>
                                <li>
                                    <a href="servstat.html">Service Status</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="reports.html">Complaints</a>
                        </li>
                       
                    </ul>
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
                        <h1 class="page-header">Service Providers</h1>
                    </div>
                    <ul class="nav nav-tabs">
                        <li class="active"> <a href="#info" data-toggle="tab"> Service Providers Info </a> </li>
                        <li> <a href="#spreq" data-toggle="tab"> Registration Requests </a> </li>
                        <li> <a href="#spInact" data-toggle="tab"> Inactive Service Providers </a> </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="info">
                            <?php
                                $sp="SELECT spID, spUsername, spEmail, spNum, spPet, spAdd, 
                                    spStatus, spDay, spTime  FROM service_provider WHERE spReqStatus = 'acc'";
                                if ($result=mysqli_query($petmovetkodb, $sp)) {
                                    if(mysqli_fetch_row($result) > 0) {
                                    ?>
                                        <div class="input-group custom-search-form" style="padding-top: 2em;">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                        </span>
                                        </div>
                                        <table class="table table-hover" style="margin-top: 1em;">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width: 5%;">ID</th>
                                                <th style="width: 15%;">Username</th>
                                                <th>Email</th>
                                                <th class="text-center" style="width: 12%;">Contact</th>
                                                <th class="text-center" style="width: 5%;">Cat/Dog</th>
                                                <th>Address</th>
                                                <th class="text-center" style="width: 7%;">Status</th>
                                                <th class="text-center" style="width: 5%;">Hits</th>
                                                <th class="text-center" style="width: 5%;">Rating</th>
                                            </tr>
                                        </thead>
                                    <?php
                                        while ($row=mysqli_fetch_row($result)) {
                                            if ($row[4] == "cat,dog") {
                                                $row[4] = "both";
                                            }
                                            echo "<tr>";
                                            echo "<td class='text-center'> $row[0] </td>";
                                            echo "<td> $row[1] </td>";
                                            echo "<td> $row[2] </td>";     
                                            echo "<td class='text-right'> $row[3] </td>";
                                            echo "<td class='text-center'> $row[4] </td>";
                                            echo "<td> $row[5] </td>";
                                            echo "<td class='text-center'> Null </td>";
                                            echo "<td class='text-center'> Null </td>";
                                            echo "<td class='text-center'> Null </td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<h2 class='sadface'>There are no service providers accepted yet</h2>";
                                    }
                                }
                            ?>
                            </table>
                        </div>
                        <div class="tab-pane fade in" id="spreq">
                        <?php
                            $status = "SELECT spUsername, CONCAT(spFirstName, ' ', spLastName), spEmail, spServices  FROM service_provider WHERE spReqStatus = 'pend'";
                            $i=0;
                            if ($result=mysqli_query($petmovetkodb, $status)) {
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
                                    echo "<td> $row[0] </td>";
                                    echo "<td> $row[1] </td>";
                                    echo "<td> $row[2] </td>";     
                                    echo "<td> $row[3] </td>";
                                    echo "<td class='text-center'>
                                            <form action=". htmlspecialchars($_SERVER["PHP_SELF"]) ." method='POST'>
                                            <input type='submit' name='accept' class='btn btn-success btn-circle' value='".$row[0]."'> 
                                            <i class='fa fa-check'></i> </input> </td>";
                                    echo "<td class='text-center'>
                                            <form action=". htmlspecialchars($_SERVER["PHP_SELF"]) ." method='POST'>
                                            <input type='submit' name='reject' class='btn btn-danger btn-circle' value='".$row[0]."'> 
                                            <i class='fa fa-check'></i> </input> </td>";
                                    echo "</tr>";
                                }
                            echo "</table>";
                            } else {
                                echo "<div class='sadface'> <h2> There are no requests as of now </h2> </div>";
                            }

                            if (isset($_POST['accept'])) {
                                $id = $_POST['accept'];
                                $accept = "UPDATE service_provider SET spReqStatus='acc' WHERE spUsername='$id'";
                                if ($petmovetkodb->query($accept) === TRUE) {
                                    echo "<script> window.location.replace('sp.php#spreq'); </script>";
                                } else {
                                    echo "Error updating record: " . $petmovetkodb->error;
                                }
                            }
                            if (isset($_GET['reject'])) {
                                $id = $_GET['reject'];
                                $reject = "DELETE FROM service_provider WHERE usernameID='$id' ";
                                if ($petmovetkodb->query($accept) === TRUE) {
                                    echo "<script> window.location.replace('sp.php#spreq'); </script>";
                                } else {
                                    echo "Error updating record: " . $petmovetkodb->error;
                                }
                            }

                        ?>
                        </div>
                        <div class="tab-pane fade in" id="spInact">
                        <h2> HI :D </h2>
                        </div>
                        <div id="addservice" class="addserv">

                          <!-- Modal content -->
                          <div class="addserv-content">
                            <span class="close">&times;</span>
                            <p>Some text in the Modal..</p>
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
    <script src="../bootstrap/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bootstrap/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../bootstrap/dist/js/sb-admin-2.js"></script>

</body>

</html>
