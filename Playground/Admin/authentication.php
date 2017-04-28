<!DOCTYPE html>
<html>
	<body>
		<?php
    		$customers = "SELECT custname, password FROM customers";
    		$result = mysql_query($accounts);
    		if ($result) {
    			echo '<script> window.location.href="../pages/dashboard.php" </script>';
    		} else {
    			print "code success!";
    		}
		?>
	</body>
</html>