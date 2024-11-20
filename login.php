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
            margin: 0 auto;
        }

        form {
            background-color: #FFF6E9;
            padding: 20px;
            border-radius: 10px;
            display: block;
            grid-template-columns: auto 1fr;
            gap: 10px 15px;
            align-items: center; 
        }

        label {
            font-size: 14px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"]{
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
    
	<div class="login">
        <?php  
            if (isset($_SESSION['message']) && isset($_SESSION['status'])) {

                if ($_SESSION['status'] == "200") {
                    echo "<h1 style='color: green;'>{$_SESSION['message']}</h1>";
                }

                else {
                    echo "<h1 style='color: red;'>{$_SESSION['message']}</h1>";	
                }

            }
            unset($_SESSION['message']);
            unset($_SESSION['status']);
        ?>
		<h1>Login here to access the Vertex Solutions Inc. Application System</h1>
		<form action="core/handleForms.php" method="POST">
            
			<p>
				<label for="username">Username</label>
				<input type="text" name="username">
			</p>
			<p>
				<label for="username">Password</label>
				<input type="password" name="password">
			</p>
			<p>
				<input type="submit" name="loginUserBtn" value="Login" style="width: 80px; height: 30px; padding: 5px; font-size:1em;">
			</p>
		</form>
		<p>Don't have an account? You may register <a href="register.php">here</a></p>
	</div>
	

</body>
</html>