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

    <title>Services</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
                        <li> <a href="dashboard.html">HOME</a> </li>
                        <li> <a href="#">MANAGE<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li> <a href="services.html">SERVICES</a> </li>
                                <li> <a href="sp.html">SERVICE PROVIDERS</a> </li>
                                <li> <a href="ct.html">CUSTOMERS</a> </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li> <a href="tables.html">ACTIVITY</a> </li>
                        <li> <a href="forms.html">REPORTS</a> </li>
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
<div class="col-xs-4 col-md-1" style="text-align: center;">
<button type="button" class="btn btn-success btn-circle btn-lg" data-placement="top" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i></button>
</div>
<div class="col-xs-4 col-md-1" style="text-align: center;">
<button type="button" class="btn btn-warning btn-circle btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i></button>
</div>
<div class="col-xs-4 col-md-1" style="text-align: center;">
<button type="button" class="btn btn-danger btn-circle btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i></button>
</div>
</span>
</div>
</div>
<div class="row">
<div class="table-responsive">
<table class="table table-hover" style="margin-top: 20px;">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Description</th>
<th>Price</th>
<th>Icon</th>
</tr>
</thead>
    <?php
        $service="SELECT servID, servName, servDesc, servPrice, servIcon FROM service";
        if ($result=mysqli_query($petmovetkodb, $service)) {
            while ($row=mysqli_fetch_row($result)) {
                echo "<tr>";
                echo "<th> $row[0] </th>";
                echo "<th> $row[1] </th>";
                echo "<th> $row[2] </th>";
                echo "<th> $row[3] </th>";
                echo "<th> $row[4] </th>";
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

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
    <input type="file" name="servIcon" autofocus required>
</div>
<div class="form-group">
    <label> Name </label>
    <input maxlength="45" class="form-control" name="servName" autofocus required>
</div>
<div class="form-group">
    <label> Description </label>
    <textarea maxlength="250" name="servDesc" class="form-control" rows="4"></textarea>
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
<?php
    if(isset($_POST["addService"])) {
        $servName = $_POST["servName"];
        $servDesc = $_POST["servDesc"];
        $servPrice = $_POST["servPrice"];
        $servIcon = $_POST["servIcon"];

        $result = mysqli_query($petmovetkodb, "SELECT * FROM service WHERE servName = '$servName'");

        if(mysqli_num_rows($result) > 0) {
            launchWindow("Service already exists!");
        } else {
            $sql="INSERT INTO service(servName, servDesc, servPrice, servIcon) VALUES ('$servName', '$servDesc', '$servPrice', '$servIcon')";
            if ($petmovetkodb->query($sql) === TRUE) {
                echo "<meta http-equiv='refresh' content='0'>";
            } else {
                echo "Error: " . $sql . "<br>" . $petmovetkodb->error;
            }
        }
    }
?>
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
