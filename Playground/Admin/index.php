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
  		  <input type="text" name="name" value="Email"
          onblur="if (this.value=='') {this.value='Email';}" 
          onfocus="if (this.value == 'Email') {this.value='';}">
        <input type="text" name="name" value="Password"
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

    <!--Delete hr after putting css-->
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
        Contact Number: <input type="text" name="address"><br>
  			Email: <input type="text" name="email"><br>
  			Password: <input type="password" name="pass"><br>
  			Street Address: <input type="text" name="address"><br>
        City/Province: <input type="text" name="address"><br>
        Region: <input type="text" name="address"><br>
        Country: <input type="text" name="address"><br>
  			<input class="create-account" type="submit" value="Create Account"><br>
        <a href="pages/register.php">I am a Service Provider</a>
		  </form>
    </div>


    </body>
</html>
