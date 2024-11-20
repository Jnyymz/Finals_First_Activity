<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
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
                flex-direction: column;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                }
            

            .container{
                background-color: #FFF6E9; /* Light yellow background */
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                width: 680px; 
            }
            .deletebtn  {
                grid-column: span 2; /* Make the button span both columns */
                padding: 10px;
                font-size: 16px;
                color: white;
                background-color: #FF7F3E ; /* Orange background for the button */
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 10px;
            }

            .deletebtn:hover {
                background-color: #FF7F3E; /* Darker orange on hover */
            }

</style>
</head>
<body>
    <div class="delete">
        <a href="index.php">Back</a>
        <h1>Are you sure you want to delete this applicant?</h1>
        <?php $getApplicantByID = getApplicantByID($pdo, $_GET['applicant_id']); ?>
        <div class="container">
            
            <h2>First Name: <?php echo $getApplicantByID['first_name']; ?></h2>
            <h2>Last Name: <?php echo $getApplicantByID['last_name']; ?></h2>
            <h2>Gender: <?php echo $getApplicantByID['gender']; ?></h2>
            <h2>Age: <?php echo $getApplicantByID['age']; ?></h2>
            <h2>Email: <?php echo $getApplicantByID['email']; ?></h2>
            <h2>Phone Number: <?php echo $getApplicantByID['phone_number']; ?></h2>
            <h2>Position: <?php echo $getApplicantByID['position_applied_for']; ?></h2>
            <h2>Application Date: <?php echo $getApplicantByID['application_date']; ?></h2>

            <div class="deleteBtn">
                <form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
                    <input type="submit" name="deleteApplicantBtn" value="Delete" style="background-color: #FDE0DF; border-style: solid;">
                </form>			
            </div>	

        </div>
    </div>
</body>
</html>