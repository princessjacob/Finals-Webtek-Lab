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
		?>

		<h1> Care for your pets now! </h1>

		<form action="../actions/createaccount.php" method="get">
  			First Name: <input type="text" name="firstName"><br>
  			Last Name: <input type="text" name="lastName"><br>
  			Email: <input type="text" name="email"><br>
  			Password: <input type="password" name="pass"><br>
  			Configure Password: <input type="password" name="confpass"><br>
  			House Address: <input type="text" name="address"><br>
  			<!--
  			Barangay:
  			<select name="barangay">
  				<option value="" selected> Choose Barangay </option>
  				<option value="Aurora Hill"> Aurora Hill </option>
  				<option value="Camp 7"> Camp 7 </option>
  				<option value="Quezon Hill"> Quezon Hill </option>
  			</select><br>
  			-->
  			<input class="create-account" type="submit" value="Create Account">
		</form>

		

    </body>
</html>
