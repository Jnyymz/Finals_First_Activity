<?php  
require_once 'core/models.php'; 
require_once 'core/handleForms.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b3d9ff; /* Light blue background */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background-color: #fbe7c6; /* Light yellow background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 350px;
        }

        form {
            background-color: #FFF6E9;
            padding: 20px;
            border-radius: 10px;
            display: grid;
            grid-template-columns: auto 1fr;
            gap: 10px 15px;
            align-items: center; 
        }

        label {
            font-size: 14px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"] {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%; /* Ensures full width for inputs */
            box-sizing: border-box;
        }

        input[type="submit"] {
            grid-column: span 2; /* Make the button span both columns */
            padding: 10px;
            font-size: 16px;
            color: white;
            background-color: #ffcc80; /* Orange background for the button */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: #ffa726; /* Darker orange on hover */
        }
	</style>
</head>
<body>
	
	<div class="register" >
        <a href="login.php">Login page</a>
		<h1>Register Here to Create an Account!</h1>
		<?php  
		if (isset($_SESSION['message']) && isset($_SESSION['status'])) {

			if ($_SESSION['status'] == "200") {
				echo "<h3 style='color: green;'>{$_SESSION['message']}</h3>";
			}

			else {
				echo "<h3 style='color: red;'>{$_SESSION['message']}</h3>";	
			}
		}
		unset($_SESSION['message']);
		unset($_SESSION['status']);
		?>

		<form action="core/handleForms.php" method="POST">
			
			<p>
				<label for="first_name">First Name</label>
				<input type="text" name="first_name">
			</p>
			<p>
				<label for="last_name">Last Name</label>
				<input type="text" name="last_name">
			</p>
            <p>
				<label for="username">Username</label>
				<input type="text" name="username">
			</p>
			<p>
				<label for="password">Password</label>
				<input type="password" name="password">
			</p>
			<p>
				<label for="confirm_password">Confirm Password</label>
				<input type="password" name="confirm_password">
			</p>
			<p>
				<input type="submit" name="insertNewUserBtn" value="Register" style="width: 80px; height: 30px; padding: 5px; font-size:1em;">
			</p>
		</form>
	</div>
</body>
</html>