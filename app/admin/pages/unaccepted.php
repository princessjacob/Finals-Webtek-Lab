<?php
    session_start();
    if ($_SESSION["loggedin"] == true && $_SESSION["username"] == "admin") {
        header("Location: dashboard.php");
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

<!-- Custom Fonts -->
<link href="../bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style>
	#login {
		border-color: #09c;
		color: #09c;
	}

	#login:hover {
		background-color: #cfc;
	}
</style>
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top hidden-xs hidden-sm">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#" style="font-family: 'Pacifico', cursive; font-size: 2.5em;"> Pet Mo, Vet Ko! </a>
        </div>
    <a href="../index.php" class="btn btn-primary navbar-btn navbar-right" style="margin-right: 2em;"> Go Back to Public Page </a>
    </div>
</nav>
<div class="container" style="margin-top:20vh">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<img class="img-responsive" src="../images/sadbunny.png" style="width:200px; margin: 0 auto;"/>
			<h2 class="text-center">Oops! Your registration hasn't been declined nor accepted yet. Please wait for further notice.</h2> 
		</div>
	</div>
</div>
</body>
</html>
