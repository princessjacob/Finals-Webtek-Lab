<!DOCTYPE html>
<html>
	<head>
		<title> Register | Pet Mo, Vet Ko </title>
	</head>
	<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "petmovetko";
		$petmovetkodb = new mysqli("localhost", "root", "", "petmovetko");
		$worlddb = new mysqli("localhost", "root", "", "world");
		//Check connection
		if ($petmovetkodb->connect_error) {
   			die("Connection failed: " . $petmovetkodb->connect_error);
		}
		if ($worlddb->connect_error) {
   			die("Connection failed: " . $worlddb->connect_error);
		}
	?>

	<script>
		$(document).ready(function()){
			$('#')
		}
	</script>
	<h1> Greetings, Service Provider! </h1>
	<h2> Fill out the form to register your service </h2>
	<form action="register.php" method="POST">
		<h3> Contact Information </h3>
    	<span style="font-weight: bold; font-size: 20;"> Name </span> 
    	<input type="text" name="firstName" value="First Name"
        	onblur="if (this.value=='') {this.value='First Name';}" 
        	onfocus="if (this.value == 'First Name') {this.value='';}" required>
		<input type="text" name="lastName" value="Last Name"
        	onblur="if (this.value=='') {this.value='Last Name';}" 
        	onfocus="if (this.value == 'Last Name') {this.value='';}" required><br>
        <span style="font-weight: bold; font-size: 20;"> Title </span>
        <input type="text" name="firstName" required> <br>
        <span style="font-weight: bold; font-size: 20;"> Email </span>
        <input type="text" name="email" required><br>
        <span style="font-weight: bold; font-size: 20;"> Password </span>
     	<input type="password" name="pass" required><br>
     	<span style="font-weight: bold; font-size: 20;"> Contact No </span>
     	<input type="text" name="contactno" required><br>
     	<span style="font-weight: bold; font-size: 20;"> Address </span>
     	<select name="country" id="country" required>
        	<option value="" hidden>Country</option>
        	<?php
        		$countryoption = mysqli_query($worlddb,"SELECT Name FROM country");
        		while($row=mysqli_fetch_array($countryoption,MYSQLI_ASSOC)) {
        			$countryname = $row['Name'];
        			echo "<option value='$countryname'> $countryname </option>";
        		}
        	?>
		</select><br>
		<input type="text" name="region" value="Region"
     		onblur="if (this.value=='') {this.value='Region';}" 
        	onfocus="if (this.value == 'Region') {this.value='';}" required>
		<input type="text" name="cityprovince" value="City/Province"
     		onblur="if (this.value=='') {this.value='City/Province';}" 
        	onfocus="if (this.value == 'City/Province') {this.value='';}" required>
     	<input type="text" name="barangay" value="Barangay"
     		onblur="if (this.value=='') {this.value='Barangay';}" 
        	onfocus="if (this.value == 'Barangay') {this.value='';}" required><br>
		
		<h3> Service Information </h3>
		<span style="font-weight: bold; font-size: 20;"> I can care for: </span>
		<input type="checkbox" name="petType" value="cat"> Cats
		<input type="checkbox" name="petType" value="dog"> Dogs <br>
		Services:
		<select name="services">
		</select>
		
		<br>
		<input type="submit" name="spregister" 	value="Register"><br>
    </form>
    <!-- REGISTRATION ACTION -->
    
    <?php
      if(isset($_POST["spregister"])) {
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $title = $_POST["title"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
	      $pass = md5($pass);
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
            $sql = "INSERT INTO Customers (LastName, FirstName, Email, Password, StreetAdd, Barangay, CityProvince, Region, Country, ContactNo) VALUES ('$lastName', '$firstName', '$email', '$pass', '$streetadd', '$barangay', '$cityprovince', '$region', '$country', '$contactno')";
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
    </body>
</html>