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

<!-- Custom Fonts -->
<link href="../bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container" style="margin-top:15vh">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4">
			<p class="text-center"><a href="../index.php" style="font-family: 'Pacifico', cursive; font-size: 2.5em; color: black; text-decoration: none;"> Pet Mo, Vet Ko! </a><p>
			<img class="img-responsive" src="../images/angrycat.png" style="width:200px; margin: 0 auto;"/>
			<div class="panel panel-danger">
				<div class="panel-heading">
					<h4 class="text-center"> RESTRICTED ACCESS! </h4>
				</div>
				<div class="panel-body">
					<p class="text-center" style="font-size: 1.2em;"> Only authorized personal are allowed in this area. Please return to your page. </p>
					<p class="text-center"><a id="login" class="btn btn-large btn-danger btn-outline" href="javascript:history.go(-1)"> <i class="fa fa-undo"> </i> Return</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
