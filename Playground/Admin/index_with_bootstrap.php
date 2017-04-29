<!DOCTYPE HTML>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pet Mo, Vet Ko!</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bootstrap/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="bootstrap/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
    <body>
    	<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "petmovetko";

			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
			} 
		?>

    <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Pet Mo, Vet Ko! Log In</h3>
              </div>
              <div class="panel-body">
                <form role="form" action="actions\authentication.php" method="get">
                  <fieldset>
                  <div class="form-group">
                    <input class="form-control" placeholder="Username/Email" name="email" type="username" autofocus>
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">
                  </div>
                  <a href = "forgot.html" name = "forgot">Forgot Password</a>
                     <!-- Change this to a button or input when using this as a form -->
                  <a href="dashboard.html" class="btn btn-lg btn-success btn-block">Login</a>
                  <a href="register.html" class="btn btn-lg btn-success btn-block">Register</a>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!--
    <hr>

		<h1> Welcome to Pet Mo, Vet Ko! </h1>
		<h2> Care for your pets now! </h2>
		<div> <p> With professionals always in the work, you never have to worry about the circumstance of your pet.</p></div>


    <hr>

    <div id="sign-up-form">
		  <form action="actions/createaccount.php" method="get">
        <h3> Name </h3>
  			<input type="text" name="firstName" value="First Name"
          onblur="if (this.value=='') {this.value='First Name';}" 
          onfocus="if (this.value == 'First Name') {this.value='';}">
  			<input type="text" name="lastName" value="Last Name"
          onblur="if (this.value=='') {this.value='Last Name';}" 
          onfocus="if (this.value == 'Last Name') {this.value='';}"><br>
        <h3> Contact </h3>
        Contact Number: <input type="text" name="contactno"><br>
  			Email: <input type="text" name="email"><br>
  			Password: <input type="password" name="pass"><br>
        Home Address: <input type="text" name="homeadd"><br>
  			Street Address: <input type="text" name="streetadd"><br>
        City/Province: <input type="text" name="cityprovince"><br>
        Region: <input type="text" name="region"><br>
        Country: <input type="text" name="country"><br>
  			<input class="create-account" type="submit" value="Create Account"><br>
        <a href="pages/register.php">I am a Service Provider</a>
		  </form>
    </div>
    -->

    <!-- jQuery -->
    <script src="bootstrap/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bootstrap/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="bootstrap/dist/js/sb-admin-2.js"></script>

    </body>
</html>
