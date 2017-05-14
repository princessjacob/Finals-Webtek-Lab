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

    <style>
    @media(max-width: 767px) {
        #hider {
            display: none;
        }
        .buttons {
            margin-bottom: 10px;
        }
    }
    .selected {
        background-color: blue;
        color: white;
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
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0" >
            <div class="navbar-header">
                <a class="navbar-brand" href="dashboard.html">Pet Mo, Vet Ko!</a>
            </div>
            <!-- /.navbar-header -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li> <a href="dashboard.php">HOME</a> </li>
                        <li> <a href="#">MANAGE<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="services.php">SERVICES</a> </li>
                                <li> <a href="sp.php">SERVICE PROVIDERS</a> </li>
                                <li> <a href="ct.php">CUSTOMERS</a> </li>
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
<h1 class="page-header">Services&nbsp;</h1>
</div>
<div class="row">
<div class="col-md-9">
</div>
<span class="buttons">
<div class="col-xs-2 col-md-1" style="text-align: center;">
<button type="button" class="btn btn-success btn-circle btn-lg" data-placement="top" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></button>
</div>
<div class="col-xs-2 col-md-1" style="text-align: center;">
<button type="button" class="btn btn-warning btn-circle btn-lg" data-toggle="modal" data-target="#editService"><i class="fa fa-pencil"></i></button>
</div>
<div class="col-xs-2 col-md-1" style="text-align: center;">
<button type="button" class="btn btn-danger btn-circle btn-lg" data-toggle="modal" data-target="#deleteService"><i class="fa fa-trash-o"></i></button>
</div>
</span>
</div>
</div>
<div class="row">
<div class="table-responsive">
<table id="tableID" class="table table-hover" style="margin-top: 20px;">
<thead>
<tr>
<th class="text-center" style="width:10%;">Select</th>
<th class="text-center" style="width:15%;">ID</th>
<th>Name</th>
<th class="text-center" style="width:10%;">Price</th>
<th class="text-center" style="width:15%;">Icon</th>
</tr>
</thead>
    <?php
        $service="SELECT servID, servName, servPrice, servImage FROM services";
        if ($result=mysqli_query($petmovetkodb, $service)) {
            while ($row=mysqli_fetch_row($result)) {
                echo "<tr>";
                echo "<td class='text-center'> <input type='radio' value='$row[0]' name='radiobutton'> </td>";
                echo "<td class='text-center'> $row[0] </td>";
                echo "<td> $row[1] </td>";
                echo "<td class='text-center'> $row[2].00 </td>";
                echo "<td class='text-center'> <a href='images/$row[0]-image.jpg'> view icon </a> </td>";
                echo "</tr>";
            }
        }
    ?>
</table>
</div>
<!-- /.table-responsive -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<?php
    if(isset($_POST["addService"])) {
        $servName = $_POST["servName"];
        $servPrice = $_POST["servPrice"];
        $servImage = $_FILES["servImage"];

        $imagetmp = addslashes(file_get_contents($servImage));

        $result = mysqli_query($petmovetkodb, "SELECT * FROM services WHERE servName = '$servName'");

        if(mysqli_num_rows($result) > 0) {
            echo "service already exists!";
        } else {
            $sql="INSERT INTO services(servName, servPrice, servImage) VALUES ('$servName', '$servPrice', '$servImage')";
            if ($petmovetkodb->query($sql) === TRUE) {
                $image = file_get_contents($servImage);
                file_put_contents('../images/$servImage', $image);
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo "Error: " . $sql . "<br>" . $petmovetkodb->error;
            }
        }
    }
?>
<!-- Modal Add -->
<div class="modal fade" name="editModal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="myModalLabel">Add Service</h4>
</div>
<form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" style="margin-top: 15px;">
<fieldset>
<div class="modal-body">
<div class="form-group">
    <label> Add Image </label>
    <input type="file" name="servImage" autofocus required>
</div>
<div class="form-group">
    <label> Name </label>
    <input maxlength="45" class="form-control" name="servName" autofocus required>
</div>
<div class="form-group input-group">
    <span class="input-group-addon" style="background: white; font-weight: bold; color: black; border: none;">Price </span>
    <span class="input-group-addon">Php</span>
    <input maxlength="20" type="number" class="form-control" name="servPrice">
    <span class="input-group-addon">.00</span>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
<input class="btn btn-success" type="submit" name="addService" value="Add Service">
</div>
</fieldset>
</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<?php
    if (isset($_POST["editModal"])) {
        if(isset($_POST["radiobutton"])) {
            $servID = $_POST["radiobutton"];
            $result = mysqli_query($petmovetkodb, "SELECT * FROM services WHERE servID = '$servID'");
            if(mysqli_num_rows($result) > 0) {
                $servName = $_POST["servName"];
                $servPrice = $_POST["servPrice"];
                $servImage = $_FILES["servImage"];
            }
        } else {
        echo "<script> alert('Invalid!'); </script>"; 
        }
    }

    if(isset($_POST["editService"])) {
        $sql="UPDATE services SET servName='$servName', servPrice='$servPrice', servImage='servImage' WHERE servID='$servID'";
        if ($petmovetkodb->query($sql) === TRUE) {
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo "Error: " . $sql . "<br>" . $petmovetkodb->error;
        }

        
    }
?>


<!-- Modal Edit -->
<div class="modal fade" id="editService" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title" id="editModalLabel">Edit Service</h4>
</div>
<form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" style="margin-top: 15px;">
<fieldset>
<div class="modal-body">
<div class="form-group">
    <label> Change Image </label>
    <input type="file" name="servImage" autofocus required>
</div>
<div class="form-group">
    <label> Name </label>
    <input maxlength="45" class="form-control" name="servName" value="<?php $servName; ?>" autofocus required>
</div>
<div class="form-group input-group">
    <span class="input-group-addon" style="background: white; font-weight: bold; color: black; border: none;">Price </span>
    <span class="input-group-addon">Php</span>
    <input maxlength="20" type="number" class="form-control" name="servPrice" value="<?php $servPrice; ?>">
    <span class="input-group-addon">.00</span>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
<input class="btn btn-success" type="submit" name="editService" value="Save">
</div>
</fieldset>
</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

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
