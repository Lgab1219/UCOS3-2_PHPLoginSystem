<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php session_start(); 

    // Checks to see if this boolean variable from handleForm.php is set to true or false.
    // If you logged in twice, this boolean will turn true, showing the message.
    $showLoginMessage = isset($_SESSION['showLoginMessage']) ? $_SESSION['showLoginMessage'] : false;


    ?>

	<h2>
		User logged in:
		<?php
		if(isset($_SESSION['firstName'])) {
			echo $_SESSION['firstName'];
		}
		?>		
	</h2>

	<h2>
		User password:
		<?php
		if(isset($_SESSION['password'])) {
			echo $_SESSION['password'];
		}
		?>
        
        <br><br>

        <?php 
            // Check if an account is logged in, then show a message below
           if ($showLoginMessage) {
            echo $_SESSION['firstName'], ' is already logged in. Wait for the user to logout first.';
           }
        ?>
	</h2>
	<button><a href="unset.php" style="text-decoration: none; color: black;">Logout</a></button>

	<form action="handleForm.php" method="POST">
		<p><input type="text" placeholder="First name here" name="firstName"></p>
		<p><input type="password" placeholder="Password here" name="password"></p>
		<p><input type="submit" value="Submit" name="submitBtn"></p>
	</form>
</body>
</html>