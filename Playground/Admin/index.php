<!DOCTYPE HTML>
<html>
    <head>
        <title>Pet Mo, Vet Ko!</title>
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
			echo "Connected successfully";
		?>

        <h1> Welcome to Pet Mo, Vet Ko! </h1>
		<form action="actions\authentication.php" method="get">
  			Email: <input type="text" name="name"><br>
  			Password: <input type="password" name="pass"><br>
  			<input class="login-button" type="submit" value="Login">
		</form>
			<input class="signup-button" type="submit" value="Create Account" onclick="window.location='/pages/signup';">
    </body>
</html>
