<?php
  session_start();
?>

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
		  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
  		  <input type="text" name="email-signin" value="Email"
          onblur="if (this.value=='') {this.value='Email';}" 
          onfocus="if (this.value == 'Email') {this.value='';}">
        <input type="password" name="pass-signin" value="Password"
          onblur="if (this.value=='') {this.value='Password';}" 
          onfocus="if (this.value == 'Password') {this.value='';}">
  			 <input class="login-button" type="submit" name="loginbutton" value="Login">
		  </form>
		</header>

    <!-- LOGIN ACTION -->

    <?php
      if(isset($_POST["loginbutton"])) {
        $emailsignin = $_POST["email-signin"];
        $passsignin = $_POST["pass-signin"];

        $result = mysqli_query($conn, "SELECT * FROM customers WHERE Email = '$emailsignin' AND Password = '$passsignin'");

        $resultSP = mysqli_query($conn, "SELECT * FROM service_providers WHERE Email = '$emailsignin' AND Password = $passsignin ");

        if(mysqli_num_rows($result) > 0) {
          $_SESSION['loggedin'] = true;
          $_SESSION['user'] = $emailsignin;
          header("Location: pages/customers.php");
        } else if (mysqli_num_rows($resultSP) > 0) {
          $_SESSION['loggedin'] = true;
          $_SESSION['user'] = $emailsignin;
          header("Location: pages/serviceproviders.php");
        } else if ($emailsignin == "admin" && $passsignin == "finalswebteklab") {
          $_SESSION['loggedin'] = true;
          $_SESSION['user'] = "admin";
          header("Location: bootstrap/pages/dashboard.html");
        } else {
          echo "Incorrect/Unregistered email or password!";
          mysqli_free_result($result);
        }
      }
    ?>

    <!-- END OF LOGIN ACTION -->

    <hr>

		<h1> Welcome to Pet Mo, Vet Ko! </h1>
		<h2> Care for your pets now! </h2>
		<div> <p> With professionals always in the work, you never have to worry about the circumstance of your pet.</p></div>

    <hr>

	  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
      <h3> Name </h3>
 			<input type="text" name="firstName" value="First Name"
        onblur="if (this.value=='') {this.value='First Name';}" 
        onfocus="if (this.value == 'First Name') {this.value='';}">
			<input type="text" name="lastName" value="Last Name"
        onblur="if (this.value=='') {this.value='Last Name';}" 
        onfocus="if (this.value == 'Last Name') {this.value='';}"><br>
      Email: <input type="text" name="email"><br>
      Password: <input type="password" name="pass"><br>
      <h3> Contact </h3>
      Contact Number: <input type="text" name="contactno"><br>
      Street Address: <input type="text" name="streetadd"><br>
 			Barangay: <input type="text" name="barangay"><br>
      City/Province: <input type="text" name="cityprovince"><br>
      Region: <input type="text" name="region"><br>
      Country: <input type="text" name="country"><br>
			<input class="create-account" type="submit" name="customerregister" value="Create Account"><br>
    </form>


    <!-- SIGN UP ACTION -->
    
    <?php
      if(isset($_POST["customerregister"])) {

        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $streetadd = $_POST["streetadd"];
        $barangay = $_POST["barangay"];
        $region = $_POST["region"];
        $cityprovince = $_POST["cityprovince"];
        $country = $_POST["country"];
        $contactno = $_POST["contactno"];

        if (empty($firstName) || empty($lastName) || empty($email) || empty($pass) || empty($streetadd) || empty($barangay) || empty($cityprovince) ||  empty($region) || empty($country) || empty($contactno)) {

          echo "Please fill up all the parts of the form";

        } else if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) {
          echo "The email you have entered is invalid, please try again.";
        } else {
          $result = mysqli_query($conn, "SELECT * FROM customers WHERE Email = '$email'");

          if(mysqli_num_rows($result) > 0) {
            print "Account already exists!";
            mysqli_free_result($result);
          } else {
            $sql = "INSERT INTO Customers (LastName, FirstName, Email, Password, StreetAdd, Barangay, CityProvince, Region, Country, ContactNo) VALUES ('$lastName', '$firstName', '$email', '$pass', '$homeadd', '$streetadd', '$cityprovince', '$region', '$country', '$contactno')";

            if ($conn->query($sql) === TRUE) {
              $_SESSION['loggedin'] = true;
              $_SESSION['user'] = $email;
              header("Location: pages/accountcreated.php");

            } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
            }
          }
        }
      }   
    ?>

    <!-- End of SIGN UP ACTION -->

    <br>

    <a href="pages/register.php">I am a Service Provider</a>
  </body>
</html>
