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

<?php
    $petmovetkodb = new mysqli("localhost", "root", "", "petmovetko");
    // Check connection
    if ($petmovetkodb->connect_error) {
        die("Connection failed: " . $petmovetkodb->connect_error);
    }
?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bootstrap/vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="../bootstrap/dist/css/admin.css" rel="stylesheet">

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

    <div id="wrapper">
       <nav class="navbar navbar-default navbar-fixed-top hidden-xs hidden-sm">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#" style="font-family: 'Pacifico', cursive; font-size: 2.5em;"> Pet Mo, Vet Ko! </a>
                </div>
            </div>
        </nav>

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
                                    $row = $result->num_rows;
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
                            <input type="submit" name="Logout" value="Logout" class="btn btn-default">
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
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">COMPLAINTS</h1>
                    </div>

                    <?php
                        $complaints="SELECT compID, compMessage, compDate, spUsername, CONCAT(custFirstName, ' ', custLastName), complainer, spID, custID
                            FROM complaints JOIN service_provider USING(spID) JOIN customer USING(custID) WHERE compStatus = 'unresolved'";
                        if ($result=mysqli_query($petmovetkodb, $complaints)) {
                            if(mysqli_num_rows($result) > 0) {
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
                                        <th class="text-center" style="width: 10%;">ID</th>
                                        <th>Complainant</th>
                                        <th>Complainee</th>
                                        <th class="text-center">Issue</th>
                                        <th class="text-center">Date Submitted</th>
                                        <th class="text-center" style="width: 10%;">Ignore</th>
                                        <th class="text-center" style="width: 10%;">Ban Complainee</th>
                                    </tr>
                                </thead>
                                <?php
                                while ($row=mysqli_fetch_row($result)) {
                                    if ($row[5] == "sp") {
                                        $complainer = $row[3];
                                        $complainant = $row[4];
                                        $complainee = $row[7];

                                    } else {
                                        $complainer = $row[4];
                                        $complainant = $row[3];                                   
                                        $complainee = $row[6];
                                    }
                                    echo "<tr>";
                                    echo "<td class='text-center'> $row[0] </td>";
                                    echo "<td> $complainer </td>";
                                    echo "<td> $complainant </td>";     
                                    echo "<td> $row[1] </td>";
                                    echo "<td class='text-center'> $row[2] </td>";
                                    echo "<td class='text-center'>
                                            <form action=". htmlspecialchars($_SERVER["PHP_SELF"]) ." method='POST'>
                                            <input type='hidden' name='ignoreID' value='$row[0]'>
                                            <input type='submit' name='ignore' class='btn btn-default btn-circle' value='x'> 
                                            </form> </td>";
                                    echo "<td class='text-center'>
                                            <form action=". htmlspecialchars($_SERVER["PHP_SELF"]) ." method='POST'>
                                            <input type='hidden' name='banType' value='$row[5]'/>
                                            <input type='hidden' name='banStat' value='$row[0]'/>
                                            <input type='hidden' name='banID' value='$complainee'/>
                                            <input type='submit' name='ban' class='btn btn-danger btn-circle' value='-'/> 
                                            </form> </td>";
                                    echo "</tr>";
                                }
                                echo "</table>";

                            } else {
                                echo "<div style='margin-top:20vh;'>";
                                echo "<img src='../images/happycat.png' class='img-responsive img-circle' style='width: 200px; margin: 0 auto;'>";
                                echo "<h3 class='text-center'> There are no Complaints yets. </h2>";
                                echo "</div>";
                            }
                        }

                        if (isset($_POST['ignore'])) {
                            $id = $_POST['ignoreID'];
                            $ignore = "UPDATE complaints SET compStatus='resolved' WHERE compID='$id' ";
                            mysqli_query($petmovetkodb, $ignore);
                            
                        }

                        if (isset($_POST['ban'])) {
                            $type = $_POST['banType'];
                            $stat = $_POST['banStat'];
                            $id = $_POST['banID'];
                            if ($type="sp") {
                                $ban = "UPDATE service_provider SET spStatus='ban' WHERE spID='$id'";
                                $petmovetkodb->query($ban);
                            } else {
                                $ban = "UPDATE customer SET custStatus='ban' WHERE custID='$id' ";
                                $petmovetkodb->query($ban);
                            }
                            $banStatus = "UPDATE complaints SET compStatus='resolved' WHERE compID ='$stat' ";
                            mysqli_query($petmovetkodb, $banStatus);
                        }
                    ?>
                    
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <div class="container">

  <div class="modal fade" id="Modal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">CN01</h4>
        </div>
        <div class="modal-body">
        <form>
          <p>Complainant: <input type="text" name="reported" value="SP01" disabled></p>
          <p>Complainee: <input type="text" name="repby" value="C01" disabled></p>
          <p>Complaint:</p> <textarea rows="4" cols="50" disabled>I am Froot</textarea>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<div class="container">

  <div class="modal fade" id="Modal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">CN01</h4>
        </div>
        <div class="modal-body">
        <form>
          <p>Recipient: <input type="text" name="recipient" value="" ></p>
          <p>Message:</p> <textarea rows="4" cols="50"></textarea>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Send</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<div class="container">

  <div class="modal fade" id="Modal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">CN01</h4>
        </div>
        <div class="modal-body">
        <form>
          <p>Are you sure you want to ban this user?</p>
           &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; <button type="button" class="btn btn-success" data-dismiss="modal">Yes</button> &nbsp; &nbsp; &nbsp; <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
