<?php require_once 'core/handleForms.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
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
        input[type="number"],
        input[type="email"],
        input[type="tel"] {
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
    <div class="insert">
        <a href="index.php">Back</a>
        <h1>Fill this up to insert a new applicant for Hotel Staffs</h1>
        <form action="core/handleForms.php" method="POST">
            <p>
                <label for="first_name">First Name: </label> 
                <input type="text" name="first_name" required>
            </p>
            <p>
                <label for="last_ame">Last Name: </label> 
                <input type="text" name="last_name" required>
            </p>
            <p>
                <label for="gender">Gender: </label> 
                <input type="text" name="gender" required>
            </p>
            <p>
                <label for="email">Email: </label> 
                <input type="email" name="email" required>
            </p>
            <p>
                <label for="age">Age: </label> 
                <input type="number" name="age" required>
            </p>
            <p>
                <label for="phone_number">Phone Number: </label> 
                <input type="tel" name="phone_number" required>
            </p>
            <p>
                <label for="position_applied_for">Position: </label> 
                <input type="text" name="position_applied_for" required>
            </p>
            <p>
                <input type="submit" name="insertApplicantBtn">
            </p>
        </form>
    </div>
</body>
</html>