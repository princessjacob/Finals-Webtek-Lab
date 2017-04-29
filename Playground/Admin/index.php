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

		<header>
		  <form action="actions\authentication.php" method="get">
  		  <input type="text" name="email-signin" value="Email"
          onblur="if (this.value=='') {this.value='Email';}" 
          onfocus="if (this.value == 'Email') {this.value='';}">
        <input type="text" name="pass-signin" value="Password"
          onblur="if (this.value=='') {this.value='Password';}" 
          onfocus="if (this.value == 'Password') {this.value='';}">
  			 <input class="login-button" type="submit" value="Login">
		  </form>
		</header>

    <!--Delete hr after putting css-->
    <hr>

		<h1> Welcome to Pet Mo, Vet Ko! </h1>
		<h2> Care for your pets now! </h2>
		<div> <p> With professionals always in the work, you never have to worry about the circumstance of your pet.</p></div>

    <hr>

	  <form action="<?php $PHP_SELF; ?>" method="POST">
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
			<input class="create-account" type="submit" name="customerregister" value="Create Account"><br>
    </form>


    <!-- PHP SCRIPT for FORM -->
    
    <?php
      if(isset($_POST["customerregister"])) {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $homeadd = $_POST["homeadd"];
        $pass = $_POST["pass"];
        $streetadd = $_POST["streetadd"];
        $cityprovince = $_POST["cityprovince"];
        $region = $_POST["region"];
        $country = $_POST["country"];
        $contactno = $_POST["contactno"];

        $result = mysqli_query($conn, "SELECT * FROM customers WHERE Email = '$email'");



        if(mysqli_num_rows($result) > 0) {
          print "Account already exists!";
          mysqli_free_result($result);
        } else {
          $sql = "INSERT INTO Customers (LastName, FirstName, Email, Password, HomeAdd, StreetAdd, CityProvince, Region, Country, ContactNo) VALUES ('$lastName', '$firstName', '$email', '$pass', '$homeadd', '$streetadd', '$cityprovince', '$region', '$country', '$contactno')";

          if ($conn->query($sql) === TRUE) {
            mysqli_free_result($result);
            header("pages/admindashboard.php");

          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        }
      }   
    ?>

    <br>

    <a href="pages/register.php">I am a Service Provider</a>
  </body>
</html>
